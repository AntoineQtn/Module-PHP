<?php

include_once('header.php');

if ($produitChoisi == $products["iPhone"]["name"]) {
    $cartWeight = $products["iPhone"]["weight"] * $quantiteChoisie;
    echo "<h3>" . $products["iPhone"]["name"] . "</h3><br>";
    echo "<p>Quantity choose : " . $quantiteChoisie . "</p><br>";
    echo "<p>The unitary price is : " . formatPrice($products["iPhone"]["price"]) . " euros </p><br>";
    echo "<p>Your cart price is " . cartPrice($products["iPhone"]["price"], $quantiteChoisie) . " euros </p><br>";
    echo "<p> The discounted price is : " . discountedPrice($products["iPhone"]["price"], $products["iPhone"]["discount"]) . " euros <br>";
    echo "<p> ( " . $products["iPhone"]["discount"] . " % discount )</p><br>";
    echo "<p>Your cart weight is " . $cartWeight . " grams </p><br>";
    echo "<p>Shipping cost is : " . shippingCost($products["iPhone"]["weight"],  $quantiteChoisie, $products["iPhone"]["price"]) . " euros </p><br>";
    echo "<p>Total price is : " . totalPrice(cartPrice($products["iPhone"]["price"], $quantiteChoisie), shippingCost($products["iPhone"]["weight"],  $quantiteChoisie, $products["iPhone"]["price"])) . " euros </p><br>";
    echo "<img src='" . $products["iPhone"]["picture_url"] . "' alt='Image produit' /> <br>";
} elseif ($produitChoisi == $products["iPad"]["name"]) {
    $cartWeight = $products["iPad"]["weight"] * $quantiteChoisie;
    echo "<h3>" . $products["iPad"]["name"] . "</h3><br>";
    echo "<p>Quantity choose : " . $quantiteChoisie . "</p><br>";
    echo "<p>The unitary price is : " . formatPrice($products["iPad"]["price"]) . " euros </p><br>";
    echo "<p>Your cart price is : " . cartPrice($products["iPad"]["price"], $quantiteChoisie) . " euros </p><br>";
    echo "<p> The discounted price is : " . discountedPrice($products["iPad"]["price"], $products["iPad"]["discount"]) . " euros <br>";
    echo "<p> ( " . $products["iPad"]["discount"] . " % discount )</p><br>";
    echo "<p>Your cart weight is : " .  $cartWeight . " grams </p><br>";
    echo "<p>Shipping cost is : " . shippingCost($products["iPad"]["weight"],  $quantiteChoisie, $products["iPad"]["price"]) . " euros </p><br>";
    echo "<p>Total price is : " . totalPrice(cartPrice($products["iPad"]["price"], $quantiteChoisie), shippingCost($products["iPad"]["weight"],  $quantiteChoisie, $products["iPad"]["price"])) . " euros </p><br>";
    echo "<img src='" . $products["iPad"]["picture_url"] . "' alt='Image produit' /> <br>";
} elseif ($produitChoisi== $products["iMac"]["name"]) {
    $cartWeight = $products["iMac"]["weight"] * $quantiteChoisie;
    echo "<h3>" . $products["iMac"]["name"] . "</h3><br>";
    echo "<p>Quantity choose : " . $quantiteChoisie . "</p><br>";
    echo "<p>The unitary price is : " . formatPrice($products["iMac"]["price"]) . " euros </p><br>";
    echo "<p>Your cart price is : " . cartPrice($products["iMac"]["price"], $quantiteChoisie) . " euros </p><br>";
    echo "<p> The discounted price is : " . discountedPrice($products["iMac"]["price"], $products["iMac"]["discount"]) . " euros <br>";
    echo "<p> ( " . $products["iMac"]["discount"] . " % discount )</p><br>";
    echo "<p>Your cart weight is : " .  $cartWeight . " grams </p><br>";
    echo "<p>Shipping cost is : " . shippingCost($products["iMac"]["weight"],  $quantiteChoisie, $products["iMac"]["price"]) . " euros </p><br>";
    echo "<p>Total price is : " . totalPrice(cartPrice($products["iMac"]["price"], $quantiteChoisie), shippingCost($products["iMac"]["weight"],  $quantiteChoisie, $products["iPhone"]["price"])) . " euros </p><br>";
    echo "<img src='" . $products["iMac"]["picture_url"] . "' alt='Image produit' /> <br>";
} else {
}

?>