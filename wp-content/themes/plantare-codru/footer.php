<!-- <footer>


<div class="container-fluid">
    <div class="row m-auto justify-content-center">
        <div class="footerItems col-lg-5 col-md-12 col-12 justify-content-center align-items-center d-flex">
            <a href="https://codrufestival.ro"><img class="footer-logo" src="/wp-content/themes/plantare-codru/images/logocodru.png" alt=""></a>
            <a href="/termeni-si-conditii">Termeni și condiții</a>
            <a href="/politica-de-confidentialitate">Politica de confidențialitate</a>
            <a href="/regulament-de-participare">Regulament de participare</a>
            <a href="/cookie-policy">Cookie policy</a>
            <span class="footerSocials">
                <a href="https://www.facebook.com/codrufestival" target="_blank"><img src="/wp-content/themes/plantare-codru/images/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/codrufestival/" target="_blank"><img src="/wp-content/themes/plantare-codru/images/instagram.png" alt=""></a>
                <a href="https://www.linkedin.com/company/codrufestival/" target="_blank"><img src="/wp-content/themes/plantare-codru/images/linkedin.png" alt=""></a>
                <a href="https://www.youtube.com/@codrufestival" target="_blank"><img src="/wp-content/themes/plantare-codru/images/youtube.png" alt=""></a>
            </span>
        </div>
    </div>
</div> -->
<footer>

<div class="container-fluid">
<img class="footerLeftImg" src="/wp-content/themes/plantare-codru/images/footerleft.png" alt="">
<img class="footerRightImg" src="/wp-content/themes/plantare-codru/images/footerright.png" alt="">

    <div id="contact" class="container-fluid contactFormSection p-0">
    <div class="contactSectionLeftSide container">
    <?php
        echo "<h2>" . get_field('contact_title', 'options') . "</h2>";
        echo "<p>" . get_field('contact_text', 'options') . "</p>";
        echo do_shortcode('[forminator_form id="15"]'); 
?>
    </div>
    </div>

    <div class="row m-auto justify-content-center">
        <div class="footerLeftLogo col-lg-2 col-md-12 col-12 d-flex">
            <img class="footer-logo footer-logo-codru" src="/wp-content/themes/plantare-codru/images/logo.svg" alt="">
        </div>
        <div class="footerItems col-lg-8 col-xl-7 col-md-12 col-12">
            <span><img src="/wp-content/themes/plantare-codru/images/mail.svg" alt="">OFFICE@CODRUFESTIVAL.RO</span>
            <a href="https://goo.gl/maps/CKWH5sGtU7W9PxNo8" target="_blank"><span><img src="/wp-content/themes/plantare-codru/images/map-pin.svg" alt="">PĂDUREA BISTRA, JUDEȚUL TIMIȘ</span></a>
            <span><img src="/wp-content/themes/plantare-codru/images/camera.svg" alt="">PRESS@CODRUFESTIVAL.RO</span>
            <span class="footerSocials">
                <a href="https://www.facebook.com/codrufestival" target="_blank"><img src="/wp-content/themes/plantare-codru/images/facebookcodru.svg" alt=""></a>
                <a href="https://www.instagram.com/codrufestival/" target="_blank"><img src="/wp-content/themes/plantare-codru/images/instagramcodru.svg" alt=""></a>
                <a href="https://www.linkedin.com/company/codrufestival/" target="_blank"><img src="/wp-content/themes/plantare-codru/images/linkedincodru.svg" alt=""></a>
                <a href="https://www.youtube.com/@codrufestival" target="_blank"><img src="/wp-content/themes/plantare-codru/images/youtubecodru.svg" alt=""></a>
                <a href="https://spotify.link/mN0Bq5T0dCb" target="_blank"><img src="/wp-content/themes/plantare-codru/images/spotify.svg" alt=""></a>
            </span>
        </div>
        <div class="footerRightLogo col-lg-2 col-md-12 col-12 d-flex">
            <img class="footer-logo" src="/wp-content/themes/plantare-codru/images/logoteg.png" alt="">
        </div>
        <div class="footerTermsMobile pt-4 d-flex justify-content-center col-md-12 col-12">
            <?php
            
            $mobile_menu = get_menu_with_children("footerMenu"); 
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            foreach ($mobile_menu as $item) {
                echo "<span><a href='$item->url' target='_blank'>$item->title</a></span>";
            }

            ?>
        </div>
        <div class="footerMobileLogo col-md-12 col-12 d-flex">
            <img class="footer-logo codruLogoFooter" src="/wp-content/themes/plantare-codru/images/logo.svg" alt="">
            <img class="footer-logo" src="/wp-content/themes/plantare-codru/images/logoteg.png" alt="">
        </div>
    </div>
    <div class="row m-auto justify-content-center">
        <div class="col-lg-2 col-md-12 col-12 d-flex">
        </div>
        <div class="footerTerms pt-4 d-flex justify-content-center col-lg-8 col-xl-7 col-md-12 col-12">
            <?php
            
            $mobile_menu = get_menu_with_children("footerMenu"); 
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            foreach ($mobile_menu as $item) {
                echo "<span><a href='$item->url' target='_blank'>$item->title</a></span>";
            }

            ?>
        </div>
        <div class="col-lg-2 col-md-12 col-12 d-flex">
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>    <script src="/wp-content/themes/plantare-codru/js/popper.min.js"></script>
    <script src="/wp-content/themes/plantare-codru/js/bootstrap.min.js"></script>
    <script src="/wp-content/themes/plantare-codru/js/jquery.sticky.js"></script>
    <script src="/wp-content/themes/plantare-codru/js/main.js"></script>
    <?php wp_footer(); ?>

</footer>
</body>
</html>