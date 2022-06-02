<?php

namespace B1\AmazonSPAPI\Model;

class BaseModel
{
    /**
     * Support for virtual properties getters.
     *
     * Virtual property call example:
     *
     *   $action->property
     *
     * Direct getter(preferred):
     *
     *   $action->getProperty()
     *
     * @param string $propertyName name of the property
     */
    public function __get($propertyName)
    {
        $validPropertyName = ucfirst($propertyName);
        $getter = "get$validPropertyName";
        return $this->$getter();
    }

    /**
     * Support for virtual properties setters.
     *
     * Virtual property call example:
     *
     *   $action->property  = 'ABC'
     *
     * Direct setter (preferred):
     *
     *   $action->setProperty('ABC')
     *
     * @param string $propertyName name of the property
     * @param $propertyValue
     * @return $this
     */
    public function __set($propertyName, $propertyValue)
    {
        $validPropertyName = ucfirst($propertyName);
        $setter = "set$validPropertyName";
        $this->$setter($propertyValue);
        return $this;
    }

}
