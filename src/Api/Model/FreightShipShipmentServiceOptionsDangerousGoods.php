<?php

namespace ShipStream\Ups\Api\Model;

class FreightShipShipmentServiceOptionsDangerousGoods extends \ArrayObject
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
     * The contact name for question re: Dangerous Goods.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Phone Container.
     *
     * @var DangerousGoodsPhone|null
     */
    protected $phone;
    /**
     * The contact name for question re: Dangerous Goods.
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * The contact name for question re: Dangerous Goods.
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Phone Container.
     *
     * @return DangerousGoodsPhone|null
     */
    public function getPhone() : ?DangerousGoodsPhone
    {
        return $this->phone;
    }
    /**
     * Phone Container.
     *
     * @param DangerousGoodsPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?DangerousGoodsPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
}