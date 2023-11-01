<?php
$host = 'mariadb';
$dbname = 'bakery';
$username = 'root';
$password = '4dy5qwtrsag#!sad';

try {
    $pdo = new PDO("mysql:host=$host;port=3306;dbname=$dbname", $username, $password);

    $query = "SELECT * FROM producten";
    $result = $pdo->query($query);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<a href="detail.php?slug=' . $row['slug'] . '">' . $row['titel'] . '</a><br>';
    }
} catch (PDOException $e) {
    echo __FILE__ . ':'.__LINE__.' Fout bij het verbinden met de database: ' . $e->getMessage();
}

