<?php
/**
 * Template Name: Contact
 */
?>

<?php load_template(TEMPLATEPATH . '/shared-templates/header.php'); ?>

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
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>
                <?php
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                wp_reset_query();
                ?>
            </p>
            <form name="sentMessage" method="POST" action="" id="contactForm" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Naam</label>
                        <input type="text" class="form-control" placeholder="Naam" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Telefoonnummer</label>
                        <input type="tel" class="form-control" placeholder="Telefoonnummer" id="phone" required data-validation-required-message="Please enter your phone number.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>Bericht</label>
                        <textarea rows="5" class="form-control" placeholder="Bericht" id="message" required data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="sendMessageButton">Verstuur</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php load_template(TEMPLATEPATH . '/shared-templates/footer.php'); ?>

