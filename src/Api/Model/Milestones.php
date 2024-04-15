<?php

namespace ShipStream\Ups\Api\Model;

class Milestones extends \ArrayObject
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
     * @var string|null
     */
    protected $category;
    /**
     * 
     *
     * @var string|null
     */
    protected $code;
    /**
     * 
     *
     * @var bool|null
     */
    protected $current;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $linkedActivity;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var SubMilestone|null
     */
    protected $subMilestone;
    /**
     * 
     *
     * @return string|null
     */
    public function getCategory() : ?string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string|null $category
     *
     * @return self
     */
    public function setCategory(?string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * 
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
     * 
     *
     * @return bool|null
     */
    public function getCurrent() : ?bool
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param bool|null $current
     *
     * @return self
     */
    public function setCurrent(?bool $current) : self
    {
        $this->initialized['current'] = true;
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
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
     * 
     *
     * @return string|null
     */
    public function getLinkedActivity() : ?string
    {
        return $this->linkedActivity;
    }
    /**
     * 
     *
     * @param string|null $linkedActivity
     *
     * @return self
     */
    public function setLinkedActivity(?string $linkedActivity) : self
    {
        $this->initialized['linkedActivity'] = true;
        $this->linkedActivity = $linkedActivity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return SubMilestone|null
     */
    public function getSubMilestone() : ?SubMilestone
    {
        return $this->subMilestone;
    }
    /**
     * 
     *
     * @param SubMilestone|null $subMilestone
     *
     * @return self
     */
    public function setSubMilestone(?SubMilestone $subMilestone) : self
    {
        $this->initialized['subMilestone'] = true;
        $this->subMilestone = $subMilestone;
        return $this;
    }
}