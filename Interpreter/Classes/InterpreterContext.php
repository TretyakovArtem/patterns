<?php

namespace Interpreter\Classes;


use Interpreter\Abstracters\Expression;

/**
 * Class InterpreterContext
 *
 * @package \Interpreter\Classes
 */
class InterpreterContext
{
    private $expressionstore = [];

    function replace(Expression $exp, $value) {
        $this->expressionstore[$exp->getKey()] = $value;
    }

    function lookup(Expression $exp) {
        return $this->expressionstore[$exp->getKey()];
    }
}
