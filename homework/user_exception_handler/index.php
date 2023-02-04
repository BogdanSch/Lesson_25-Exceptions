<?php
function equationErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo "Пользовательская ошибка с кодом $errno: $errstr\n";
    echo "Ошибка в строке $errline в $errfile\n";
}

set_error_handler("equationErrorHandler");

function solve_equation($a, $b, $c)
{
    if ($a === 0) {
        trigger_error("Division by zero");
        return;
    }
    return $b / $a - $b;
}
echo solve_equation(0, -2, 4);