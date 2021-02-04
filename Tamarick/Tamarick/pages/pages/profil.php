<?php
session_start();
include 'connexion.php';

$req= $pdo->prepare("SELECT * FROM member WHERE id=".$_GET['id']);
$req->execute();
$result=$req->fetchAll();
?>

<link rel="stylesheet" href="styles/profil.css" />
<link rel="stylesheet" href="../styles/Styles.css"/>
<meta charset="UTF-8" />
<body>
    <header>

        <div id="header1">
            <h1 class="titre"><a href="../index.php" style="text-decoration: none;color: rgb(255, 255, 255);"> Tamarick<a></h1>
            <div class="user">
                <a href="#"><i class="far fa-user" style="padding: 10px; text-align: center;"></i></a>
                <a href="#"><i class="far fa-heart" style="padding: 10px; text-align: center;"></i></a>
                <a hreft="#"><i class="fas fa-shopping-basket" style="padding: 10px; text-align: center;"></i></a>
            </div>
        </div>
    </header>
    <div id="conteneur">
        <h1> Votre profil</h1>

        <h1>Votre nom :<?= $result[0]['username']?></h1>
        <h1>Votre ID :<?= $result[0]['id']?></h1>
        <a href="deconnexion.php">Déconnexion</a>
    </div>
</body>