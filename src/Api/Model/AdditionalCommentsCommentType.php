<?php

namespace ShipStream\Ups\Api\Model;

class AdditionalCommentsCommentType extends \ArrayObject
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
     * Comment code is 01 for AccessPoint LCO pickup time comment.
     *
     * @var string|null
     */
    protected $code;
    /**
     * Access point LCO pickup time comment
     *
     * @var string|null
     */
    protected $text;
    /**
     * Comment code is 01 for AccessPoint LCO pickup time comment.
     *
     * @return string|null
     */
    public function getCode() : ?string
    {
        return $this->code;
    }
    /**
     * Comment code is 01 for AccessPoint LCO pickup time comment.
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
     * Access point LCO pickup time comment
     *
     * @return string|null
     */
    public function getText() : ?string
    {
        return $this->text;
    }
    /**
     * Access point LCO pickup time comment
     *
     * @param string|null $text
     *
     * @return self
     */
    public function setText(?string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
}