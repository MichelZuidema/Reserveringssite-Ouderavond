<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "";
        //header
        require 'assets/include/header.php';
    ?>
    <main class="confirmed">
        <article class="confirmed__article">
            <h2 class="confirmed__heading">Gegevens van uw aanmelding</h2>

            <section class="confirmed__student--container">
            <img src="assets/img/GLRlogo_RGB.png" alt="GLR-logo" class="confirmed__student--picture">
            </section>

            <label class="confirmed__student--label">student:</label>
            <input type="text" value="piet jan klaas" class="confirmed__student--input">

            <label class="confirmed__date--label">Datum:</label>
            <input type="text" value="28/4/2020" class="confirmed__date--input">

            <label class="confirmed__time--label">Gewenste tijd:</label>
            <input type="text" value="18:00 t/m 19:00" class="confirmed__time--input">

            <label class="confirmed__person--label">Aantal personen</label>
            <input type="text" value="3 personen" class="confirmed__person--input">

            <label class="confirmed__message--label">Uw opmerking bericht:</label>
            <textarea class="confirmed__message--input">Lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit autem accusamus quaerat placeat! Consequuntur nam dolore qui perferendis ratione impedit hic molestiae quos unde sint labore reiciendis quas, ipsam accusantium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia provident, nesciunt eveniet consequatur nostrum et unde ab adipisci fugit pariatur sed doloribus cupiditate molestiae! Eum eius dolor qui eligendi quo! dolor sit amet consectetur adipisicing elit. Eos aperiam recusandae, consequatur voluptatem accusamus inventore quae sunt enim ab quasi excepturi maxime suscipit possimus rerum deserunt ut aliquid et veritatis!</textarea>

            <p class="confirmed__text">Wij hebben u ook een mail gestuurd met uw gegevens</p>
        </article>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>