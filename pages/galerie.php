
<h2>
    Galerie
</h2>

<ul id="picContain">
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
    <?php

        $gite = "";

        if ($_GET['ind'] == 'kelidoine') {
            $gite = "Kelidoine";
        } elseif($_GET['ind'] == 'pisserotte'){
            $gite = "Pisserotte";
        }

        for ($i=1; $i < 26; $i++) { 
            echo'
            <li id="pic'.$i.'" onClick="openPic()">
                <div class="arrowPic">
                    <img src="../img/arrow-left.png" alt"Une flèche vers la gauche">
                </div>
                <figure class="picGalerie">
                    <img src="../img/'.$gite.'/'.$i.'.jpeg" alt="">
                    <figcaption>
                    </figcaption>
                </figure>
                <div class="arrowPic">
                    <img src="../img/arrow-left.png" alt"Une flèche vers la droite">
                </div>
            </li>';
        }

    ?>
</ul>

