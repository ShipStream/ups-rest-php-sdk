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
     * The milestone category. This will be present only when a milestone is in a COMPLETE state.
     *
     * @var string
     */
    protected $category;
    /**
     * The milestone code.
     *
     * @var string
     */
    protected $code;
    /**
     * The indication if the milestone represents the current state of the package. Valid values: 'true' this milestone is the current state of the package.  'false' this milestone is not current.
     *
     * @var bool
     */
    protected $current;
    /**
     * The milestone description. Note: this is not translated at this time and is returned in US English.
     *
     * @var string
     */
    protected $description;
    /**
     * The 0-based index of the activity that triggered this milestone. This will be returned only when a milestone is in a COMPLETE state. For example the most recent activity on the response is index 0.
     *
     * @var string
     */
    protected $linkedActivity;
    /**
     * The milestone state. Valid values: 'This milestone has already occurred'/'This milestone has not yet been completed'.
     *
     * @var string
     */
    protected $state;
    /**
     * The sub-milestone container containing information on a child milestone. Will be present only if a child milestone exists.
     *
     * @var SubMilestone
     */
    protected $subMilestone;
    /**
     * The milestone category. This will be present only when a milestone is in a COMPLETE state.
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * The milestone category. This will be present only when a milestone is in a COMPLETE state.
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
     * The milestone code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->code;
    }
    /**
     * The milestone code.
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
     * The indication if the milestone represents the current state of the package. Valid values: 'true' this milestone is the current state of the package.  'false' this milestone is not current.
     *
     * @return bool
     */
    public function getCurrent() : bool
    {
        return $this->current;
    }
    /**
     * The indication if the milestone represents the current state of the package. Valid values: 'true' this milestone is the current state of the package.  'false' this milestone is not current.
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
     * The milestone description. Note: this is not translated at this time and is returned in US English.
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * The milestone description. Note: this is not translated at this time and is returned in US English.
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
     * The 0-based index of the activity that triggered this milestone. This will be returned only when a milestone is in a COMPLETE state. For example the most recent activity on the response is index 0.
     *
     * @return string
     */
    public function getLinkedActivity() : string
    {
        return $this->linkedActivity;
    }
    /**
     * The 0-based index of the activity that triggered this milestone. This will be returned only when a milestone is in a COMPLETE state. For example the most recent activity on the response is index 0.
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
     * The milestone state. Valid values: 'This milestone has already occurred'/'This milestone has not yet been completed'.
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * The milestone state. Valid values: 'This milestone has already occurred'/'This milestone has not yet been completed'.
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
     * The sub-milestone container containing information on a child milestone. Will be present only if a child milestone exists.
     *
     * @return SubMilestone
     */
    public function getSubMilestone() : SubMilestone
    {
        return $this->subMilestone;
    }
    /**
     * The sub-milestone container containing information on a child milestone. Will be present only if a child milestone exists.
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