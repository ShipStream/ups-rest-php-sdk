<?php

namespace ShipStream\Ups\Api\Model;

class QuestionOptions extends \ArrayObject
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
     * Container for the choice of answer. Present when the 			question type is 3.
     *
     * @var OptionsOption
     */
    protected $option;
    /**
     * Container for the choice of answer. Present when the 			question type is 3.
     *
     * @return OptionsOption
     */
    public function getOption() : OptionsOption
    {
        return $this->option;
    }
    /**
     * Container for the choice of answer. Present when the 			question type is 3.
     *
     * @param OptionsOption $option
     *
     * @return self
     */
    public function setOption(OptionsOption $option) : self
    {
        $this->initialized['option'] = true;
        $this->option = $option;
        return $this;
    }
}