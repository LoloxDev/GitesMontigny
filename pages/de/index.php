<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Pisserotte & Kélidoine</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/normalize.css">
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <?php

            /*Liens css*/
        if(empty($_GET['ind'])) {
            $_GET['ind'] = 'acc';
        }

        if ($_GET['ind'] == 'kelidoine') {
            echo '<link rel="stylesheet" href="../../css/kelidoine.css">';
        } elseif ($_GET['ind'] == 'pisserotte'){
            echo '<link rel="stylesheet" href="../../css/pisserotte.css">';
        }

        ?>
        <link rel="stylesheet" media="screen and (max-width: 1300px)" href="../../media-querries/media-1300max.css">
        <link rel="stylesheet" media="screen and (max-width: 1000px)" href="../../media-querries/media-1000max.css">
        <link rel="stylesheet" media="screen and (max-width: 850px)" href="../../media-querries/media-850max.css">
        <link rel="stylesheet" media="screen and (max-width: 650px)" href="../../media-querries/media-650max.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../../media-querries/media-500max.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Montserrat:ital,wght@0,400;0,700;1,400&family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
        <?php
            if ($_GET['ind'] == 'kelidoine') {
                        echo '<link rel="shortcut icon" type="image/png" href="../../img/kelidoine/moon.jpg">';
                    } elseif ($_GET['ind'] == 'pisserotte'){
                        echo '<link rel="shortcut icon" type="image/png" href="../../img/pisserotte/sunset.jpg">';
                    }
        ?>
        

        
    </head>

    <?php
                
        $color = "";
        $ind = "";
        $lang = "fr";

    ?>

    <body>

        <header>
            <nav id="logo">

                <?php

                    /* Logo + couleur */
                    if ($_GET['ind'] == 'kelidoine') {
                        echo '<a href="index.php?ind=kelidoine&pg=acc"><img id="Keli" src="../../img/kelidoine/logo_kelidoine.png" alt="logo kélidoine"></a>';
                        $color = "yellow";
                        $ind = "kelidoine";
                    
                    } elseif ($_GET['ind'] == 'pisserotte'){
                        echo '<a href="index.php?ind=pisserotte&pg=acc"><img id="Piss" src="../../img/pisserotte/logo_pisserotte.png" alt="logo pisserotte"></a>';
                        $color = "blue";
                        $ind = "pisserotte";
                    } elseif (isset($_GET['ind'])){
                        header('Location:index.php');
                    }


                ?>


                <div class="navbarre">
                                        
                    <a href="index.php?ind=<?php echo($ind) ?>&pg=gal" class="<?php echo($color) ?> navoptions X underline">
                        Galerie
                    </a>

                    <a href="index.php?ind=<?php echo($ind) ?>&pg=res" class="<?php echo($color) ?> navoptions Y underline">
                        Residenz
                    </a>
                    <a href="index.php?ind=<?php echo($ind) ?>&pg=dis" class="<?php echo($color) ?> navoptions X underline">
                        Verfügbarkeit & Preise
                    </a>

                </div>

                <div class="navbarre">

                    <a href="index.php?ind=<?php echo($ind) ?>&pg=act" class="<?php echo($color) ?> navoptions X underline">
                        Aktivitäten & Tourismus
                    </a>

                    <a href="http://www.terres-auxois.fr/activites-loisirs-nature/lac-de-pont/" class="<?php echo($color) ?> navoptions Y underline" target="blank">
                        Lac de Pont
                    </a>

                    <?php if ($_GET['ind'] == 'kelidoine') {

                            echo'<a href="index.php?ind=pisserotte&pg=acc" class="navoptions X water" style="color:rgb(0,74,173)">
                                    Pisserotte
                                 </a>';

                        } elseif ($_GET['ind'] == 'pisserotte') {

                            echo'<a href="index.php?ind=kelidoine&pg=acc" class="navoptions X flower" style="color:#ffde59;">
                                    Kélidoine
                                 </a>';
                        }
                                         
                    ?>

                </div>

            </nav>


        </header>



        <label id="burgerContain">
            <input type="checkbox" id="burgerInput">
            <span class="menu"> <span class="hamburger"></span> </span>
            <ul>
                <li> <img src="../../img/<?php echo($_GET['ind']) ?>/logo_<?php echo($_GET['ind']) ?>.png" alt=""> </li> 
                <li> <a href="index.php?ind=<?php echo($ind) ?>&pg=acc" class="underline <?php echo($color) ?>"><span>Willkommen</span></a> </li>
                <li> <a href="index.php?ind=<?php echo($ind) ?>&pg=dis" class="underline <?php echo($color) ?>">Verfügbarkeit und Preise</a> </li>
                <li> <a href="index.php?ind=<?php echo($ind) ?>&pg=res" class="underline <?php echo($color) ?>">Residenz</a> </li>
                <li> <a href="index.php?ind=<?php echo($ind) ?>&pg=gal" class="underline <?php echo($color) ?>">Galerie</a> </li>
                <li> <a href="index.php?ind=<?php echo($ind) ?>&pg=act" class="underline <?php echo($color) ?>">Aktivitäten & Tourismus</a> </li>
                <li> <a href="http://www.terres-auxois.fr/activites-loisirs-nature/lac-de-pont/" class="underline <?php echo($color) ?>">Lac de Pont</a> </li>
                <?php if ($_GET['ind'] == 'kelidoine') {

                echo'<li>
                        <a href="index.php?ind=pisserotte&pg=acc&lang=" class="water" style="color:rgb(0,74,173)">
                            Pisserotte
                        </a>
                    </li>';

                } elseif ($_GET['ind'] == 'pisserotte') {
                
                echo'<li>
                        <a href="index.php?ind=kelidoine&pg=acc" class="flower" style="color:#ffde59;">
                        Kélidoine
                        </a>
                     </li>';
                }

            
            ?>
            </ul>
        </label>

        <?php

            $flags = array('en','de','fr');

            // Récupère le nom de dossier dans l'URL
            if (isset($_SERVER['REQUEST_URI'])) {
                $url = explode('/', $_SERVER['REQUEST_URI']);
                $dossier = $url[count($url) - 2]; // Le nom de dossier est l'avant-dernier élément du tableau
                // Vérifie si le nom de dossier correspond à l'une des langues
                if (in_array($dossier, $flags)) {
                  // Supprime la langue de son ancienne position dans le tableau
                  $key = array_search($dossier, $flags);
                  if ($key !== false) {
                    unset($flags[$key]);
                  }
                  // Ajoute la langue en première position du tableau
                  array_unshift($flags, $dossier);
                }
              }

        ?>

        <div id="langDiv">
            <ul id="lang-select">
                <li class="label">
                    <a href="../<?php echo($flags[0]) ?>/index.php?ind=<?php echo($ind).'&pg='.($_GET['pg']) ?>" class="active">
                        <span class="iconify" data-icon="circle-flags:<?php echo($flags[0]) ?>" data-width="32" data-height="32"></span>
                    </a>
                </li>
                <li class="label">
                    <a href="./../<?php echo($flags[1]) ?>/index.php?ind=<?php echo($ind).'&pg='.($_GET['pg']) ?>" class="active">
                        <span class="iconify" data-icon="circle-flags:<?php echo($flags[1]) ?>" data-width="32" data-height="32"></span>
                    </a>
                </li>
                <li class="label">
                    <a href="./../<?php echo($flags[2]) ?>/index.php?ind=<?php echo($ind).'&pg='.($_GET['pg']) ?>" class="active">
                        <span class="iconify" data-icon="circle-flags:<?php echo($flags[2]) ?>" data-width="32" data-height="32"></span>
                    </a>
                </li>
            </ul>
        </div>
        
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
                            <img src="../../img/deco-corner.png" alt="">
                        </div>

        </section>

        <div id="arrowUpContain">
            <img src="../../img/<?php echo($ind) ?>/arrow-up.png" alt="Une flèche pour remonter">
        </div>

        <footer class="flex">

            <h2 class="footer-heading logo">pisserotte-kelidoine.com</h2>
            <ul class="menu flex del">
                <li>
                    <a href="../index.php" class="underline">
                        Willkommen
                    </a>
                </li>
                <li>
                    <a href="#" class="underline">
                        Impressum
                    </a>
                </li>
                <li>
                    <a href="index.php?ind=<?php echo($ind) ?>&pg=dis" class="underline">
                        Kontakt
                    </a> 
                </li>
            </ul>

            <!--<ul class="reseaux del">
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
            </ul>!-->
            <p class="del">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Alle Rechte vorbehalten | Diese Website wurde mit ❤ gestaltet von <a href="https://lorislabarre.com/Portfolio" target="_blank">Loris Labarre</a>
            </p>

        </footer>
    <script src="../../js/main.js"></script>
    </body>
    
</html>