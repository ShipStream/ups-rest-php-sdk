<?php

namespace ShipStream\Ups\Api\Model;

class Response extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The error response containing any errors that occurred.
     *
     * @var ErrorMessage[]
     */
    protected $errors;
    /**
     * The error response containing any errors that occurred.
     *
     * @return ErrorMessage[]
     */
    public function getErrors() : array
    {
        return $this->errors;
    }
    /**
     * The error response containing any errors that occurred.
     *
     * @param ErrorMessage[] $errors
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