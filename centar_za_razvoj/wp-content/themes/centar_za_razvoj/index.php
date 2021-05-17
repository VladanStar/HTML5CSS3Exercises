<?php get_header(); ?>
    <!-- header -->
    <header class="headers">
        <div class="container">
            <h1>Blog</h1>
        </div>
    </header>
    
    <!-- blog -->
    <section class="blog">
        <div class="container">
           
            <article>
               
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="post">
                    <div class="featured-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="text">
                        <h3><?php the_title(); ?></h3>
                        <p class="meta"><?php the_author(); ?> | <?php echo get_the_date();  ?></p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn">
                            <?php _e('Ceo tekst'); ?>
                        </a>
                    </div>
                </div>
                <?php endwhile; else : ?>
                    <?php _e('Nema unetih blog postova'); ?>
                <?php endif; ?>
                
            </article>
            
            <aside>
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </section>

<?php get_footer(); ?>