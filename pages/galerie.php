
<h2 class="reveal">
    Galerie
</h2>

<ul id="picContain">
    <li>
        <ul id="titles">
            <li>
                <a href="index.php?ind=kelidoine&pg=gal" class="underline <?php echo($color) ?>">
                    Kélidoine
                </a>
            </li>
            <!--<li>
                <a href="" class="underline <?php echo($color) ?>">
                    Lac de Pont
                </a>
            </li>!-->
            <li>
                <a href="index.php?ind=pisserotte&pg=gal" class="underline <?php echo($color) ?>">
                    Pisserotte
                </a>
            </li>
        </ul>
    </li> 
    <?php

        for ($i=1; $i < 25; $i++) { 
            echo'
            <li id="pic'.$i.'" onClick="openPic()">

                <figure class="picGalerie">
                    <img src="../img/'.$_GET['ind'].'/'.$i.'.JPEG" alt="" loading="lazy">
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
            <div class="arrowPic" id="previous">
                <img src="../img/arrow-left.png" alt"Une flèche vers la gauche" loading="lazy">
            </div>
            <figure class="picGalerie" id="picSelected">
                <img src="" alt="" loading="lazy">
                <figcaption>
                </figcaption>
            </figure>
            <div class="arrowPic" id="next">
                <img src="../img/arrow-left.png" alt"Une flèche vers la droite" loading="lazy">
            </div>
            <div id="closer">
            </div>
        </div>';
?>

