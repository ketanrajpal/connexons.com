<?php header('Content-Type: text/html; charset=ISO-8859-1'); ?>
<div id="top-logo"><img src="../img/logo.jpg"></div>
<header>
    <div class="clear"><a href="../" id="logo"><img src="../img/logo.jpg"></a>
        <nav>
            <ul class="clear">
                <li><a href="../" <?php if ($page == "index") {
                        echo "class='current'";
                    } ?>>Home</a></li>
                <li><a href="../about" <?php if ($page == "about") {
                        echo "class='current'";
                    } ?>>About</a></li>
                <li><a href="../tours" <?php if ($page == "tours") {
                        echo "class='current'";
                    } ?>>Tours</a></li>
                <li><a href="../cars" <?php if ($page == "cars") {
                        echo "class='current'";
                    } ?>>Transport</a></li>
                <li><a href="../blog" <?php if ($page == "blog") {
                        echo "class='current'";
                    } ?>>Blog</a></li>
                <li><a href="../contact/enquire-now" <?php if ($page == "contact") {
                        echo "class='current'";
                    } ?>>Contact</a></li>
            </ul>
        </nav>
        <ul id="social">
            <li><a target="_blank" href="https://www.facebook.com/connexons"><span class="fa fa-facebook"></span></a>
            </li>
            <li><a target="_blank" href="https://twitter.com/connexons"><span class="fa fa-twitter"></span></a></li>
            <li><a target="_blank" href="https://instagram.com/connexons"><span class="fa fa-instagram"></span></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/connexonstravel"><span
                            class="fa fa-linkedin"></span></a></li>
        </ul>
    </div>
</header>
<script>$(function () {
        $('nav').slicknav();
    });</script>
<?php if ($page == "contact" || $page == "enquire-now") {
    ?>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14018.771318144207!2d77.21559174603271!3d28.548951119720027!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2815541998b26db2!2sConnexons+Travel+(India)+Pvt.+Ltd.!5e0!3m2!1sen!2sin!4v1447931554098"
            width="100%" height="500" frameborder="0" style="border:0"></iframe>
    <?php
} else if ($page == "tours") {

    if (isset($_GET["slug"])) {

        ?>

        <section id="topimg"><img src="../blog/wp-content/uploads/<?php echo slide_image(); ?>" width="100%;"></section>
        <?php
    } else {
        ?>
        <section id="topimg"><img src="../img/pages/<?php echo $page; ?>.jpg" width="100%;"></section>
        <?php
    }
    ?>
<?php } else if ($page == "blog") {
    ?>
    <section id="topimg">
        <ul class="newslider">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <li><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" width="100%"></li>
            <?php endwhile; ?>
        </ul>
        <script>$('.newslider').bxSlider({auto: true, mode: 'fade', captions: false, pager: false});</script>
    </section>
    <?php

} else if ($page != "index") {

    if ($_GET["slug"] != "") {
        $page = $_GET["slug"];
    }
    ?>
    <section id="topimg"><img src="../img/pages/<?php echo $page; ?>.jpg" width="100%;"></section>
<?php } ?>
