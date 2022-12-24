<h2>
    Présentation du gîte
</h2>

<p class="pAcc">
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'Le gite Kelidoine, ce logement paisible offre un séjour détente pour toute la famille. Situé en pleine nature, aux abords d\'un lac et d\'un sentier de randonnée en foret. Facile d’accès, sortie d’autoroute et commerces à moins de 10 minute';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'Le gide de la Pisserotte, gîte en pleine nature, situé à la queue du Lac de Pont (Côte d\'Or). Au départ d\'un sentier de randonnée en forêt et en longeant le lac. Tour du lac ( 13 km ) Facile d’accès, sortie d’autoroute et commerces à moins de 10 minutes';
    } ?>
</p>

<!-- CARROUSSEL -->

<ul id="carroussel">
    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../img/Kelidoine/IMG_6758.jpg" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../img/pisserotte/IMG_0362.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } ?>
            
            <figcaption>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../img/Kelidoine/IMG_6800.jpg" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../img/pisserotte/IMG_0032.JPG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../img/Kelidoine/IMG_6782.jpg" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../img/pisserotte/IMG_7164.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>
</ul>

<!-- NOTES -->


<div id="notesBloc">
    <h2>
        Notes et Avis
    </h2>

    <ul id="notes">

        <li>

            <figure>
                <a href="https://www.gites.fr/gites_gite-de-la-pisserotte_montigny-sur-armancon_50096.htm" alt="Le logo de Gites.fr">
                    <img src="../img/logo_agence/3-etoiles.jpg" alt=""/>
                </a>
            </figure>

        </li>

        <li>

            <figure>
                <a href="https://www.gites.fr/gites_gite-de-la-pisserotte_montigny-sur-armancon_50096.htm" alt="Le logo de Gites.fr">
                    <img src="../img/logo_agence/gites-fr.png" alt=""/>
                </a>
                <figcaption>
                    <img src="../img/Pisserotte/avis/notes_gites_pisserotte.png" alt=""/>
                </figcaption>
            </figure>

        </li>

        <li>

            <figure>
                <a href="https://www.airbnb.fr/rooms/21588355?source_impression_id=p3_1657617711_M%2FVxCrrccF6ugbq%2B" alt="Le logo AirBnb">
                    <img src="../img/logo_agence/airbnb.svg" alt=""/>
                </a>
                <figcaption>
                    <img src="../img/Pisserotte/avis/notes_air_pisserotte.png" alt=""/>
                </figcaption>
            </figure>

        </li>

        <li>

            <figure>
                <a href="https://www.booking.com/hotel/fr/1-rue-du-champois.fr.html" alt="Le logo de Booking">
                    <img src="../img/logo_agence/booking.svg" alt=""/>
                </a>
                <figcaption>
                    <img src="../img/Pisserotte/avis/notes_booking_pisserotte.png" alt=""/>
                </figcaption>
            </figure>

        </li>

        <li>

            <figure>
                <a href="https://www.abritel.fr/location-vacances/p1630920" alt="Le logo d'Abritel'">
                    <img src="../img/logo_agence/abritel.svg" alt=""/>
                </a>
                <figcaption>
                    <img src="../img/Pisserotte/avis/notes_abritel_pisserotte.png" alt=""/>
                </figcaption>
            </figure>

        </li>
    </ul>
</div>





