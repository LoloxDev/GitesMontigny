<?php
            echo'
                <div id="containTitle">
                    <h2>
                        Présentation du gîte
                    </h2>
                    <div class="picDecoTitle reveal">
                        <img src="../img/'.($_GET['ind']).'/deco.png" alt="">
                    </div>
                </div>
            '

?>

<p class="pAcc">
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'<span class="firstLetter">L</span>e gîte de la Kélidoine, offre un séjour détente pour toute la famille ou pour se retrouver entre amis. Situé en pleine nature, vous pourrez vous ressourcer tout en profitant des aménagements du lac de Pont et de ses animations. <br> La région est très touristique et propose de nombreux sites à découvrir.
        Facile d’accès, sortie d’autoroute et commerces à moins de 10 minutes.';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'<span class="firstLetter">L</span>e gîte de la Pisserotte, situé en pleine nature dans un environnement calme et paisible vous permettra  de vous ressourcer tout en profitant des aménagements du lac de Pont et de ses animations. <br> La région est très touristique et propose de nombreux sites à découvrir.
        Facile d’accès, sortie d’autoroute et commerces à moins de 10 minutes.';
    } ?>
</p>

<!-- CARROUSSEL -->

<ul id="carroussel">
    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../img/kelidoine/5.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
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
                echo'<img src="../img/kelidoine/7.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
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
                echo'<img src="../img/kelidoine/19.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../img/pisserotte/19.JPEG" alt="Une photo du paysage de Montigny" class="carrous"/>';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>
</ul>

<p class="pAcc reveal">
    <iconify-icon icon="clarity:help-info-solid"></iconify-icon>
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'Pourquoi "Kélidoine" ? </br></br>
        La Chélidoine, est une plante sauvage et médicinale. On la reconnait à son feuillage vert tendre, sa sève et ses fleurs jaune vif. Elle pousse abondamment aux abords du gîte.';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'Pourquoi "Pisserotte" ? </br></br>
        La Pisserotte est un ruisseau tout proche qui se déverse dans le lac. Vous la rencontrerez en empruntant le chemin de randonnée.';
    } ?>
</p>

<!-- NOTES -->


<div id="notesBloc">
    
        <h2 class="reveal">
            Notes et Avis
        </h2>

    <ul id="notes">

        <li class="reveal">

            <figure id="tourisme">
                    <img src="../img/logo_agence/3-etoiles.jpg" alt=""/>
            </figure>

        </li>

        <li class="reveal">

            <figure id="gites-fr">
                <a href="https://www.gites.fr/gites_gite-de-la-pisserotte_montigny-sur-armancon_50096.htm" alt="Le logo de Gites.fr">
                    <img src="../img/logo_agence/gites-fr.png" alt=""/>
                </a>
                <figcaption>
                    <?php if($_GET['ind'] == 'pisserotte') {
                        echo'
                        <img src="../img/pisserotte/avis/notes_gites_pisserotte.png" alt="9.7 / 10"/>';
                    } elseif($_GET['ind'] == 'kelidoine') {
                        echo'
                        <img src="../img/kelidoine/avis/gites-fr.png" alt="8.9 / 10"/>';
                    } ?>
                </figcaption>
            </figure>

        </li>

        <li class="reveal">

            <figure id="airbnb">
                <a href="https://www.airbnb.fr/rooms/21588355?source_impression_id=p3_1657617711_M%2FVxCrrccF6ugbq%2B" alt="Le logo AirBnb">
                    <img src="../img/logo_agence/airbnb.svg" alt=""/>
                </a>
                <figcaption>
                    <?php if($_GET['ind'] == 'pisserotte') {
                        echo'
                        <img src="../img/pisserotte/avis/notes_air_pisserotte.png" alt="4.92 / 5"/>';
                    } elseif($_GET['ind'] == 'kelidoine') {
                        echo'
                        <img src="../img/kelidoine/avis/airbnb.png" alt="4.50 / 5"/>';
                    } ?>
                    
                </figcaption>
            </figure>

        </li>



        <?php if($_GET['ind'] == 'pisserotte') {
        echo'
        
            <li class="reveal">

                <figure id="booking">
                    <a href="https://www.booking.com/hotel/fr/1-rue-du-champois.fr.html" alt="Le logo de Booking">
                        <img src="../img/logo_agence/booking.svg" alt=""/>
                    </a>
                    <figcaption>
                        <img src="../img/pisserotte/avis/notes_booking_pisserotte.png" alt=""/>
                    </figcaption>
                </figure>

            </li>

            <li class="reveal">

                <figure id="abritel">
                    <a href="https://www.abritel.fr/location-vacances/p1630920" alt="Le logo d\'Abritel\'">
                        <img src="../img/logo_agence/abritel.svg" alt=""/>
                    </a>
                    <figcaption>
                        <img src="../img/pisserotte/avis/notes_abritel_pisserotte.png" alt=""/>
                    </figcaption>
                </figure>

            </li>';
        } ?>
    </ul>
</div>





