<?php
include 'connexion.php';
    $req = $pdo->prepare("SELECT*FROM member;");
    $req->execute();
    $result=$req->fetchAll();
    ?>

<html>
<head>
    <link rel="stylesheet" href="../styles/Styles.css"/>
    <link rel="stylesheet" href="../styles/connexion.css" />
    <meta charset="UTF-8" />
</head>

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
    <div id="container">
        <form method="GET">
<?php
    if(isset($_GET['inscrire']))
    {
    $username = htmlspecialchars($_GET['username']);
    $adress = htmlspecialchars($_GET['adress']);
    $password = htmlspecialchars($_GET['password']);
        if ($username&&$adress&&$password){
    $req = $pdo->prepare("INSERT INTO member (username, address, password)VALUES ('$username','$adress','$password')");
    $req->execute();
    }else echo "Veuillez saisir tous les champs !";
}
?>
            <h1>Inscription</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input name="username" type="text" required>

            <label><b>Mot de passe</b></label>
            <input name="password" type="text" required>
            
            <label><b>Email</b></label>
            <input name="adress" type="text" required>

            <input type="submit" value="S'inscrire" name="inscrire" />
        </form>
            
</div>
</body>
</html>

