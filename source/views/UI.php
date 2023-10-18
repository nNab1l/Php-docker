<?php
$host = '127.0.0.1';
$dbname = 'bakery';
$username = 'root';
$password = '4dy5qwtrsag#!sad';

try {
    $pdo = new PDO("mysql:host=$host;port=3309;dbname=$dbname", $username, $password);

    $query = "SELECT * FROM producten";
    $result = $pdo->query($query);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<a href="detail.php?slug=' . $row['slug'] . '">' . $row['titel'] . '</a><br>';
    }
} catch (PDOException $e) {
    echo 'Fout bij het verbinden met de database: ' . $e->getMessage();
}
?>
