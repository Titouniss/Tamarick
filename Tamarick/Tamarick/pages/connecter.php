
<?php
session_start();
include 'connexion.php';
if(isset($_SESSION['id'])){
    header("Location:profil.php?id=".$_SESSION['id']);
}else{
if(isset($_GET['submit'])) {
$username = htmlspecialchars($_GET['username']);
$password = htmlspecialchars($_GET['password']);
if(!empty($username) AND !empty($password)){
    $requser = $pdo->prepare("SELECT * FROM member WHERE username= ? AND password = ?");
$requser->execute(array($username, $password));
    $userexist = $requser->rowCount();
    if($userexist ==1){
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['pseudo'] = $userinfo['username'];
        header("Location:profil.php?id=".$_SESSION['id']);
    }else{
        $erreur=" Mauvais username ou mot de passe !";
    }
}else{
    $erreur="Tout les champs doivent être complétés !";
}
}
}
?>

    <link rel="stylesheet" href="../styles/Styles.css"/>
    <link rel="stylesheet" href="../styles/connexion.css" />
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
    <div id="container">
    <form methode="GET">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <input type="submit" name='submit' value='LOGIN'>
        <a href="inscription.php" target="_blank" ><input type="button" value="INSCRIPTION"></a>

    </form>
</div>
</body>
</html>