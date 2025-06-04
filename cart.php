<?php
session_start(); // fonction pour démarrrer une session et accéder aux variables $_SESSION
include_once('header.php');
include_once('formulaire.php');
include_once('functions_variables_object.php');


if (!isset($produitChoisi) && isset($_SESSION["produitChoisi"], $_SESSION["quantiteChoisie"])) { // Vérifie si les variables de session existent
    $produitChoisi = $_SESSION["produitChoisi"]; // Récupère la valeur de la variable de session
    $quantiteChoisie = $_SESSION["quantiteChoisie"];
    $transporteurChoisi = $_SESSION["transporteurChoisi"];
}?>
<?php if (isset($produitChoisi) && isset($quantiteChoisie)): // Vérifie si les variables sont définies 
?>
    <?php foreach ($products as $key => $product): ?>
        <?php if ($key == $produitChoisi):
            $cartWeight = $product["weight"] * $quantiteChoisie; ?>

            <h3><?=$key?></h3>
            <p>The unitary price is :<?= formatPrice($product["price"]) ?> euros </p><br>
            <p>The discounted price is : <?= discountedPrice($product["price"], $product["discount"]) ?> euros <br>
            <p>(<?= $product["discount"] ?> % discount )</p><br>
            <p>Quantity chosen : <?= $quantiteChoisie ?></p><br>
            <p>Your cart price is <?= cartPrice($product["price"], $quantiteChoisie) ?> euros </p><br>
            <p>Your cart weight is <?= $cartWeight ?> grams </p><br>

            <?php if (isset($_POST['switch_transporter'])):
                $shipping = shippingCost2($product["weight"], $quantiteChoisie, $product["price"]);
                $total = totalPrice2(cartPrice($product["price"], $quantiteChoisie), $shipping); ?>
                <p><strong>Transporteur 2 sélectionné :</strong></p>
                <p>Shipping cost is : <?= $shipping ?> euros </p><br>
                <p>Total price is : <?= $total ?> euros </p><br>
            <?php else:
                $shipping = shippingCost($product["weight"], $quantiteChoisie, $product["price"]);
                $total = totalPrice(cartPrice($product["price"], $quantiteChoisie), $shipping); ?>
                <p><strong>Transporteur 1 sélectionné :</strong></p>
                <p>Shipping cost is : <?= $shipping ?> euros </p><br>
                <p>Total price is : <?= $total ?> euros </p><br>
            <?php endif; ?>

            <img src="<?= $product["picture_url"] ?>" alt='Image produit'><br>
            <form method="post">
                <input type="submit" name="switch_transporter" value="switch transporter">
            </form>

            <?php
            $_SESSION["produitChoisi"] = $produitChoisi;
            $_SESSION["quantiteChoisie"] = $quantiteChoisie;
            $_SESSION["transporteurChoisi"] = isset($_POST['switch_transporter']) ? 'Transporteur 2' : 'Transporteur 1';
            ?>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>