<html>
    <head>
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

            <div id="conteneurProduit">
                <!--Menu de gauche-->
                <div class="menu2">
                    <a href="boucherie">vaisselle</a>
                    <a href="traiteur">appareils éléctriques</a>
                    <a href="poissonier">mobilier et agencement</a>
                    <a href="surgele">vetements professionnels</a>
                    <a href="cremerie">high tech et informatique</a>
                    <a href="fruits">fournitures de bureau</a>
                    <a href="legumes">jetable, emballage alimentaire</a>
                    <a href="épicerie sucree">amenagement et decoration</a>
                    <a href="épicerie salee">hygiene et entretien</a>
                    <a href="spiritueux">mobilité</a>
                </div>
                <!--Menu de gauche-->
        
                <!--articles-->
                <div id="aliments">
        
                    <!-- ____________________ligne 1__________________________-->
                    <div id="Ligne1">
                        <div id="aliment1">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <button class="bouton" onclick="document.querySelector('#Infos').classList.add('active');">
                                + d'infos
                            </button>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment2">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment3">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment4">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                    <!--_________________________fin ligne 1 ______________________-->
        
                    <!--________________________début ligne 2______________________-->
                    <div id="Ligne2">
                        <div id="aliment5">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment6">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment7">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment8">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                    <!--_________________________Fin Ligne2___________________________-->
        
                    <!--_________________________Début Ligne3___________________________-->
                    <div id="Ligne3">
                        <div id="aliment9">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment10">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <button class="bouton">+ d'infos</button>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment11">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom"> Assiette plate vintage </p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment12">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                    <!--_____________________Fin Ligne 3_____________________________-->
        
                    <!--_________________________Début Ligne4___________________________-->
                    <div id="Ligne4">
                        <div id="aliment13">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment14">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment15">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
        
                        <div id="aliment16">
                            <img src="images/vaisselle/assiette_plate _vintage_31cm.jpg" alt="Assiette plate vintage 31cm" />
                            <p class="nom">Assiette plate vintage</p>
                            <div id="achat">
                                <p class="prix">21€</p>
                                <button class="bouton">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                    <!--_____________________Fin Ligne 4_____________________________-->
        
                </div>
            </div>
        
            <footer>
                <div id="footerinfo">
                    <div id="reseau">
                        <h2>Nos réseaux :</h2>
                        <a href="https://twitter.com/?lang=fr"><img src="images/twitter.png" alt="Twitter" width="50" ,
                                height="50" , /></a>
                        <a href="https://fr-fr.facebook.com/"><img src="images/Facebook.png" alt="Facebook" width="50" ,
                                height="50" , /></a>
                        <a href="https://www.instagram.com/?hl=fr"><img src="images/Instagram.png" alt="Instagram" width="50"
                                , height="50" , /></a>
        
        
                    </div>
                    <div id="logo">
                    </div>
        
                    <div id="contact">
        
                    </div>
                </div>
                <div>
                    <p id="Createur">&copy;2020 Tamarik - Créé par <a href="Tamarik@gmail.com">BTS SIO</a>
                        <p>
                </div>
            </footer>
            <!--Modal + d'infos-->
            <div class="modal" id="Infos">
                <div class="container">
                    <form>
                        <title>produit</title>
                    </form>
                </div>
            </div>
        
        </body>
        
        </html>