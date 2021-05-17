<?php 
/*
* Template Name: Projekti stranica
*/
?>

    <?php get_header(); ?>
    <!-- header -->
    <header class="headers">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </header>
    
    <!-- blog -->
    <section class="blog">
        <div class="container">
           
            <article>
               
                <?php 
                $query = new WP_Query(array('post_type' => 'projekti'));
                if($query->have_posts()) : ?>
                <?php while($query->have_posts()) : $query->the_post(); ?>
                <div class="projekti">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="text">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn">
                            <?php _e('Više o projektu'); ?>
                        </a>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <?php else : ?>
                    <?php _e('Nema unetih projekata'); ?>
                <?php endif; ?>
            </article>
            
            <aside>
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </section>

<?php get_footer(); ?>