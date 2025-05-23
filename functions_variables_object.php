<?php

$products = [
    "iPhone" => [
        "name" => "iPhone",
        "price" => 9850,
        "weight" => 200,
        "discount" => 10,
        "picture_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/IPhone_16_Pro_Vector.svg/800px-IPhone_16_Pro_Vector.svg.png",
    ],
    "iPad" => [
        "name" => "iPad",
        "price" => 79900,
        "weight" => 500,
        "discount" => null,
        "picture_url" => "https://media.materiel.net/r250/products/MN0005046452_1.jpg",
    ],
    "iMac" => [
        "name" => "iMac",
        "price" => 45000,
        "weight" => 5000,
        "discount" => 50,
        "picture_url" => "https://static.fnac-static.com/multimedia/Images/FR/MDM/19/b2/a1/10596889/1540-1/tsp20250110194849/iMac-Apple-27-Ecran-Retina-5K-Intel-Core-i5-8-Go-RAM-1-To-Fusion-Drive-Argent-MRQY2FN-2019.jpg",
    ],
];
/*foreach ($products as $key => $product) { // Parcourt chaque produit dans le tableau $products en initialisant une variable $key (iPhone, iPad et iMac) pour la clé et $product pour la valeur
echo "<p><b>$key</b></p>"; // Affiche la clé du produit (iPhone, iPad, iMac) en gras
echo "<ul>"; // Ouvre une liste non ordonnée contennant :
    foreach ($product as $attribute => $value) { // une deuxième boucle qui parcourt chaque attribut du produit en initialisant une variable $attribute pour la clé (name, price, weight, discount, picture_url) et $value pour la valeur
    echo "<li>$attribute: $value</li>"; // Affiche chaque attribut du produit sous forme de liste
    }
    $price = formatPrice($product["price"]);
    echo "The price product is $price euros <br>";
    echo "The price product without VAT is ". priceExcludingVAT($product["price"]) ." euros <br>"; // Appel de la fonction priceExcludingVAT() pour afficher le prix hors TVA de l'iPhone
    echo "The discounted price product is " . discountedPrice($product["price"], $product["discount"]) . " euros <br>"; // Appel de la fonction discountedPrice() pour afficher le prix remisé de l'iPhone
    echo "</ul>"; // Ferme la liste de produits non ordonnée
}*/
?>

<?php
function formatPrice($price): float
{
    $price = $price / 100;
    return $price;
}
function priceExcludingVAT($price): float
{
    $price = formatPrice($price);
    $tva = 5.5;
    $priceHT = (100 * $price) / (100 + $tva);
    return $priceHT;
}
function discountedPrice($price, $discount): float
{
    $price = formatPrice($price);
    $price = $price - ($price * $discount / 100);
    return $price;
}
function cartPrice($price, $quantity): float
{
    $price = formatPrice($price);
    $price = $price * $quantity;
    return $price;
}
function shippingCost($weight, $quantity, $price): float
{
    $price = cartPrice($price, $quantity);
    $cartWeight = $weight * $quantity;
    if ($cartWeight < 500) {
        $shippingCost = 5;
        return $shippingCost;
    } elseif ($cartWeight >= 500 && $cartWeight < 2000) {
        $shippingCost = (10 / 100) * $price;
        return $shippingCost;
    } else {
        $shippingCost = 0;
        return $shippingCost;
    }
}
function totalPrice($price, $shippingCost): float
{
    $totalPrice = $price + $shippingCost;
    return $totalPrice;
}


function shippingCost2($weight, $quantity, $price): float
{
    $price = cartPrice($price, $quantity);
    $cartWeight = $weight * $quantity;
    if ($cartWeight < 500) {
        $shippingCost2 = 10;
        return $shippingCost2;
    } elseif ($cartWeight >= 500 && $cartWeight < 2000) {
        $shippingCost2 = (15 / 100) * $price;
        return $shippingCost2;
    } else {
        $shippingCost2 = 1;
        return $shippingCost2;
    }
}
function totalPrice2($price, $shippingCost2): float
{
    $totalPrice2 = $price + $shippingCost2;
    return $totalPrice2;
}




?>