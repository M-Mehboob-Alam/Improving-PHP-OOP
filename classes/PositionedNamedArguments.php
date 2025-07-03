<?php
class PositionedNamedArgument{
    public $dollarPrice = 285;
  
    public function prkToDollarConverter( $amount = 50000, $symbol = "$" ){
          $convertedCurrency =  $amount /$this->dollarPrice ;
          return $symbol . $convertedCurrency;
    }
}
$converter = new PositionedNamedArgument();
echo $converter->prkToDollarConverter( symbol:"USD " );