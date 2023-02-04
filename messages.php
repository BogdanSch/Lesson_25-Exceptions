<?php
class myException extends Exception
{
    function __toString()
    {
        return "Исключение " . $this->getCode() . ": " . $this->getMessage() . "<br />" . " в " . $this->getFile() . ", строка " . $this->getLine() . "<br />";
    }
}
try {
    throw new myException("Произошла ошибка", 42);
} catch (myException $m) {
    echo $m;
}