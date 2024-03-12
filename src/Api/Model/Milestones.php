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
     * @var string
     */
    protected $category;
    /**
     * 
     *
     * @var string
     */
    protected $code;
    /**
     * 
     *
     * @var bool
     */
    protected $current;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $linkedActivity;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var SubMilestone
     */
    protected $subMilestone;
    /**
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * 
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
     * 
     *
     * @return bool
     */
    public function getCurrent() : bool
    {
        return $this->current;
    }
    /**
     * 
     *
     * @param bool $current
     *
     * @return self
     */
    public function setCurrent(bool $current) : self
    {
        $this->initialized['current'] = true;
        $this->current = $current;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
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
    /**
     * 
     *
     * @return string
     */
    public function getLinkedActivity() : string
    {
        return $this->linkedActivity;
    }
    /**
     * 
     *
     * @param string $linkedActivity
     *
     * @return self
     */
    public function setLinkedActivity(string $linkedActivity) : self
    {
        $this->initialized['linkedActivity'] = true;
        $this->linkedActivity = $linkedActivity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return SubMilestone
     */
    public function getSubMilestone() : SubMilestone
    {
        return $this->subMilestone;
    }
    /**
     * 
     *
     * @param SubMilestone $subMilestone
     *
     * @return self
     */
    public function setSubMilestone(SubMilestone $subMilestone) : self
    {
        $this->initialized['subMilestone'] = true;
        $this->subMilestone = $subMilestone;
        return $this;
    }
}