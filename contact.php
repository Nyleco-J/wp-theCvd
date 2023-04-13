<?php 

/**
 * Template Name: Contact Page
 */

?>
<?php get_header();?>

<section class="contact__section ">
            <div class="container">
                <div class="contact__wrap">
                    <div class="contact__text">
                            <h2><?php the_title(); ?></h2>
                                <p><?php echo get_field('contact_content'); ?></p>
                                    <div class="contact__icons">
                                        <div> 
                                            <i class="fa-solid fa-phone-flip"></i>
                                            <span><?php echo get_field('contact_number'); ?></span>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-envelope"></i>
                                                <span><?php echo get_field('contact_email');?></span>
                                        </div>
                                            <div>
                                                  <i class="fa-solid fa-map-pin"></i>
                                                 <span><?php echo get_field('contact_address'); ?></span>
                                            </div>   
                                    </div>
                    </div>
                    <div class="contact__input">
                            <!-- <input type="text" name ="" placeholder="Name" id ="">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Message" row class="messageArea">
                            <div><a href="">Send Message</a></div> -->

                            <?php echo do_shortcode('[contact-form-7 id="156" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
</section>
        
           <hr>

 <?php get_footer();?>