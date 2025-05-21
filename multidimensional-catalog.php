

<?php

//création d'un tableau multidimensionnel à deux dimensions contenant trois tableaux associatifs
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
$price = formatPrice($produc["price"]); // Appel de la fonction formatPrice() pour afficher le prix de l'iPhone
priceExcludingVAT($price); // Appel de la fonction priceExcludingVAT() pour afficher le prix hors TVA de l'iPhone
discountedPrice($price, $iPhone["discount"]); // Appel de la fonction discountedPrice() pour afficher le prix re

// La méthode d'affichage var_dump() avec les balises de préformatage <pre>
/*
echo '<pre>';
var_dump($products);
echo '</pre>';*/

/*
// affichage des informations des produits en utilisant l'association clef/valeur
echo $products["iPhone"]["name"].": price: ".$products["iPhone"]["price"].", weight: ".$products["iPhone"]["weight"].".<br>";
echo $products["iPad"]["name"].": name: ".$products["iPad"]["price"].", price: ".$products["iPad"]["weight"].".<br>";
echo $products["iMac"]["name"].": name: ".$products["iMac"]["price"].", price: ".$products["iMac"]["weight"].".<br>";*/

//création d'une double  boucle foreach pour l'affichage

foreach ($products as $key => $product) { // Parcourt chaque produit dans le tableau $products en initialisant une variable $key (iPhone, iPad et iMac) pour la clé et $product pour la valeur
    echo "<p><b>$key</b></p>"; // Affiche la clé du produit (iPhone, iPad, iMac) en gras
    echo "<ul>"; // Ouvre une liste non ordonnée contennant :
    foreach ($product as $attribute => $value) { // une deuxième boucle qui parcourt chaque attribut du produit en initialisant une variable $attribute pour la clé (name, price, weight, discount, picture_url) et $value pour la valeur
        echo "<li>$attribute: $value</li>"; // Affiche chaque attribut du produit sous forme de liste
    }
    $price =formatPrice($product["price"]);
    priceExcludingVAT($product["price"]);
    discountedPrice($product["price"], $product["discount"]);
    echo "</ul>"; // Ferme la liste de produits non ordonnée
}



?>
