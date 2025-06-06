<h3>Your Cart</h3>
<form action="cart.php" method="post">
    <label for="product">Choose your product:</label>
    <select id="product" name="product">
        <option value="">-- Sélection --</option>
        <option value="1">iPhone</option>
        <option value="3">iPad</option>
        <option value="4">iMac</option>
        <option value="6">airPods</option>
        <option value="8">appleTV</option>
        <option value="10">appleGlass</option>
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1">

    <input type="submit" value="Commander">
</form>

<?php

$produitChoisi = $_POST["product"] ?? ''; // on créer une variable $produitChoisi qui récupère la valeur du produit choisi dans le formulaire, ou une chaîne vide si le formulaire n'a pas été soumis
$quantiteChoisie = $_POST["quantity"] ?? '';
$transporteurChoisi = $_POST["switch_transporter"] ?? '';

if (isset($_POST["product"]) && isset($_POST["quantity"])) {
    $produitChoisi = $_POST["product"];
    $quantiteChoisie = $_POST["quantity"];
} else {
    $produitChoisi = null;
    $quantiteChoisie = null;
    echo "Le formulaire n'a pas encore été soumis.";
}

?>