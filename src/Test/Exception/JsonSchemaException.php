<?php

namespace WakeOnWeb\Component\Swagger\Test\Exception;

/**
 * @author Quentin Schuler <q.schuler@wakeonweb.com>
 */
class JsonSchemaException extends ContentValidatorException
{
    /**
     * @var array
     */
    private $errors = [];

    public function __construct($message = "", array $errors = [])
    {
        parent::__construct($message);

        $this->errors = $errors;
    }

    /**
     * @param string[] $errors
     *
     * @return JsonSchemaException
     */
    public static function fromValidationErrors(array $errors)
    {
        $message = 'The validated document contains validation errors:';

        return new JsonSchemaException($message, $errors);
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
