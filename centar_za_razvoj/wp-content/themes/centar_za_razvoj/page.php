<?php 
/*
* Template Name: Page glavni template
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
               
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="post">
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; else : ?>
                    <?php _e('Nema unetih stranica'); ?>
                <?php endif; ?>
                
            </article>
            
            <aside>
                <?php get_sidebar(); ?>
            </aside>
            
        </div>
    </section>

<?php get_footer(); ?>