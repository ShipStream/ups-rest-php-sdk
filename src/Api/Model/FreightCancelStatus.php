<?php

namespace ShipStream\Ups\Api\Model;

class FreightCancelStatus extends \ArrayObject
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
     * Identifies the success or failure of the transaction.�� 1 = Successful�
     *
     * @var string|null
     */
    protected $code;
    /**
     * Describes Response Status Code above.
     *
     * @var string|null
     */
    protected $description;
    /**
     * Identifies the success or failure of the transaction.�� 1 = Successful�
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Identifies the success or failure of the transaction.�� 1 = Successful�
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
     * Describes Response Status Code above.
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * Describes Response Status Code above.
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
}