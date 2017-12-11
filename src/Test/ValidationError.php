<?php

namespace WakeOnWeb\Component\Swagger\Test;

class ValidationError
{
    /**
     * @var string
     */
    private $property;

    /**
     * @var string
     */
    private $pointer;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $constraint;

    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param string $property
     *
     * @return ValidationError
     */
    public function setProperty($property)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * @return string
     */
    public function getPointer()
    {
        return $this->pointer;
    }

    /**
     * @param string $pointer
     *
     * @return ValidationError
     */
    public function setPointer($pointer)
    {
        $this->pointer = $pointer;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return ValidationError
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * @param string $constraint
     *
     * @return ValidationError
     */
    public function setConstraint($constraint)
    {
        $this->constraint = $constraint;

        return $this;
    }
}
