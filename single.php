<?php get_header(); ?>

<div class="Read">
    <div class="container">
        <div class="wrapper">
            <div class="latest">
            <h2><?php the_title(); ?></h2>
            <div class="updates__author">
                        <ul>
                            <li><i class="fa-solid fa-user"></i>Nyleco-J L. Anuran</li>
                            <li><i class="fa-solid fa-calendar-days"></i>February 23, 2023</li>
                            <li><i class="fa-solid fa-tags"></i>Web Design | Wire Frame</li>
                        </ul>
                    </div>
            <?php echo get_the_post_thumbnail(); ?>
            
                    <p><?php the_content(); ?></p>
                    
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>