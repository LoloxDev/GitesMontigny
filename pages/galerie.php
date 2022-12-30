
<h2>
    Galerie
</h2>

<ul id="picContain">
    <li>
        <ul id="titles">
            <li>
                <a href="index.php?ind=kelidoine&pg=gal" class="underline <?php echo($color) ?>">
                    Kelidoine
                </a>
            </li>
            <li>
                <a href="" class="underline <?php echo($color) ?>">
                    Lac de Pont
                </a>
            </li>
            <li>
                <a href="index.php?ind=pisserotte&pg=gal" class="underline <?php echo($color) ?>">
                    Pisserotte
                </a>
            </li>
        </ul>
    </li> 
    <?php

        $gite = "";

        if ($_GET['ind'] == 'kelidoine') {
            $gite = "kelidoine";
        } elseif($_GET['ind'] == 'pisserotte'){
            $gite = "pisserotte";
        }

        for ($i=1; $i < 26; $i++) { 
            echo'
            <li id="pic'.$i.'" onClick="openPic()">

                <figure class="picGalerie">
                    <img src="../img/'.$gite.'/'.$i.'.jpeg" alt="" loading="lazy">
                    <figcaption>
                    </figcaption>
                </figure>

            </li>';
        }
    ?>
</ul>

<?php
    echo'
        <div id="diapoBox">
            <div class="arrowPic" id="previous" onClick="swapPic()">
                <img src="../img/arrow-left.png" alt"Une flèche vers la gauche" loading="lazy">
            </div>
            <figure class="picGalerie">
                <img src="" alt="" loading="lazy">
                <figcaption>
                </figcaption>
            </figure>
            <div class="arrowPic" id="next" onClick="swapPic()">
                <img src="../img/arrow-left.png" alt"Une flèche vers la droite" loading="lazy">
            </div>
            <div id="closer" onClick="closePic()">
            </div>
        </div>';
?>

