<?php
function getPDO(): PDO
{
    try {
        return new PDO('mysql:host=localhost;dbname=ma_boutique;charset=utf8', 'Antoine', 'Toni17031996!');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function getProducts(PDO $pdo): array
{
    $sqlQuery = "SELECT * FROM products";
    $statement = $pdo->prepare($sqlQuery);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
/*
function getOrdersOfTheDay(PDO $pdo): array
{
    $sqlQuery = 'SELECT * FROM orders
    WHERE DATE(date) = CURDATE()
    ORDER BY number DESC;';
    $statement = $pdo->prepare($sqlQuery); // On prépare la requête SQL
    $statement->execute(); // On exécute la requête préparée
    $orders = $statement->fetchAll(PDO::FETCH_ASSOC); // On récupère les résultats de la requête sous forme de tableau associatif
    echo "<pre>";
    var_dump($orders);
    echo "</pre>";
    return $orders; // On retourne les résultats
}
getOrdersOfTheDay($pdo); // On appelle la fonction getOrdersOfTheDay() pour récupérer les commandes du jour


function getTotalPriceOfOrdersToday(PDO $pdo): array
{
    $sqlQuery = 'SELECT
    SUM(products.price * order_product.quantity) AS total_price 
    FROM orders 
    JOIN order_product ON orders.id = order_product.order_id 
    JOIN products ON order_product.product_id = products.id 
    WHERE DATE(date) = CURDATE();';

    $statement = $pdo->prepare($sqlQuery); // On prépare la requête SQL
    $statement->execute(); // On exécute la requête préparée
    $totalPrice = $statement->fetchAll(PDO::FETCH_ASSOC); // On récupère le résultat de la requête
    echo "<pre>";
    var_dump($totalPrice);
    echo "</pre>";
    return $totalPrice; // On retourne le résultat
}
// On appelle la fonction getTotalPriceOfOrdersToday() pour récupérer le prix total des commandes du jour
getTotalPriceOfOrdersToday($pdo); // On appelle la fonction pour récupérer le prix total des commandes du jour

function addOrderProduct(PDO $pdo, int $orderId, int $productId, int $quantity): void
{
    $sqlQuery = 'INSERT INTO order_product (order_id, product_id, quantity) VALUES (:order_id, :product_id, :quantity)';
    $statement = $pdo->prepare($sqlQuery); // On prépare la requête SQL
    $statement->bindParam(':order_id', $orderId); // On lie le paramètre order_id à la variable $orderId
    $statement->bindParam(':product_id', $productId); // On lie le paramètre product_id à la variable $productId
    $statement->bindParam(':quantity', $quantity); // On lie le paramètre quantity à la variable $quantity
    $statement->execute(); // On exécute la requête préparée
}
addOrderProduct($pdo, 1, 1, 2); // On appelle la fonction addOrderProduct() pour ajouter un produit à une commande

function getNoAvailableProducts(PDO $pdo): void
{
    $available = 'SELECT * from products WHERE quantity = 0;';
    $statement = $pdo->prepare($available);
    $statement->execute();
    $noAvailableProducts = $statement->fetchAll(PDO::FETCH_ASSOC); // On récupère les produits non disponibles
    echo "<pre>";
    var_dump($noAvailableProducts);
    echo "</pre>";
}
getNoAvailableProducts($pdo); // On appelle la fonction getNoAvailableProducts() pour récupérer les produits non disponibles
*/

?>