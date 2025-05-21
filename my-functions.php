<?php

function formatPrice($priceInCents)
{
    $price = $priceInCents / 100;
    return $price;
};
//formatPrice(1000);

function priceExcludingVAT($priceTTC)
{
    $priceTTC = formatPrice($priceTTC);
    $tva = 5.5;
    $priceHT = (100 * $priceTTC) / (100 + $tva);
    return $priceHT;
}
//priceExcludingVAT(10);

function discountedPrice($price, $discount)
{
    $price = formatPrice($price);
    $price = $price - ($price * $discount / 100);
    return $price;
}
//discountedPrice(100, 10);
