<?php

namespace ShipStream\Ups\Api\Model;

class OptionsOption extends \ArrayObject
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
     * Key of the answer for question type 3.
     *
     * @var string
     */
    protected $key;
    /**
     * Text for this answer choice
     *
     * @var string
     */
    protected $value;
    /**
     * Key of the answer for question type 3.
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * Key of the answer for question type 3.
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * Text for this answer choice
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * Text for this answer choice
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}