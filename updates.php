<?php 

/**
 * Template Name: Updates Page
 */

?>

<?php get_header();?>

<section class="updates">
    <div class="container">
        <div class="updates__title">
            <h1>Latest Trends</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
        </div>
        <div class="updates__wrapper">
            <div class="updates__left">
            <?php 
                    $args = array(
                        'post_type' => 'latest',
                        'posts_per_page' => 2,
                        'offset'  => 1,
                    );
                    $newQuery = new WP_Query($args);
            ?>
            <?php if ($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

                <div class="left__item">
                <?php echo get_the_post_thumbnail(); ?>
                    <div class="updates__author">
                        <ul>
                            <li><i class="fa-solid fa-user"></i>Nyleco-J L. Anuran</li>
                            <li><i class="fa-solid fa-calendar-days"></i>February 23, 2023</li>
                            <li><i class="fa-solid fa-tags"></i>Web Design | Wire Frame</li>
                        </ul>
                    </div>
                    <div class="updates__text">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php echo the_permalink(); ?>">Read more...</a>
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
            <div class="updates__right">
                <div class="updates__categ bb-1">
                    <h3>CATEGORIES</h3>
                    <table>
                        <tr>
                            <td>Web Design</td>
                            <td>
                                <?php 
                                $the_query = new WP_Query( array(
                                    'post_type' => 'latest',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'slug',
                                            'terms' => 'web-design'
                                        )
                                    )
                                ) );
                                $count = $the_query->found_posts;
                                echo $count;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Web Development</td>
                            <td>
                            <?php 
                                $the_query = new WP_Query( array(
                                    'post_type' => 'latest',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field' => 'slug',
                                            'terms' => 'web-development'
                                        )
                                    )
                                ) );
                                $count = $the_query->found_posts;
                                echo $count;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Wire Frame</td>
                            <td>(1)</td>
                        </tr>
                        <tr>
                            <td>Vector & Logo</td>
                            <td>(5)</td>
                        </tr>
                        <tr>
                            <td>Social Media</td>
                            <td>(2)</td>
                        </tr>
                    </table>
                </div>
                <div class="updates__rp bb-1">
                        <h3><?php echo get_field('recent_title'); ?></h3>
                        <div class="rp__item">
                            <img src="<?php echo get_template_directory_uri(); ?>./img/unsplash_Im7lZjxeLhg.png" alt="">
                            <div class="rp__item__text">
                                <h4><?php echo get_field('recent_content'); ?></h4>
                                <p><?php echo get_field('recent_date'); ?></p>
                            </div>                          
                        </div>
                        <div class="rp__item">
                            <img src="<?php echo get_template_directory_uri(); ?>./img/unsplash_MxVkWPiJALs.png" alt="">
                            <div class="rp__item__text">
                                <h4><?php echo get_field('recent_content'); ?></h4>
                                <p><?php echo get_field('recent_date'); ?></p>
                            </div>                          
                        </div>
                        <div class="rp__item">
                            <img src="<?php echo get_template_directory_uri(); ?>./img/unsplash_OqtafYT5kTw.png" alt="">
                            <div class="rp__item__text">
                                <h4><?php echo get_field('recent_content'); ?></h4>
                                <p><?php echo get_field('recent_date'); ?></p>
                            </div>                          
                        </div>
                </div>
                <div class="updates__tags">
                    <h3>TAGS</h3>
                    <div class="tags__item">    
                    <?php
                        $tags = get_tags();
                        if ( $tags ) :
                            foreach ( $tags as $tag ) :
                             ?>

                        <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="btn bg-light" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
                        <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
                

            </div>
        </div>
    </div>
</section>

<?php get_footer();?>