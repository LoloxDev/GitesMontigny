<?php
            echo'
                <div id="containTitle">
                    <h2>
                        Présentation du gîte
                    </h2>
                    <div class="picDecoTitle reveal">
                        <img src="../../img/'.($_GET['ind']).'/deco.png" alt="">
                    </div>
                </div>
            '

?>

<p class="pAcc">
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'<span class="firstLetter">D</span>ie Gîte de la Kélidoine bietet einen erholsamen Aufenthalt für die ganze Familie oder um sich mit Freunden zu treffen. Im Herzen der Natur gelegen, können Sie neue Energie tanken, während Sie die Einrichtungen des Lac de Pont und seine Unterhaltung genießen. </br>Die Region ist sehr touristisch und bietet viele Sehenswürdigkeiten zum Entdecken.
        Gute Erreichbarkeit, Autobahnausfahrt und Geschäfte in weniger als 10 Minuten erreichbar.';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'<span class="firstLetter">D</span>ie Gîte de la Pisserotte, mitten in der Natur in einer ruhigen und friedlichen Umgebung gelegen, ermöglicht es Ihnen, neue Energie zu tanken, während Sie die Einrichtungen des Lac de Pont und seine Unterhaltung genießen. </br>Die Region ist sehr touristisch und bietet viele Sehenswürdigkeiten zum Entdecken.
        Gute Erreichbarkeit, Autobahnausfahrt und Geschäfte in weniger als 10 Minuten erreichbar.';
    } ?>
</p>

<!-- CARROUSSEL -->

<ul id="carroussel">
    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../../img/kelidoine/24.JPEG" alt="Ein Foto der Landschaft von Montigny" class="carrous">';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../../img/pisserotte/11.JPEG" alt="Ein Foto der Landschaft von Montigny" class="carrous">';
            } ?>
            
            <figcaption>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../../img/kelidoine/7.JPEG" alt="Ein Foto der Landschaft von Montigny" class="carrous">';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../../img/pisserotte/2.JPEG" alt="Ein Foto der Landschaft von Montigny" class="carrous">';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../../img/kelidoine/19.JPEG" alt="Ein Foto der Landschaft von Montigny" class="carrous">';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../../img/pisserotte/19.JPEG" alt="Ein Foto der Landschaft von Montigny" class="carrous">';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>
</ul>

<p class="pAcc reveal">
    <iconify-icon icon="clarity:help-info-solid"></iconify-icon>
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'Wofür "Kélidoine" ? <br><br>
        Schöllkraut ist eine Wild- und Heilpflanze. Sie ist an ihrem zartgrünen Laub, ihrem Saft und ihren leuchtend gelben Blüten zu erkennen. Es wächst reichlich rund um die Gîte.';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'Wofür "Pisserotte" ? <br><br>
        La Pisserotte ist ein nahe gelegener Bach, der in den See mündet. Sie werden sie treffen, indem Sie den Wanderweg nehmen.';
    } ?>
</p>

<!-- NOTES -->


<div id="notesBloc">
    
        <h2 class="reveal">
            Bewertungen und Rezensionen
        </h2>

    <ul id="notes">

        <li class="reveal">

            <figure id="tourisme">
                <img src="../../img/logo_agence/3-etoiles.jpg" alt="logo du meublé de tourisme 3 étoiles">
            </figure>

        </li>

        <li class="reveal">

            <figure id="gites-fr">
                <a href="https://www.gites.fr/gites_gite-de-la-pisserotte_montigny-sur-armancon_50096.htm">
                    <img src="../../img/logo_agence/gites-fr.png" alt="Logo de gites.fr">
                </a>
                <figcaption>
                    <?php if($_GET['ind'] == 'pisserotte') {
                        echo'
                        <img src="../../img/pisserotte/avis/notes_gites_pisserotte.png" alt="9.7 / 10">';
                    } elseif($_GET['ind'] == 'kelidoine') {
                        echo'
                        <img src="../../img/kelidoine/avis/gites-fr.png" alt="8.9 / 10">';
                    } ?>
                </figcaption>
            </figure>

        </li>

        <li class="reveal">

            <figure id="airbnb">
                <a href="https://www.airbnb.fr/rooms/21588355?source_impression_id=p3_1657617711_M%2FVxCrrccF6ugbq%2B">
                    <img src="../../img/logo_agence/airbnb.svg" alt="Le logo AirBnb">
                </a>
                <figcaption>
                    <?php if($_GET['ind'] == 'pisserotte') {
                        echo'
                        <img src="../../img/pisserotte/avis/notes_air_pisserotte.png" alt="4.92 / 5">';
                    } elseif($_GET['ind'] == 'kelidoine') {
                        echo'
                        <img src="../../img/kelidoine/avis/airbnb.png" alt="4.50 / 5">';
                    } ?>
                    
                </figcaption>
            </figure>

        </li>



        <?php if($_GET['ind'] == 'pisserotte') {
        echo'
        
            <li class="reveal">

                <figure id="booking">
                    <a href="https://www.booking.com/hotel/fr/1-rue-du-champois.fr.html">
                        <img src="../../img/logo_agence/booking.svg" alt="Le logo de Booking">
                    </a>
                    <figcaption>
                        <img src="../../img/pisserotte/avis/notes_booking_pisserotte.png" alt="La note de Booking">
                    </figcaption>
                </figure>

            </li>

            <li class="reveal">

                <figure id="abritel">
                    <a href="https://www.abritel.fr/location-vacances/p1630920">
                        <img src="../../img/logo_agence/abritel.svg" alt="Le logo d\'Abritel\'">
                    </a>
                    <figcaption>
                        <img src="../../img/pisserotte/avis/notes_abritel_pisserotte.png" alt="La note de Abritel">
                    </figcaption>
                </figure>

            </li>';
        } ?>
    </ul>
</div>





