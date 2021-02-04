<?php
    $host="localhost";
    $dbname="tamarick";
    $login="root";
    $mdp="";

    try{
        $pdo=new PDO("mysql:host=$host;dbname=$dbname","$login","$mdp");
        $pdo->exec('SET NAME utf8');
    } catch (PDOException $e) {
        $pdo=new PDO("mysql:host=$host;dbname=$dbname","$login","$mdp");
    }
?>