<?php
            echo'
                <div id="containTitle">
                    <h2>
                        Présentation du gîte
                    </h2>
                    <div class="picDecoTitle">
                        <img src="../img/'.($_GET['ind']).'/deco.png" alt="">
                    </div>
                </div>
            '

?>

<p class="pAcc">
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'<span class="firstLetter">L</span>e gite Kelidoine, ce logement paisible offre un séjour détente pour toute la famille. Situé en pleine nature, aux abords d\'un lac et d\'un sentier de randonnée en foret. Facile d’accès, sortie d’autoroute et commerces à moins de 10 minute';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'<span class="firstLetter">L</span>e gide de la Pisserotte, gîte en pleine nature, situé à la queue du Lac de Pont (Côte d\'Or). Au départ d\'un sentier de randonnée en forêt et en longeant le lac. Tour du lac ( 13 km ) Facile d’accès, sortie d’autoroute et commerces à moins de 10 minutes';
    } ?>
</p>

<!-- CARROUSSEL -->

<ul id="carroussel">
    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../img/Kelidoine/5.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../img/pisserotte/11.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } ?>
            
            <figcaption>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../img/Kelidoine/7.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../img/pisserotte/2.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../img/Kelidoine/19.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../img/pisserotte/19.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>
</ul>

<p class="pAcc">
    <iconify-icon icon="clarity:help-info-solid"></iconify-icon>
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'Pourquoi "Kelidoine" ? </br></br>
        Une Chelidoine est une petite fleure jaune qui pousse abondament dans les environs du gîte, c\'est une fleur qui sent très bon .....';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'Pourquoi "Pisserotte" ? </br></br>
        Le Ruisseau de la Pisserotte est un ruisseau qui rejoins le lac de pont depuis la promenade en randonnée qui se trouve juste derrière le gite. Vous pourrez allez la visiter au bout de 10 minutes de balade.';
    } ?>
</p>

<!-- NOTES -->


<div id="notesBloc">
    
        <h2>
            Notes et Avis
        </h2>

    <ul id="notes">

        <li>

            <figure id="tourisme">
                    <img src="../img/logo_agence/3-etoiles.jpg" alt=""/>
            </figure>

        </li>

        <li>

            <figure id="gites-fr">
                <a href="https://www.gites.fr/gites_gite-de-la-pisserotte_montigny-sur-armancon_50096.htm" alt="Le logo de Gites.fr">
                    <img src="../img/logo_agence/gites-fr.png" alt=""/>
                </a>
                <figcaption>
                    <?php if($_GET['ind'] == 'pisserotte') {
                        echo'
                        <img src="../img/Pisserotte/avis/notes_gites_pisserotte.png" alt="9.7 / 10"/>';
                    } elseif($_GET['ind'] == 'kelidoine') {
                        echo'
                        <img src="../img/Kelidoine/avis/gites-fr.png" alt="8.9 / 10"/>';
                    } ?>
                </figcaption>
            </figure>

        </li>

        <li>

            <figure id="airbnb">
                <a href="https://www.airbnb.fr/rooms/21588355?source_impression_id=p3_1657617711_M%2FVxCrrccF6ugbq%2B" alt="Le logo AirBnb">
                    <img src="../img/logo_agence/airbnb.svg" alt=""/>
                </a>
                <figcaption>
                    <?php if($_GET['ind'] == 'pisserotte') {
                        echo'
                        <img src="../img/Pisserotte/avis/notes_air_pisserotte.png" alt="4.92 / 5"/>';
                    } elseif($_GET['ind'] == 'kelidoine') {
                        echo'
                        <img src="../img/Kelidoine/avis/airbnb.png" alt="4.50 / 5"/>';
                    } ?>
                    
                </figcaption>
            </figure>

        </li>



        <?php if($_GET['ind'] == 'pisserotte') {
        echo'
        
            <li>

                <figure id="booking">
                    <a href="https://www.booking.com/hotel/fr/1-rue-du-champois.fr.html" alt="Le logo de Booking">
                        <img src="../img/logo_agence/booking.svg" alt=""/>
                    </a>
                    <figcaption>
                        <img src="../img/Pisserotte/avis/notes_booking_pisserotte.png" alt=""/>
                    </figcaption>
                </figure>

            </li>

            <li>

                <figure id="abritel">
                    <a href="https://www.abritel.fr/location-vacances/p1630920" alt="Le logo d\'Abritel\'">
                        <img src="../img/logo_agence/abritel.svg" alt=""/>
                    </a>
                    <figcaption>
                        <img src="../img/Pisserotte/avis/notes_abritel_pisserotte.png" alt=""/>
                    </figcaption>
                </figure>

            </li>';
        } ?>
    </ul>
</div>





