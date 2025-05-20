<?php
$products = ["iPhone", "iPad", "iMac"]; // Crée un tableau de produits
echo var_dump($products) . "<br>"; // var_dump affiche le type et la valeur de la variable
sort($products) . "<br>"; // Trie par ordre ascendant, ici des string donc par ordre alphabétique
echo var_dump($products) . "<br>"; 
echo $products[0] . "<br>"; // Affiche l'index 0 du tableau
echo $products[2] . "<br>"; // Affiche l'index 2 du tableau
?>