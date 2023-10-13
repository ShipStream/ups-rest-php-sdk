<?php

namespace ShipStream\Ups\Api\Model;

class DropLocationAdditionalComments extends \ArrayObject
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
     * 
     *
     * @var AdditionalCommentsCommentType[]
     */
    protected $commentType;
    /**
     * 
     *
     * @return AdditionalCommentsCommentType[]
     */
    public function getCommentType() : array
    {
        return $this->commentType;
    }
    /**
     * 
     *
     * @param AdditionalCommentsCommentType[] $commentType
     *
     * @return self
     */
    public function setCommentType(array $commentType) : self
    {
        $this->initialized['commentType'] = true;
        $this->commentType = $commentType;
        return $this;
    }
}