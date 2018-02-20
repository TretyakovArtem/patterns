<?php

namespace Interpreter\Abstracters;

/**
 * Class Expression
 *
 * @package \Interpreter\Abstracters
 */
abstract class Expression
{
    private static $keycount = 0;
    private $key;

    abstract function interpret(InpreterContext $context);

    function getKey() {
        if (!isset($this->key)) {
            self::$keycount++;
            $this->key=self::$keycount;
        }
        return $this->key;
    }
}
