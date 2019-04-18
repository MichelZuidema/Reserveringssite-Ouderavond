<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "";
        //header
        require 'assets/include/header.php';
        require_once 'assets/db/database.class.php';

        $db = new Database();

        if(!$_GET['id'] == "") {
            $id = $_GET['id'];
        }

        $queryTijdstip = "SELECT * FROM tijdstip WHERE id = (SELECT tijdstip_id FROM reservering WHERE student_id = '$id')";
        $queryReservering = "SELECT * FROM reservering WHERE student_id = '$id'";

        $result = mysqli_query($db->mysqli, $queryTijdstip);
        $resultReservering = mysqli_query($db->mysqli, $queryReservering);

        $row = mysqli_fetch_array($result);
        $rowRes = mysqli_fetch_array($resultReservering);
    ?>
    <main class="confirmed">
        <article class="confirmed__article">
            <h2 class="confirmed__heading">Gegevens van uw aanmelding</h2>

            <label class="confirmed__date--label">Datum:</label>
            <input type="text" value="<?php echo $row['datum'];?>" class="confirmed__date--input">

            <label class="confirmed__time--label">Gewenste tijd:</label>
            <input type="text" value="<?php echo $row['tijd_start'];?> t/m <?php echo $row['tijd_einde']; ?>" class="confirmed__time--input">

            <label class="confirmed__person--label">Aantal personen</label>
            <input type="text" value="<?php echo $rowRes['personen']; ?> personen" class="confirmed__person--input">

            <label class="confirmed__message--label">Uw opmerking bericht:</label>
            <textarea class="confirmed__message--input"><?php echo $rowRes['opmerking']; ?></textarea>

            <p class="confirmed__text">Wij hebben u ook een mail gestuurd met uw gegevens</p>
        </article>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>