<?php

namespace ShipStream\Ups\Api\Model;

class Errors extends \ArrayObject
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
     * Error Code
     *
     * @var string|null
     */
    protected $code;
    /**
     * Description of the error
     *
     * @var string|null
     */
    protected $description;
    /**
     * Consumer tailored error message
     *
     * @var string|null
     */
    protected $message;
    /**
     * The value that caused the error.
     *
     * @var string|null
     */
    protected $value;
    /**
     * The path to the field causing the error as returned from the backend services
     *
     * @var string|null
     */
    protected $field;
    /**
     * Error Code
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Error Code
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Description of the error
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Description of the error
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Consumer tailored error message
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * Consumer tailored error message
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * The value that caused the error.
     *
     * @return string|null
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * The value that caused the error.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The path to the field causing the error as returned from the backend services
     *
     * @return string|null
     */
    public function getField() : ?string
    {
        return $this->field;
    }
    /**
     * The path to the field causing the error as returned from the backend services
     *
     * @param string|null $field
     *
     * @return self
     */
    public function setField(?string $field) : self
    {
        $this->initialized['field'] = true;
        $this->field = $field;
        return $this;
    }
}