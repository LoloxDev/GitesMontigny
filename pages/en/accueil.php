<?php
            echo'
                <div id="containTitle">
                    <h2>
                        Presentation of the cottage
                    </h2>
                    <div class="picDecoTitle reveal">
                        <img src="../../img/'.($_GET['ind']).'/deco.png" alt="">
                    </div>
                </div>
            '

?>

<p class="pAcc">
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'<span class="firstLetter">T</span>he gîte de la Kélidoine offers a relaxing stay for the whole family or to meet up with friends. Located in the heart of nature, you can recharge your batteries while enjoying the facilities of Lac de Pont and its entertainment. </br>The region is very touristy and offers many sites to discover.
        Easy to access, motorway exit and shops less than 10 minutes away.';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'<span class="firstLetter">T</span>he Gîte de la Pisserotte, located in the heart of nature in a calm and peaceful environment, will allow you to recharge your batteries while enjoying the facilities of Lac de Pont and its entertainment. </br>The region is very touristy and offers many sites to discover.
        Easy to access, motorway exit and shops less than 10 minutes away.';
    } ?>
</p>

<!-- CARROUSSEL -->

<ul id="carroussel">
    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../../img/kelidoine/24.JPEG" alt="A photo of the landscape of Montigny" class="carrous">';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../../img/pisserotte/11.JPEG" alt="A photo of the landscape of Montigny" class="carrous">';
            } ?>
            
            <figcaption>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../../img/kelidoine/7.JPEG" alt="A photo of the landscape of Montigny" class="carrous">';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../../img/pisserotte/2.JPEG" alt="A photo of the landscape of Montigny" class="carrous">';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>

    <li>
        <figure>
            <?php if($_GET['ind'] == 'kelidoine') {
                echo'<img src="../../img/kelidoine/19.JPEG" alt="A photo of the landscape of Montigny" class="carrous">';
            } elseif($_GET['ind'] == 'pisserotte') {
                    echo'<img src="../../img/pisserotte/19.JPEG" alt="A photo of the landscape of Montigny" class="carrous">';
            } ?>
            <figcaption>
            </figcaption>
        </figure>
    </li>
</ul>

<p class="pAcc reveal">
    <iconify-icon icon="clarity:help-info-solid"></iconify-icon>
    <?php if($_GET['ind'] == 'kelidoine') {
        echo'Why "Kélidoine" ? <br><br>
        
        Celandine is a wild and medicinal plant. It is recognized by its soft green foliage, its sap and its bright yellow flowers. It grows abundantly around the gîte.';
    } elseif($_GET['ind'] == 'pisserotte') {
        echo'Why "Pisserotte" ? <br><br>
        La Pisserotte is a nearby stream that flows into the lake. You will meet her by taking the hiking trail.';
    } ?>
</p>

<!-- NOTES -->


<div id="notesBloc">
    
        <h2 class="reveal">
            Ratings and Reviews
        </h2>

    <ul id="notes">

        <li class="reveal">

            <figure id="tourisme">
                <img src="../../img/logo_agence/3-etoiles.jpg" alt="3-star tourist accommodation logo">
            </figure>

        </li>

        <li class="reveal">

            <figure id="gites-fr">
                <a href="https://www.gites.fr/gites_gite-de-la-pisserotte_montigny-sur-armancon_50096.htm">
                    <img src="../../img/logo_agence/gites-fr.png" alt="Logo of gites.fr">
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
                    <img src="../../img/logo_agence/airbnb.svg" alt="The Airbnb logo">
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
                        <img src="../../img/logo_agence/booking.svg" alt="The Booking logo">
                    </a>
                    <figcaption>
                        <img src="../../img/pisserotte/avis/notes_booking_pisserotte.png" alt="The rating of Booking">
                    </figcaption>
                </figure>

            </li>

            <li class="reveal">

                <figure id="abritel">
                    <a href="https://www.abritel.fr/location-vacances/p1630920">
                        <img src="../../img/logo_agence/abritel.svg" alt="The Abritel logo">
                    </a>
                    <figcaption>
                        <img src="../../img/pisserotte/avis/notes_abritel_pisserotte.png" alt="The rating of Abritel">
                    </figcaption>
                </figure>

            </li>';
        } ?>
    </ul>
</div>





