<?php 

/**
 * Template Name: Services Page
 */

?>

<?php get_header();?>

<?php 

        $args = array(
            'post_type' => 'services',
            'posts_per_page' => -1,
        );

        $newQuery = new WP_Query($args);

?>
<?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

<section class="<?php echo get_field('class_name')?>">
    <div class="container">
        <div class="service__wrapper">
            <div class="web">
                <div class="service__text ">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                    <p><?php the_content(); ?></p>
                    <div class="price">
                        <h4><?php echo get_field('services_price'); ?></h4>
                        <h2><?php echo get_field('services_price_no'); ?></h2>
                        <h5><i><?php echo get_field('services_price_content'); ?></i></h5>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>./img/unsplash_v9FQR4tbIq8.png" alt="">
            </div>
            
        </div> 
        <div class="down">
        <a href=""><i class="<?php echo get_field('down'); ?>"></i></a>
        </div>
    </div>
</section>
<?php 

endwhile;
    else:
        echo "no available content";
    endif;
    wp_reset_postdata();   
?>


<?php get_footer();?>