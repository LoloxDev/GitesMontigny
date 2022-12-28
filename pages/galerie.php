<h2>
    Galerie
</h2>

<ul id="picContain">
    <ul id="titles">
        <li>
            <a href="index.php?ind=kelidoine&pg=gal">
                Kelidoine
            </a>
        </li>
        <li>
            <a href="">
                Lac de Pont
            </a>
        </li>
        <li>
            <a href="index.php?ind=pisserotte&pg=gal">
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
                <figure class="picGalerie">
                    <img src="../img/'.$gite.'/'.$i.'.jpeg" alt="">
                    <figcaption>
                    </figcaption>
                </figure>
            </li>';
        }

    ?>
</ul>

