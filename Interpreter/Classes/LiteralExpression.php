<?php

namespace Interpreter\Classes;

/**
 * Class LiteralExpression
 *
 * @package \Interpreter\Classes
 */
class LiteralExpression
{
    private $value;

    function __construct($value)
    {
        $this->value = $value;
    }

    function interpret(InterpreterContext $context) {
        $context->replace($this, $this->value);
    }

}
