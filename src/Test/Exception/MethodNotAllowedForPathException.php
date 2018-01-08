<?php

namespace WakeOnWeb\Component\Swagger\Test\Exception;

class MethodNotAllowedForPathException extends SwaggerValidatorException
{
    /**
     * @param string $method
     *
     * @return SwaggerValidatorException
     */
    public static function fromNotAllowedMethod($method)
    {
        return new self(sprintf('The request method is unknown to the schema on the given path. Got %s.', $method));
    }
}
