<?php 

/**
 * Template Name: Home
 */

?>

<?php get_header();?>
<section class="banner">
    <div class="container">
        <div class="banner__wrapper">
            <div class="banner__text">
                <h1><?php echo get_field('banner_title'); ?></h1>
                <p><?php echo get_field('banner_paragraph')?></p>
                <a id="banner__btn"  href="" class="btn bg--yellow"><?php echo get_field ('banner_link') ?></a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>./img/Hero.png" alt="">
        </div>
    </div>
</section>

<section class="hm-services">
    <div class="container">
        <div class="hm-services__wrapper">
    <?php 

            $args = array(
                'post_type' => 'services',
                'posts_per_page' => -1,
            );

            $newQuery = new WP_Query($args);

    ?>
    <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                <div class="hm-services__item">
                    <i class="<?php echo get_field ('text_icon'); ?>"></i>
                    <h4><?php the_title(); ?></h4>
                    <p><?php the_content(); ?> </p>
                    <a class="btn bg--yellow"href="<?php echo site_url ('services'); ?>">Get Quote</a>
                </div>
    <?php 

        endwhile;
            else:
                echo "no available content";
            endif;
            wp_reset_postdata();   
    ?>

            </div>
        </div>
</section>

<section class="about__me">
    <div class="container">
        <div class="banner__wrapper">
            <div class="img">
                <img class="img1" src="<?php echo get_template_directory_uri(); ?>./img/Ellipse 1.png" alt="">
                <img class="img2" src="<?php echo get_template_directory_uri(); ?>./img/unsplash_GIy2ly37Kw8.png" alt="">
            </div>          
            <div class="banner__text">   
                <h1><?php echo get_field('h1_text'); ?></h1>
                <p><?php echo get_field('p_about'); ?></p>
                <p><?php echo get_field('p_about2'); ?></p>
            </div>
    </div>
</section>

<section class="latest__trend">
    <div class="container">
        <div class="latest__title">
            <h2><?php echo get_field('h1_title'); ?></h2>
            <p><?php echo get_field('p_latest'); ?></p>
        </div>
            <div class="latest__wrapper">
    <?php 

            $args = array(
                'post_type' => 'latest',
                'posts_per_page' => 3,
                'offset'  => -1,
            );

            $newQuery = new WP_Query($args);

    ?>
    <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
                <div class="latest__card">
                <?php echo get_the_post_thumbnail(); ?>
                    <div class="card__text">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php echo the_permalink(); ?>">Read more..</a>
                    </div>
                </div>             
                    
                <?php 

        endwhile;
            else:
                echo "no available content";
            endif;
            wp_reset_postdata();   
    ?>
                             
            </div>
    </div>
</section>

<?php include 'contactsec.php'; ?>

<?php get_footer();?>