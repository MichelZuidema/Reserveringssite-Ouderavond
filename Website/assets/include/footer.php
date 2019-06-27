    <footer class="footer">
        <!-- black container -->
        <section class="footer__container">
                <!-- socialmedia section -->
                <section class="footer__socialmedia">
                    <figure class="socialmedia__figure">
                        <a href="https://facebook.com" class="socialmedia__icon">
                            <img src="assets/img/footer-facebook.png" class="socialmedia__icon__img" alt="Facebook logo">
                            <section class="socialmedia__text__container">
                                <p class="socialmedia__text">GLR Facebook</p>
                            </section>
                        </a>
                    </figure>
                    <figure class="socialmedia__figure">
                        <a href="https://instagram.com" class="socialmedia__icon">
                            <img src="assets/img/footer-instagram.png" alt="Instagram logo" class="socialmedia__icon__img">
                            <section class="socialmedia__text__container">
                                <p class="socialmedia__text">GLR Instagram</p>
                            </section>
                        </a>
                    </figure>
                    <figure class="socialmedia__figure">
                        <a href="https://linkedin.com" class="socialmedia__icon">
                            <img src="assets/img/footer-linkedin.png" alt="Linkedin logo" class="socialmedia__icon__img">
                            <section class="socialmedia__text__container">
                                <p class="socialmedia__text">GLR Linkedin</p>
                            </section>             
                        </a>     
                    </figure>
                </section>
                <!-- contact info section -->
                <section class="footer__contact">
                    <ul>

                        <li class="contact-li">
                            <?php
                                $content = $db->GetContent('FOOTER_L_1');

                                if($content) {
                                    echo $content;
                                } else {
                                    echo "No content found.";
                                }
                            ?>
                        </li>
                        <li class="contact-li">
                            <?php
                                $content = $db->GetContent('FOOTER_L_2');

                                if($content) {
                                    echo $content;
                                } else {
                                    echo "No content found.";
                                }
                            ?>
                        </li>
                        <li class="contact-li">
                            <?php
                                $content = $db->GetContent('FOOTER_L_3');

                                if($content) {
                                    echo $content;
                                } else {
                                    echo "No content found.";
                                }
                            ?>
                        </li>
                        <li class="contact-li">
                            <?php
                                $content = $db->GetContent('FOOTER_L_4');

                                if($content) {
                                    echo $content;
                                } else {
                                    echo "No content found.";
                                }
                            ?>
                        </li>

                        <Button class="CMS__paragraaf">Change</Button>
                    </ul>
                </section>
                <!-- GLR logo -->
                <section class="footer__logo">
                    <img src="assets/img/GLRlogo_RGB.png" alt="GLR logo" class="footer__logo--img">
                </section>
        </section>
    </footer>
    </section>
    <!-- js imports -->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>