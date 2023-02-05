<?php
function equationErrorHandler($errno, $errstr, $errfile, $errline)
{
    echo "Пользовательская ошибка с кодом $errno: $errstr\n";
    echo "Ошибка в строке $errline в $errfile\n";
}

set_error_handler("equationErrorHandler");

function solve_equation($a, $b)
{
    return -$b / $a;
}
echo solve_equation(0, -2);