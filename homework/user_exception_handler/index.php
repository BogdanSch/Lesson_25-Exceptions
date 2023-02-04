<?php
function equationErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo "Пользовательская ошибка с кодом $errno: $errstr\n";
    echo "Ошибка в строке $errline в $errfile\n";
}

set_error_handler("equationErrorHandler");

$a = 0;
$b = -2;
$c = 4;
if ($a === 0) {
    trigger_error("Division by zero");
} else {
    $x = $b / $a - $b;
    echo $x;
}