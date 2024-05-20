<?php

namespace ShipStream\Ups\Api\Model;

class ErrorResponseWrapper extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var list<Error>
     */
    protected $errors;
    /**
     * 
     *
     * @return list<Error>
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * 
     *
     * @param list<Error> $errors
     *
     * @return self
     */
    public function setErrors(array $errors) : self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;
        return $this;
    }
}