<?php
    /**
        * Template Name: Home Template
        *
    */
    get_header();
?>

<!-- Homa Main Banner -->
<section class="hmb-section" style="background-image:url('<?php echo the_field('main_banner_background'); ?>');">
    <div class="container">
        <div class="hmb-content">
            
            <div class="hmb-info">
                <h1><?php echo the_field('main_banner_title'); ?></h1>
                <p><?php echo the_field('main_banner_description'); ?></p>
                <div class="hmb-info-btn">
                    <a href="<?php echo the_field('first_button_links   '); ?>" class="hmb-first-btn"><?php echo the_field('first_button_text'); ?></a>
                    <a href="<?php echo the_field('second_button_link'); ?>" class="hmb-second-btn"><?php echo the_field('second_button_text'); ?></a>
                </div>
            </div>
            <div class="hmb-img">
                <img src="<?php echo the_field('banner_upper_image'); ?>" alt="">
            </div>
            

        </div>
    </div>
</section>

<!-- Our solution for your business  -->

<?php get_footer(); ?>