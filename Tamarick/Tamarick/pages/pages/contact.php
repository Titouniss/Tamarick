<html>
    <head>
        <link rel="stylesheet" href="styles/contact.css" />
        <?php include ('components/head.php'); ?>
        <meta charset="UTF-8">
    </head>
        <header>

            <div id="header1">
                <h1 class="titre"><a href="index.php" style="text-decoration: none;color: rgb(255, 255, 255);"> Tamarick
                        <a></h1>
                <div class="wrapper">
                    <div class="recherche">
                        <input placeholder="rechercher un produit, un ustensile..." type="text" class="search">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="pdv"><a href="PointsDeVente.php"><i class="fas fa-map-marker-alt"></i></a> </div>
                </div>
    
                <div class="user">
                    <a href="#"><i class="far fa-user" style="padding: 10px; text-align: center;"></i></a>
                    <a href="#"><i class="far fa-heart" style="padding: 10px; text-align: center;"></i></a>
                    <a hreft="#"><i class="fas fa-shopping-basket" style="padding: 10px; text-align: center;"></i></a>
                </div>
            </div>
            <div class="menu">
                <a href="produits.php">Produits</a>
                <a href="equipement.php">Equipements</a>
                <a href="ustensiles.php">Ustensiles</a>
                <a href="promos.php">Promos</a>
                <a href="contact.php">Contacts</a>
            </div>
        </header>
    <body>
        <div id="formulaire">
            <div>
          <label for="name">Nom :</label>
          <input type="text" id="name" name="user_name" />
        </div>
        <div>
          <label for="mail">E-mail :</label>
          <input type="email" id="mail" name="user_email" />
        </div>
        <div>
          <label for="msg">Message:</label>
          <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
    </div>
    </body>
    <footer>
        <div id="footerinfo">
            <div id="reseau">
                <h2>Nos réseaux :</h2>
                <a href="https://twitter.com/?lang=fr"><img src="images/twitter.png" alt="Twitter" width="50" ,
                        height="50" , /></a>
                <a href="https://fr-fr.facebook.com/"><img src="images/Facebook.png" alt="Facebook" width="50" ,
                        height="50" , /></a>
                <a href="https://www.instagram.com/?hl=fr"><img src="images/Instagram.png" alt="Instagram" width="50" ,
                        height="50" , /></a>
            </div>
            <div id="logo">
                <h2>Tamarik</h2>
            </div>

            <div id="contact">
                <h2>Nous contacter</h2>
                <a href="contact.php" style="font-size: 3em;"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
        <div>
            <p id="Createur">&copy;2020 Tamarik - Créé par <a href="Tamarik@gmail.com">BTS SIO</a>
                <p>
        </div>
    </footer>
</html>