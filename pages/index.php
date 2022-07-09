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

        

        ?>
        <link rel="stylesheet" media="screen and (max-width: 1000px)" href="../media-querries/media-1000max.css"/>
        <link rel="stylesheet" media="screen and (max-width: 650px)" href="../media-querries/media-650max.css"/>
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../media-querries/media-500max.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald&family=Playball&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Comic+Neue:wght@300&family=Montserrat&family=Oswald&family=Playball&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Comic+Neue:wght@300&family=Montserrat&family=Montserrat+Alternates&family=Oswald&family=Playball&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav id="logo">

            <?php
            
            $color = "";
            
            /* Logo + couleur */
                if ($_GET['ind'] == 'kelidoine') {
                    echo '<img src="../img/Kelidoine/logo_kelidoine.png" alt="logo kélidoine">';
                    $color = "yellow";

                } elseif ($_GET['ind'] == 'pisserotte'){
                    echo '<img src="../img/Pisserotte/logo_pisserotte.png" alt="logo pisserotte">';
                    $color = "blue";
                }

            ?>
                


                <div class="navbarre">
                                        
                    <a href="#" class="<?php echo($color) ?> navoptions Y">
                        Tarifs
                    </a>
                    <a href="#" class="<?php echo($color) ?> navoptions X">
                        Résidence
                    </a>
                    <a href="#" class="<?php echo($color) ?> navoptions Y">
                        Disponibilités
                    </a>

                </div>

                <div class="navbarre">

                    <a href="#" class="<?php echo($color) ?> navoptions X">
                        Activités
                    </a>

                    <a href="#" class="<?php echo($color) ?> navoptions Y">
                        Lac de Pont
                    </a>

                    <?php if ($_GET['ind'] == 'kelidoine') {

                            echo'<a href="index.php?ind=pisserotte" class=" '.($color).' navoptions X">
                                    Pisserotte
                                 </a>';

                        } elseif ($_GET['ind'] == 'pisserotte') {

                            echo'<a href="index.php?ind=kelidoine" class=" '.($color).' navoptions X">
                                    Kelidoine
                                 </a>';
                        }
                                         
                    ?>

                </div>

            </nav>
        </header>
        
            <section>

            </section>

            <footer class="flex">

                <h2 class="footer-heading"><a href="#" class="logo <?php echo($color) ?>">GitesMontigny.com</a></h2>
                <ul class="menu flex">
                    <li href="#">Accueil</li>
                    <li href="#">Mentions légales</li>
                    <li href="#">À propos</li>
                    <li href="#">Quelque chose</li>
                    <li href="#">Quelque chose</li>
                    <li href="#">Contact</li>
                </ul>

                <ul class="reseaux">

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

                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits reservés | Ce site web a été conçu avec ❤ par <a href="https://lorislabarre.com" target="_blank">Loris Labarre</a>
                </p>

    </footer>

    </body>
    <script src="../js/main.js" type="text/javascript"></script>
</html>