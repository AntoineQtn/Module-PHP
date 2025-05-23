<?php
session_start();
include_once('header.php');
include_once('formulaire.php');
include_once('functions_variables_object.php');


if (!isset($produitChoisi) && isset($_SESSION["produitChoisi"], $_SESSION["quantiteChoisie"])) {
    $produitChoisi = $_SESSION["produitChoisi"];
    $quantiteChoisie = $_SESSION["quantiteChoisie"];
}

if (isset($produitChoisi) && isset($quantiteChoisie)) {
    foreach ($products as $key => $product) {
        if ($key == $produitChoisi) {
            $cartWeight = $product["weight"] * $quantiteChoisie;

            echo "<h3>" . $key . "</h3>";
            echo "<p>The unitary price is : " . formatPrice($product["price"]) . " euros </p><br>";
            echo "<p> The discounted price is : " . discountedPrice($product["price"], $product["discount"]) . " euros <br>";
            echo "<p> ( " . $product["discount"] . " % discount )</p><br>";
            echo "<p>Quantity chosen : " . $quantiteChoisie . "</p><br>";
            echo "<p>Your cart price is " . cartPrice($product["price"], $quantiteChoisie) . " euros </p><br>";
            echo "<p>Your cart weight is " . $cartWeight . " grams </p><br>";

            if (isset($_POST['switch_transporter'])) {
                $shipping = shippingCost2($product["weight"], $quantiteChoisie, $product["price"]);
                $total = totalPrice2(cartPrice($product["price"], $quantiteChoisie), $shipping);
                echo "<p><strong>Transporteur 2 sélectionné :</strong></p>";
                echo "<p>Shipping cost is : " . $shipping . " euros </p><br>";
                echo "<p>Total price is : " . $total . " euros </p><br>";
                $_SESSION["produitChoisi"] = $produitChoisi;
                $_SESSION["quantiteChoisie"] = $quantiteChoisie;
                var_dump($_SESSION);
            } else {
                $shipping = shippingCost($product["weight"], $quantiteChoisie, $product["price"]);
                $total = totalPrice(cartPrice($product["price"], $quantiteChoisie), $shipping);
                echo "<p><strong>Transporteur 1 sélectionné :</strong></p>";
                echo "<p>Shipping cost is : " . $shipping . " euros </p><br>";
                echo "<p>Total price is : " . $total . " euros </p><br>";
            }

            echo "<img src='" . $product["picture_url"] . "' alt='Image produit' /> <br>";
            echo '<form method="post">';
            echo '<input type="submit" name="switch_transporter" value="switch transporter">';
            echo '</form>';


            $_SESSION["produitChoisi"] = $produitChoisi;
            $_SESSION["quantiteChoisie"] = $quantiteChoisie;
            var_dump($_SESSION);
        }
    }
}
