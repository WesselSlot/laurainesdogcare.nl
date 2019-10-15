<? /**
 * Template Name: Content page
 */
?>
<?php load_template(TEMPLATEPATH . '/shared-templates/header.php'); ?>

<header class="masthead" style="background-image: url(<?php echo get_template_directory_uri().'/images/about-bg.jpg' ?>)">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1><?php single_post_title(); ?></h1>
                    <span class="subheading"><?php echo get_post_meta(get_the_ID(), 'subtitle', TRUE); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content( ); ?>
        </div>
    </div>
</div>


<?php load_template(TEMPLATEPATH . '/shared-templates/footer.php'); ?>
