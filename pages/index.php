<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Les gites de montingy</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="../css/normalize.css" />
        <?php

            /*Liens css*/
        if(empty($_GET['ind'])) {
            $_GET['ind'] = 'acc';
        }

        if ($_GET['ind'] == 'kelidoine') {
            echo '<link rel="stylesheet" href="../css/kelidoine.css">';
        } elseif ($_GET['ind'] == 'pisserotte'){
            echo '<link rel="stylesheet" href="../css/pisserotte.css">';
        }

        if ($_GET['pg'] == 'dis'){
        } elseif ($_GET['pg'] == 'res') {
            echo'<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>';
        }

        

        ?>
        <link rel="stylesheet" media="screen and (max-width: 1000px)" href="../media-querries/media-1000max.css"/>
        <link rel="stylesheet" media="screen and (max-width: 650px)" href="../media-querries/media-650max.css"/>
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../media-querries/media-500max.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Montserrat:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

        
    </head>

    <body>
        <header>
            <nav id="logo">

                <?php
                
                $color = "";
                $ind = "";
                
                /* Logo + couleur */
                    if ($_GET['ind'] == 'kelidoine') {
                        echo '<a href="index.php?ind=kelidoine&pg=acc"><img id="Keli" src="../img/Kelidoine/logo_kelidoine.png" alt="logo kélidoine"></a>';
                        $color = "yellow";
                        $ind = "kelidoine";

                    } elseif ($_GET['ind'] == 'pisserotte'){
                        echo '<a href="index.php?ind=pisserotte&pg=acc"><img id="Piss" src="../img/Pisserotte/logo_pisserotte.png" alt="logo pisserotte"></a>';
                        $color = "blue";
                        $ind = "pisserotte";
                    } elseif (isset($_GET['ind'])){
                        header('Location:../index.php');
                    }

                ?>
                


                <div class="navbarre">
                                        
                    <a href="index.php?ind=<?php echo($ind) ?>&pg=gal" class="<?php echo($color) ?> navoptions X underline">
                        Galerie
                    </a>
                    <a href="index.php?ind=<?php echo($ind) ?>&pg=res" class="<?php echo($color) ?> navoptions Y underline">
                        Résidence
                    </a>
                    <a href="index.php?ind=<?php echo($ind) ?>&pg=dis" class="<?php echo($color) ?> navoptions X underline">
                        Disponibilités & Tarifs
                    </a>

                </div>

                <div class="navbarre">

                    <a href="index.php?ind=<?php echo($ind) ?>&pg=act" class="<?php echo($color) ?> navoptions X underline">
                        Activités & Tourisme
                    </a>

                    <a href="http://www.terres-auxois.fr/activites-loisirs-nature/lac-de-pont/" class="<?php echo($color) ?> navoptions Y underline">
                        Lac de Pont
                    </a>

                    <?php if ($_GET['ind'] == 'kelidoine') {

                            echo'<a href="index.php?ind=pisserotte&pg=acc" class=" '.($color).' navoptions X underline">
                                    Pisserotte
                                 </a>';

                        } elseif ($_GET['ind'] == 'pisserotte') {

                            echo'<a href="index.php?ind=kelidoine&pg=acc" class=" '.($color).' navoptions X underline">
                                    Kelidoine
                                 </a>';
                        }
                                         
                    ?>

                </div>

            </nav>
        </header>
        
        <section class="padding">
                        <?php
                            if($_GET['pg'] == 'acc') {
                                include 'accueil.php';
                            } elseif($_GET['pg'] == 'dis'){
                                include 'dispo.php';
                            } elseif($_GET['pg'] == 'res'){
                                include 'residence.php';
                            } elseif($_GET['pg'] == 'gal'){
                                include 'galerie.php';
                            } elseif($_GET['pg'] == 'act'){
                                include 'actloc.php';
                            } elseif(isset($_GET['pg'])){
                                $_GET['pg'] == 'acc';
                            }
                        ?>

                        <div class="picDeco">
                            <img src="../img/deco-corner.png" alt="">
                        </div>

        </section>

        <footer class="flex">

            <h2 class="footer-heading"><a href="#" class="logo">GitesMontigny.com</a></h2>
            <ul class="menu flex del">
                <li href="#">Accueil</li>
                <li href="#">Mentions légales</li>
                <li href="#">À propos</li>
                <li href="#">Quelque chose</li>
                <li href="#">Quelque chose</li>
                <li href="#">Contact</li>
            </ul>

            <ul class="reseaux del">
                <li>
                    <a href="#" title="Facebook">
                        <img src="../img/facebook.png" alt="Logo Facebook"/>
                    </a>
                </li>
                <li>
                    <a href="#" title="Instagram">
                        <img src="../img/instagram.png" alt="Logo Instagram"/>
                    </a>
                </li>
                <li>
                    <a href="#" title="Twitter">
                        <img src="../img/twitter.png" alt="Logo Twitter"/>
                    </a>
                </li>
            </ul>
            <p class="del">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits reservés | Ce site web a été conçu avec ❤ par <a href="https://lorislabarre.com" target="_blank">Loris Labarre</a>
            </p>

        </footer>

    </body>
    <script src="../js/main.js" type="text/javascript"></script>
</html>