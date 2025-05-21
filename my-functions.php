<?php

function formatPrice($priceInCents)
{
    $price = $priceInCents / 100;
    echo "The price for $priceInCents cents is $price euros<br>";
    return $price;
};
//formatPrice(1000);

function priceExcludingVAT($priceTTC)
{
    $priceTTC = formatPrice($priceTTC);
    $tva = 5.5;
    $priceHT = (100 * $priceTTC) / (100 + $tva);
    echo "The price excluding VAT is $priceHT euros<br>";
    return $priceHT;
}
//priceExcludingVAT(10);

function discountedPrice($price, $discount)
{
    $price = formatPrice($price);
    $price = $price - ($price * $discount / 100);
    echo "The discounted price is $price euros<br>";
    return $price;
}
//discountedPrice(100, 10);
