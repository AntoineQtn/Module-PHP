

<?php

//création d'un tableau associatif clef/valeur
$iPhone = [
    "name" => "iPhone",
    "price" => 45000,
    "weight" => 200,
    "discount" => 10.0,
    "picture_url" => "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/IPhone_16_Pro_Vector.svg/800px-IPhone_16_Pro_Vector.svg.png",
];
$price = formatPrice($iPhone["price"]);
echo "The price product is $price euros <br>"; // Appel de la fonction formatPrice() pour afficher le prix de l'iPhone
echo "The price product excluding the VAT is " . priceExcludingVAT($iPhone["price"]) . " euros <br>"; // Appel de la fonction priceExcludingVAT() pour afficher le prix hors TVA de l'iPhone
echo "The discounted price of the product is " . discountedPrice($iPhone["price"], $iPhone["discount"]) . "euros <br>"; // Appel de la fonction discountedPrice() pour afficher le prix remisé de l'iPhone

//création d'une boucle while pour l'affichage
$keys = array_keys($iPhone); // Récupère les clés du tableau associatif
$i = 0; // Initialisation d'un compteur à 0
while ($i < count($keys)) { // Tant que le compteur est inférieur au nombre de clés
    $key = $keys[$i]; // initialisation d'une variable qui récupère la clé actuelle
    echo "<p><b>$key : " . $iPhone[$key] . "</b></p>"; // Affiche en balise paragraphe la clé et la valeur associée
    $i++; // Incrémente le compteur
}

//création d'une boucle do while pour l'affichage
$i = 0; // Initialisation d'un compteur à 0
$keys = array_keys($iPhone); // Récupère les clés du tableau associatif
do { // Les instructions suivantes sont exécutées
    $key = $keys[$i]; // initialisation d'une variable qui récupère la clé actuelle
    echo "<p><b>$key : " . $iPhone[$key] . "</b></p>"; // Affiche en balise paragraphe la clé et la valeur associée
    $i++; // Incrémente le compteur
} while ($i < count($keys)); // Tant que le compteur est inférieur au nombre de clés

//création d'une boucle for pour l'affichage
for ($i = 0; $i < count($keys); $i++) { // Tant que le compteur est inférieur au nombre de clés
    $key = $keys[$i]; // initialisation d'une variable qui récupère la clé actuelle
    echo "<p><b>$key : " . $iPhone[$key] . "</b></p>"; // Affiche en balise paragraphe la clé et la valeur associée
}

/*
//echo var_dump($iphone) . "<br>";
echo "<div>";
echo "<h3>nom du produit : $iphone[name]</h3>";
echo "<p>Prix : $iphone[price]</p>";
echo "<img src=$iphone[picture_url] alt='Image produit' />";
echo "</div>";*/

/*$iPad = [
    "name" => "iPad",
    "price" => 79900,
    "weight" => 500,
    "discount" => null,
    "picture_url" => "https://media.materiel.net/r250/products/MN0005046452_1.jpg",
];*/
//echo var_dump($iPad) . "<br>";

/*$iMac = [
    "name" => "iMac",
    "price" => 450000,
    "weight" => 5000,
    "discount" => 50,
    "picture_url" => "https://static.fnac-static.com/multimedia/Images/FR/MDM/19/b2/a1/10596889/1540-1/tsp20250110194849/iMac-Apple-27-Ecran-Retina-5K-Intel-Core-i5-8-Go-RAM-1-To-Fusion-Drive-Argent-MRQY2FN-2019.jpg",
];*/
//echo var_dump($iMac) . "<br>";
