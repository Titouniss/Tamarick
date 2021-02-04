
<?php
session_start();
include ('../tamarick/pages/connexion.php'); 
 //echo $_SESSION['id'];
 ?>
<html>
<head>

    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/Styles.css"/>
    <link rel="stylesheet" href="styles/article.css" />
    <meta charset="UTF-8" />
</head>
<body>
    <?php
    include ('../tamarick/pages/index/header.php'); 
    if(isset($_GET['selection'])){
        switch($_GET['selection']){
            case 0 : {
                include ('../tamarick/pages/index');
                break;
            }
            case 2 : {
                include ('../tamarick/connecter.php');
                break;
            }
            case 3 : {
                if(isset($_GET['id'])) 
                include 'pages/profil.php';
                else
                header("Location:profil.php?id=".$_SESSION['id']);
                break;
            }
            case 4:{
                try{
                    unset ($_SESSION['auteur']);
                    unset ($_SESSION['article']);
                }catch(Exception $e){
                    echo '<br><br><h3>La suppression de votre session a échouée</h3>';
                }
                include ('../tamarick/pages/index/main.php');
                break;
                }
                default: {
                    include ('../tamarick/pages/index/main.php');
                    break;
                }
            }

        }else{
            include ('../tamarick/pages/index/main.php');
        }
    ?>
    <footer>
        <div>
            <p id="Createur">&copy;2020 Tamarik - Créé par <a href="Tamarik@gmail.com">BTS SIO</a>
                <p>
        </div>
    </footer>
</body>

</html>