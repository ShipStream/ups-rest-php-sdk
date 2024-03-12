<?php

namespace ShipStream\Ups\Api\Model;

class ResponseResponseStatus extends \ArrayObject
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
    * Identifies the success or failure of the transaction. 
    1 = Successful
    *
    * @var string
    */
    protected $code;
    /**
     * Describes Response Status Code.Returns text of "Success".
     *
     * @var string
     */
    protected $description;
    /**
    * Identifies the success or failure of the transaction. 
    1 = Successful
    *
    * @return string
    */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
    * Identifies the success or failure of the transaction. 
    1 = Successful
    *
    * @param string $code
    *
    * @return self
    */
    public function setCode(string $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Describes Response Status Code.Returns text of "Success".
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * Describes Response Status Code.Returns text of "Success".
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}