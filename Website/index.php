    <?php 
        //page title
        $pageTitle = "Inschrijving ouderavond | Grafisch Lyceum Rotterdam";
        //selected navigation link
        $selectedLink = "index";

        // Start the session to get the logged in user details
        session_start();

        // Header
        if($_SESSION['role'] == 1) {
            require 'assets/include/headerMentor.php';
        } else {
            require 'assets/include/header.php';
        }
    ?>
    <main class="homepage">
            <!-- General information -->
            <article class="information article">
                <h2 class="information__heading">Algemene informatie</h2>
                <div class="information__container">
                    <p class="information__container--text">dat een Lorem lorem ipsum dolor lorem lorem sit amet consectetur, adipisicing elit. Fugit saepe quaerat ut deserunt, non et facilis perspiciatis reiciendis dignissimos, reprehenderit quod consequatur totam. Laboriosam velit adipisci veniam, quod quos harum. lezer, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt iste, minima ex magnam tenetur voluptates culpa. Rem, labore expedita eius quibusdam error ipsam corrupti temporibus ab, earum nesciunt blanditiis dicta. tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in uw tegenstelling tot “Hier uw tekst, hier uw tekst” wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina </p>
                </div>
            </article>
            <!-- backgroundimage -->
            <section class="article__image--1"></section>
            <!-- register information -->
            <article class="register article">
                <h2 class="register--heading">Hoe schrijf ik me in</h2>
                    <ol class="register__list">
                        <li class="register__list__item">1. quidem asperiores expedita aliquam? In enim voluptas quidem.</li>
                        <li class="register__list__item">2. Natus assumenda quaerat beatae quia a dolorum eligendi</li>
                        <li class="register__list__item">3. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                        <li class="register__list__item">4. tenetur, perferendis quae quia asperiores aut.</li>
                        <li class="register__list__item">4. met consectetur adipisicing eliis quae quia asperiores aut.</li>
                    </ol>
            </article>
            <!-- background image -->
            <section class="article__image--2"></section>
            <!-- Fill diagram-->
            <article class="diagram article">
                <h2 class="diagram__heading">Ingeschreven ouders</h2>
                <!-- diagram GRID -->
                <section class="diagram__grid">
                    <!-- diagram 2 -->
                    <section class="diagram__grid__item--1">
                        <p class="diagram--time">18:00</p>
                        <section id="diagram-1"></section>
                        <h3>60%</h3>
                        <p class="diagram--fill">32/33</p>
                    </section>
                    <!-- diagram 2 -->
                    <section class="diagram__grid__item--2">
                        <p class="diagram--time">19:00</p>
                        <section id="diagram-2"></section>
                        <h3>60%</h3>
                        <p class="diagram--fill">32/33</p>
                    </section>
                    <!-- diagram 3 -->
                    <section class="diagram__grid__item--3">
                        <p class="diagram--time">20:00</p>
                        <section id="diagram-3"></section>
                        <h3>60%</h3>
                        <p class="diagram--fill">32/33</p>
                    </section>
                    <!-- diagram 4 -->
                    <section class="diagram__grid__item--4">
                        <p class="diagram--time">21:00</p>
                        <section id="diagram-4"></section>
                        <h3>60%</h3>
                        <p class="diagram--fill">32/33</p>                
                    </section>
                </section>
            </article>
            <!-- background image -->
            <section class="article__image--3"></section>
    </main>
    <?php
        // footer
        require 'assets/include/footer.php';
    ?>
    <script src="assets/js/text"></script>