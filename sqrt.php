<?php
class NegativeValue extends Exception
{
    private $value;
    public function __construct($message, $code, $value)
    {
        parent::__construct($message, $code);
        $this->value = $value;
    }
    public function getValue()
    {
        return $this->value;
    }
    public function __toString()
    {
        return "Исключение " . $this->getCode() . ": " . $this->getMessage() . "\n"
            . " в " . $this->getFile() . ", строка " . $this->getLine() . "\n"
            . "значение x:" . $this->value;
    }
}
function my_sqrt($x)
{
    if ($x < 0) {
        throw new NegativeValue("Отрицательное значение!", E_ERROR, $x);
    }
    return sqrt($x);
}
try {
    $x = -1;
    $z = 10;
    $y = my_sqrt($x * $z);
    echo $y;
} catch (NegativeValue $ex) {
    echo $ex;
} catch (Exception $ex) {
    echo $ex;
}