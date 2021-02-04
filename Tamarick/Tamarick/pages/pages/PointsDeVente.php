<html>
<head>
    <link rel="stylesheet" href="styles/point_vente.css" />
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
        <div id="conteneur">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d21331.04138269988!2d-1.18926175!3d48.0643043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1602768421419!5m2!1sfr!2sfr" height="700" width="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="mapinfo">
            <div id="titreconteneur">
                <h3>Info</h3>
                <div class=infotext>
                    <p>Retrouver nos différents point de vente :</p>
                    <h4><i class="fas fa-map-marker-alt"></i> Rennes</h4>
                    <h4><i class="fas fa-map-marker-alt"></i> Laval</h4>
                    <h4><i class="fas fa-map-marker-alt"></i> Quiberon</h4>
                    <h4><i class="fas fa-map-marker-alt"></i> Nantes</h4>
                    <h4><i class="fas fa-map-marker-alt"></i> Vannes</h4>
                    <h4><i class="fas fa-map-marker-alt"></i> Brest</h4>

                </div>
            </div>
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