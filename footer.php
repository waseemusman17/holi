    <footer class="custom-footer">
        <div class="container-fluid">
            <div class="footer-content">

                <div class="col-custom-30 item-1">
                    <img src="<?php echo the_field('footer_logo','option'); ?>" alt="">
                    <p><?php echo the_field('footer_description','option'); ?></p>
                    <ul class="footer-social-link">
                        <?php if( have_rows('footer_social_link','option') ):
                            while( have_rows('footer_social_link','option') ) : the_row(); ?>  
                                <li><a href="<?php echo the_sub_field('social_media_link','option'); ?>"><img src="<?php echo the_sub_field('social_media_image','option'); ?>" alt=""></a></li>
                            <?php endwhile;
                        endif; ?>  
                    </ul>
                </div>
                <div class="col-custom-10 item-2">
                    <h6>Product</h6>
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'footer-menu_1',
                            'container' => false,
                            'menu_class' => 'footer-menu'
                            
                            ) 
                        ); 
                    ?>
                </div>
                <div class="col-custom-10 item-3">
                    <h6>Services</h6>
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'footer-menu_2',
                            'container' => false,
                            'menu_class' => 'footer-menu'
                            
                            ) 
                        ); 
                    ?>
                </div>
                <div class="col-custom-10 item-4">
                    <h6>Company</h6>
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'footer-menu_3',
                            'container' => false,
                            'menu_class' => 'footer-menu'
                            
                            ) 
                        ); 
                    ?>
                </div>
                <div class="col-custom-10 item-5">
                    <h6>More</h6>
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'footer-menu_4',
                            'container' => false,
                            'menu_class' => 'footer-menu'
                            
                            ) 
                        ); 
                    ?>
                </div>
                <div class="col-custom-20 item-6">
                    <h6>Subscribe to Exodus</h6>
                    <p>Sign up to receive our newsletter with updates about your wallet.</p>

                    <!-- <div class="input-group newsletter-form">
                        <input type="text" class="form-control" placeholder="Username">

                        <div class="input-group-prepend">
                            <div class="input-group-text"><button type="submit" class="newsletter-btn"><img src="<?php echo get_template_directory_uri();?>/assets/img/send.png" alt=""></button></div>
                        </div>
                    </div> -->
                    <?php echo do_shortcode('[contact-form-7 id="121" title="Newsletter"]'); ?>



                </div>

            </div>

            <div class="copyright-content">
                <p>
                    <span><?php echo the_field('copyright_text_first','option'); ?></span>
                    <span><?php echo the_field('copyright_text_second','option'); ?></span>
                </p>
                <a href="<?php echo the_field('copyright_link','option'); ?>"><?php echo the_field('copyright_link_text','option'); ?></a>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>


</body>
<?php wp_footer(); ?>
</html>