<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationAdditionalComments extends \ArrayObject
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
     * @var list<AdditionalCommentsCommentType>|null
     */
    protected $commentType;
    /**
     * 
     *
     * @return list<AdditionalCommentsCommentType>|null
     */
    public function getCommentType() : ?array
    {
        return $this->commentType;
    }
    /**
     * 
     *
     * @param list<AdditionalCommentsCommentType>|null $commentType
     *
     * @return self
     */
    public function setCommentType(?array $commentType) : self
    {
        $this->initialized['commentType'] = true;
        $this->commentType = $commentType;
        return $this;
    }
}