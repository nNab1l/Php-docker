<?php
$host = '127.0.0.1';
$dbname = 'bakery';
$username = 'root';
$password = '4dy5qwtrsag#!sad';

try {
    $pdo = new PDO("mysql:host=$host;port=3309;dbname=$dbname", $username, $password);

    $productSlug = $_GET['slug'];

    $query = "SELECT * FROM producten WHERE slug = :slug";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':slug', $productSlug, PDO::PARAM_STR);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    echo '<h1>' . $product['titel'] . '</h1>';
    echo '<p>' . $product['intro_tekst'] . '</p>';
    echo '<p>' . $product['omschrijving_tekst'] . '</p';
} catch (PDOException $e) {
    echo 'Fout bij het verbinden met de database: ' . $e->getMessage();
}
?>
