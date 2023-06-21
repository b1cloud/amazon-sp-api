<?php

namespace B1\AmazonSPAPI\Helpers;

use B1\AmazonSPAPI\ApiException;
use B1\AmazonSPAPI\ObjectSerializer;
use B1\AmazonSPAPI\Signature;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use Psr\Http\Message\ResponseInterface;

trait SellingPartnerApiRequest
{
    private function generateRequest(
        bool   $multipart,
        array  $formParams,
        array  $queryParams,
        string $resourcePath,
        array  $headerParams,
        string $method,
               $httpBody
    ): Request
    {
        if (null != $formParams) {
            ksort($formParams);
        }
        if (null != $queryParams) {
            ksort($queryParams);
        }
        // body params
        $_tempBody = $httpBody;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && 'application/json' === $headers['Content-Type']) {
                $httpBody = Utils::jsonEncode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headers['Content-Type']) {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }
        $query = Query::build($queryParams);
        $amazonHeader = Signature::calculateSignature(
            $this->config,
            str_replace('https://', '', $this->config->getHost()),
            $method,
            $resourcePath,
            $query,
            (string)$httpBody
        );
        $headers = array_merge(
            $headerParams,
            $headers,
            $amazonHeader
        );

        return new Request(
            $method,
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * @throws ApiException
     */
    private function sendRequest(Request $request, string $returnType): array
    {
        try {
            $options = $this->createHttpClientOption();
            try {
                $this->writeRequestDebug($request);
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null);
            }
            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ('\SplFileObject' === $returnType) {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }
            $this->writeResponseDebug($response);
            return [
                ObjectSerializer::deserialize($content, $returnType, $response->getHeaders()),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            $this->writeExceptionDebug($e);
            switch ($e->getCode()) {
                case 503:
                case 500:
                case 429:
                case 404:
                case 403:
                case 401:
                case 400:
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create http client option.
     *
     * @return array of http client options
     * @throws \RuntimeException on file opening failure
     *
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
        }

        return $options;
    }

    /**
     * @return mixed
     * @throws ApiException
     *
     */
    private function sendRequestAsync(Request $request, string $returnType)
    {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ('\SplFileObject' === $returnType) {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ('string' !== $returnType) {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
                }
            );
    }

    /**
     * Writes to the debug log file
     *
     * @param mixed $data
     * @return void
     */
    private function writeResponseDebug(ResponseInterface $response)
    {
        if ($this->config->getDebug()) {
            $debug = "\n[" . date('Y-m-d H:i:s') . '] Response:' . "\n";
            $debug .= "< HTTP/{$response->getProtocolVersion()} {$response->getStatusCode()}\n";
            foreach ($response->getHeaders() as $headerName => $header) {
                $debug .= "< {$headerName}: " . $header[0] . "\n";
            }
            $responseBody = $response->getBody();
            file_put_contents($this->config->getDebugFile(), $debug . $responseBody . "\n\n", FILE_APPEND);
        }
    }

    private function writeRequestDebug(Request $request)
    {
        if ($this->config->getDebug()) {
            $postPayload = (string)$request->getBody();
            $query = (string)$request->getUri()->getQuery();
            $debug = "[" . date('Y-m-d H:i:s') . "] Request:\n";
            $debug .= "> {$request->getMethod()} " . $request->getUri()->getPath() . "\n";
            if($query) {
                $debug .= "Query string: " . $query . "\n";
            }
            $debug .= "Host: " . $request->getUri()->getHost() . "\n";
            foreach ($request->getHeaders() as $headerName => $header) {
                $debug .= "{$headerName}: " . $header[0] . "\n";
            }
            if ($postPayload) {
                $debug .= 'Payload: ' . $postPayload . "\n\n";
            }
            file_put_contents($this->config->getDebugFile(), $debug, FILE_APPEND);
        }
    }

    private function writeExceptionDebug(ApiException $e)
    {
        if ($this->config->getDebug()) {
            $debug = "\n[" . date('Y-m-d H:i:s') . '] Response:' . "\n";
            $debug .= "< {$e->getCode()}\n";
            foreach ($e->getResponseHeaders() as $headerName => $header) {
                $debug .= "< {$headerName}: " . $header[0] . "\n";
            }
            $responseBody = $e->getResponseBody();
            file_put_contents($this->config->getDebugFile(), $debug . $responseBody . "\n\n", FILE_APPEND);
        }

    }
}
