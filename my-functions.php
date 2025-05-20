<?php
function formatPrice($priceInCents)
{
    $price = $priceInCents / 100;
    echo "The price for $priceInCents cents is $price euros";
};
formatPrice(1000);

$tva = 5;
function priceExcludingVAT($priceTTC){
    $priceHT = (100*$priceTTC) / ( 100 + $tva );
    echo "The price excluding VAT is $priceHT euros";
    return $priceHT;
}
priceExcludingVAT(1000);