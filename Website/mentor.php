<?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "tijdschema";
        //header
        require 'assets/include/header.php';
    ?>
    <main id="mentor">
        <section id="selectStudent">
            <h2>Kies uw klas</h2>
            <section id="foto">
                <img src="assets/img/GLRlogo_RGB.png" alt="">
            </section>
            <section id="klas">
                
                <select>
                    <option value="">i1a</option>
                    <option value="">i1b</option>
                    <option value="">i1c</option>
                    <option value="">i1d</option>
                    <option value="">i1d</option>
                </select>
            </section>
            <section id="student">
                <select id="">
                    <option value="">piet</option>
                    <option value="">klaas</option>
                    <option value="">henk</option>
                    <option value="">bob</option>
                    <option value="">kevin</option>
                    <option value="">jan</option>
                    <option value="">dirk</option>
                    <option value="">tom</option>
                    <option value="">kees</option>
                    <option value="">stefan</option>
                </select>
            </section>
        </section>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>