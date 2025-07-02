<?php 
class Product{
    public $price = 1000000;
}
$mobileProduct = new Product();
print$mobileProduct->price . "\n";
$mobileProduct->price = 2000000;
print$mobileProduct->price . "\n";