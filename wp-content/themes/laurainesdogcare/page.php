<? /**
 * Template Name: Content page
 */
?>
<?php load_template(TEMPLATEPATH . '/shared-templates/header.php'); ?>

<header class="masthead" style="background-image: url(<?php echo get_template_directory_uri().'/images/404db9b6-5ab9-4784-a330-972d3df58638.jpg' ?>)">
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
            <?php
                while ( have_posts() ) : the_post();
                  the_content();
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </div>
</div>


<?php load_template(TEMPLATEPATH . '/shared-templates/footer.php'); ?>
