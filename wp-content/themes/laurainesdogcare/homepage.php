<? /**
 * Template Name: HomePage
 */
?>
<?php load_template(TEMPLATEPATH . '/shared-templates/header.php'); ?>
<?php $metaData = get_post_custom(get_the_ID());
?>

<header class="masthead" style="background-image: url(<?php echo get_template_directory_uri().'/images/ed7ac935-ad13-4a6b-aa22-b97cb1457fa1.jpg' ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1><?php echo $metaData['banner-title'][0]; ?></h1>
                    <span class="subheading"><?php echo $metaData['banner-subtitle'][0]; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto content">
            <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>

<div class="container-fluid background-color-gray">
    <div class="container">
            <div id="reviews">
                <h3 class="font-color-primary">Tevreden honden</h3>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri().'/images/IMG_3528.jpg' ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hond 1</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri().'/images/IMG_5430.jpg' ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hond 2</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="<?php echo get_template_directory_uri().'/images/B8C68543-CF8C-487C-96BA-C88B48EAABC1.jpg' ?>"  alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hond 3</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="container">
    <div class="row go-to-buttons">
        <div class="col-lg-6 center-text font-color-white icon-font-size">
            <a href="<?php echo get_site_url()."/prijzen"?>">
                <div class="info-panel">
                    <i class="fas fa-money-bill-alt"></i>
                    <span>Prijzen</span>
                </div>
            </a>
        </div>
<!--        <div class="col-lg-4 center-text font-color-white icon-font-size">-->
<!--            <a href="">-->
<!--                <div class="info-panel">-->
<!--                    <i class="fas fa-calendar-day"></i>-->
<!--                    <h3>Online agenda</h3>-->
<!--                </div>-->
<!--            </a>-->
<!--        </div>-->
        <div class="col-lg-6 center-text font-color-white icon-font-size">
            <a target="_blank" href="https://www.instagram.com/lauraine_dogcare/">
                <div class="info-panel">
                    <i class="fas fa-photo-video"></i>
                    <span>Foto's</span>
                </div>
            </a>
        </div>
    </div>
</div>
<?php load_template(TEMPLATEPATH . '/shared-templates/footer.php'); ?>
