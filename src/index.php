<?php
try {
    $pdo = new PDO('mysql:host=db;dbname=estudos', 'root', 'root');
    echo "PHP " . phpversion() . " conectado ao MySQL!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

