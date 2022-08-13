<title><?= basename($_SERVER['PHP_SELF'], '.php');?></title>
<?php

class Number {
    private int|float $number;

    public function setNumber(int|float $number): void {
        $this->number = $number;
    }

    public function getNumber(): int|float {
        return $this->number;
    }
}


$number = new Number;

$number->setNumber(5);
echo $number->getNumber() . "<hr>";

$number->setNumber(9.32);
echo $number->getNumber() . "<hr>";

$number->setNumber("554");
echo $number->getNumber() . "<hr>";

// izbacuje fatal error, posto prosledjujemo string, a ne int ili float kao parametar
$number->setNumber("neki string");
echo $number->getNumber() . "<hr>";

//function sabiranje (int|float $x, int|float $y){
//    echo $x + $y . "<br>";
//}
//
//sabiranje (5, 3);
//sabiranje (5.4, 3.6);
//sabiranje (5, "3");
//// izbacuje fatal error, posto prosledjujemo string, a ne int ili float kao parametar
//sabiranje (5, "neki string");

?>
