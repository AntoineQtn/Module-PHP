<?php
//créarion d'un tableau multidimensionnel à deux dimensions contenant trois tableaux associatifs
$products = [
    "iPhone" => [
        "name" => "iPhone",
        "price" => 45000,
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
        "price" => 450000,
        "weight" => 5000,
        "discount" => 50,
        "picture_url" => "https://static.fnac-static.com/multimedia/Images/FR/MDM/19/b2/a1/10596889/1540-1/tsp20250110194849/iMac-Apple-27-Ecran-Retina-5K-Intel-Core-i5-8-Go-RAM-1-To-Fusion-Drive-Argent-MRQY2FN-2019.jpg",
    ],
];
// La méthode d'affichage var_dump() avec les balises de préformatage <pre>
echo '<pre>';
var_dump($products);
echo '</pre>';

// affichage des informations des produits en utilisant l'association clef/valeur
echo $products["iPhone"]["name"].": price: ".$products["iPhone"]["price"].", weight: ".$products["iPhone"]["weight"].".<br>";
echo $products["iPad"]["name"].": name: ".$products["iPad"]["price"].", price: ".$products["iPad"]["weight"].".<br>";
echo $products["iMac"]["name"].": name: ".$products["iMac"]["price"].", price: ".$products["iMac"]["weight"].".<br>";


foreach ($products as $key => $product) {
    echo "<p><b>$key</b></p>";
    echo "<ul>";
    foreach ($product as $attribute => $value) {
        echo "<li>$attribute: $value</li>";
    }
    echo "</ul>";
}
?>
