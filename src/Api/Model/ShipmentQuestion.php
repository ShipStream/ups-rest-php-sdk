<?php

namespace ShipStream\Ups\Api\Model;

class ShipmentQuestion extends \ArrayObject
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
     * The name of the question.
     *
     * @var string
     */
    protected $name;
    /**
     * The question text.
     *
     * @var string
     */
    protected $text;
    /**
    * Values are:
    1 - Question that requires a numeric answer only.
    2 - Question that requires an answer true or false.
    3 � Question that has multiple choice answers and the answers are provided.
    Only one choice is allowed.
    *
    * @var string
    */
    protected $type;
    /**
     * Container for the choice of answer. Present when the 			question type is 3.
     *
     * @var QuestionOptions
     */
    protected $options;
    /**
     * The name of the question.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the question.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * The question text.
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The question text.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
    * Values are:
    1 - Question that requires a numeric answer only.
    2 - Question that requires an answer true or false.
    3 � Question that has multiple choice answers and the answers are provided.
    Only one choice is allowed.
    *
    * @return string
    */
    public function getType() : string
    {
        return $this->type;
    }
    /**
    * Values are:
    1 - Question that requires a numeric answer only.
    2 - Question that requires an answer true or false.
    3 � Question that has multiple choice answers and the answers are provided.
    Only one choice is allowed.
    *
    * @param string $type
    *
    * @return self
    */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Container for the choice of answer. Present when the 			question type is 3.
     *
     * @return QuestionOptions
     */
    public function getOptions() : QuestionOptions
    {
        return $this->options;
    }
    /**
     * Container for the choice of answer. Present when the 			question type is 3.
     *
     * @param QuestionOptions $options
     *
     * @return self
     */
    public function setOptions(QuestionOptions $options) : self
    {
        $this->initialized['options'] = true;
        $this->options = $options;
        return $this;
    }
}