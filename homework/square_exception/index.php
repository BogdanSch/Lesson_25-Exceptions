<?php

function solve_square_equation($a, $b, $c){
    if($a === 0) throw new Exception("Non square equation!");
    $D = $b * $b - 4 * $a * $c;
    if($D > 0){
        $x1 = (-$b + $D ** 1 / 2) / (2 * $a);
        $x2 = (-$b - $D ** 1 / 2) / (2 * $a);
        return "x1: $x1, x2: $x2";
    }elseif($D == 0){
        $x = -$b / (2 * $a);
        return "x: $x";
    }else{
        throw new Exception("There're no solutions");
    }
}

try{
    echo solve_square_equation(0, -11, -4);
}catch(Exception $e){
    echo $e;
    error_log($e);
}