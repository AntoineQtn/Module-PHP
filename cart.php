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

function formatPrice($priceInCents)
{
    $price = $priceInCents / 100;
    return $price;
}


function priceExcludingVAT($priceTTC)
{
    $priceTTC = formatPrice($priceTTC);
    $tva = 5.5;
    $priceHT = (100 * $priceTTC) / (100 + $tva);
    return $priceHT;
}


function discountedPrice($price, $discount)
{
    $price = formatPrice($price);
    if ($discount !== null) {
        $price = $price - ($price * $discount / 100);
    }
    return $price;
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $produit = $_POST["product"];
    $quantity = (int) $_POST["quantity"];

    // Vérifier si le produit existe dans le tableau
    if (array_key_exists($produit, $products)) {
        $product = $products[$produit];
        $price = formatPrice($product["price"]);
        $priceWithoutVAT = priceExcludingVAT($product["price"]);
        $discountedPriceValue = discountedPrice($product["price"], $product["discount"]);

        // Afficher les informations du produit
        echo "<h1>Product Details</h1>";
        echo "<p><b>Product:</b> " . $product["name"] . "</p>";
        echo "<p><b>Price:</b> " . $price . " euros</p>";
        echo "<p><b>Price without VAT:</b> " . $priceWithoutVAT . " euros</p>";
        echo "<p><b>Discounted Price:</b> " . $discountedPriceValue . " euros</p>";
        echo "<p><b>Quantity:</b> " . $quantity . "</p>";
        echo "<p><b>Total Price:</b> " . ($discountedPriceValue * $quantity) . " euros</p>";
        echo "<img src='" . $product["picture_url"] . "' alt='" . $product["name"] . "' width='200'>";
    } else {
        echo "Product not found.";
    }
} else {
    // Rediriger vers le formulaire si la page est accédée directement
    header("Location: index.html");
    exit();
}
?>