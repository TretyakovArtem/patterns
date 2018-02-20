<?php

require_once 'vendor/autoload.php';

use Interpreter\Classes\InterpreterContext;
use Interpreter\Classes\LiteralExpression;

$context = new InterpreterContext();

$literal = new LiteralExpression('Четыре');

$literal->interpret($context);

print $context->lookup($literal);
