<?php
class Currency{
 
    public $name;
    public $symbol;
    public $dollar;
    public $pkr;

    public function pkrToDollar (){
        return  $this->pkr / $this->dollar;
    }

    public function dollarToPkr() {
        return $this->dollar * $this->pkr;
    }
    
}

$dollarRate = new Currency();
$dollarRate->dollar = 285;
$dollarRate->pkr = 285000;
$dollarRate->symbol = "$";
$dollarRate->name = "US Dollar";
echo "Pkr to Dollar: Rs. ". $dollarRate->pkr  . " To " .$dollarRate->pkrToDollar() . PHP_EOL ;

$pkrRate = new Currency();
$pkrRate->symbol = "Rs.";
$pkrRate->name = "Pakistani Rupee";
$pkrRate->dollar = 285;
$pkrRate->pkr = 285000;

echo "Dollar To PKR $ ". $dollarRate->dollar  . " To " .$pkrRate->dollarToPkr() . PHP_EOL ;