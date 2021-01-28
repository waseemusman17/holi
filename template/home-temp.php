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
<section class="osb-section">
    <div class="container">
        <div class="osb-content">
            <div class="osb-info">
                <span><?php echo the_field('business_section_tag'); ?></span>
                <h2><?php echo the_field('business_section_title'); ?></h2>
                <p><?php echo the_field('business_section_description'); ?></p>
            </div>
            <div class="osb-box-section row">
                
                <?php if( have_rows('business_service') ):
                    while( have_rows('business_service') ) : the_row(); ?>
                        <div class="osb-box col-md-2 col-lg-3">
                            <img src="<?php echo the_sub_field('business_service_image'); ?>" alt="">
                            <h5 class="obs-box-title"><?php echo the_sub_field('business_service_title'); ?></h5>
                            <p class="obs-box-description"><?php echo the_sub_field('business_service_description'); ?></p>
                            <a href="<?php echo the_sub_field('business_service_link'); ?>" class="obs-box-btn">Learn more</a>
                        </div>    
                    <?php endwhile;
                endif; ?>   

            </div>
        </div>
    </div>
</section>

<!-- Analyze your data -->
<section class="ayd-section">
    <div class="container">
        <div class="ayd-content row">
            <div class="col-md-7">
                <img src="<?php echo the_field('analyze_section_main_image');?>" width="100%" alt="">
            </div>
            <div class="col-md-5 ayd-info">
                <span><?php echo the_field('analyze_section_tag');?></span>
                <h2><?php echo the_field('analyze_section_title');?></h2>
                <p><?php echo the_field('analyze_section_description');?></p>

                <div class="row aye-detail-info">
                    <?php if( have_rows('analyze_service') ):
                        while( have_rows('analyze_service') ) : the_row(); ?>
                            <div class="col-md-6">
                                <img src="<?php echo the_sub_field('analyze_service_image'); ?>" alt="">                    
                                <h5><?php echo the_sub_field('analyze_service_title'); ?></h5>
                                <p><?php echo the_sub_field('analyze_service_description'); ?></p>
                            </div>
                        <?php endwhile;
                    endif; ?>   
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>