<? /**
 * Template Name: HomePage
 */
?>
<?php load_template(TEMPLATEPATH . '/shared-templates/header.php'); ?>
<?php $metaData = get_post_custom(get_the_ID());
?>

<header class="masthead" style="background-image: url(<?php echo get_template_directory_uri().'/images/home-bg.jpg' ?>)">
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
            <div id="workflow">
                <h3 class="font-color-primary">Tevreden klanten</h3>
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22277%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20277%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16dd0b3ff9b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16dd0b3ff9b%22%3E%3Crect%20width%3D%22277%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22102.6875%22%20y%3D%22106.24375%22%3E277x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hond 1</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22277%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20277%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16dd0b3ff9b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16dd0b3ff9b%22%3E%3Crect%20width%3D%22277%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22102.6875%22%20y%3D%22106.24375%22%3E277x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Hond 2</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22277%22%20height%3D%22200%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20277%20200%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16dd0b3ff9b%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16dd0b3ff9b%22%3E%3Crect%20width%3D%22277%22%20height%3D%22200%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22102.6875%22%20y%3D%22106.24375%22%3E277x200%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image cap">
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
                    <h3>Prijzen</h3>
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
                    <h3>Foto's</h3>
                </div>
            </a>
        </div>
    </div>
</div>
<?php load_template(TEMPLATEPATH . '/shared-templates/footer.php'); ?>
