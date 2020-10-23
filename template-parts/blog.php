<?php 
/*
* Template Name: Blog
*/
get_header(); ?>
<div id="primary" class="content">
    <div class="blogg-hero-image">
        <video autoplay playsinline autoplay muted loop>
            <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/gbg-03.mp4" type="video/mp4" />
        </video>
        <div class="container text-center"></div>
  </div>
    <section>
        <div class="container pt-5">
            
            <?php while ( have_posts() ) : the_post(); ?>
            <!-- <?php the_title( '<h1>', '</h1>' ); ?> -->

            <?php the_content(); ?>

            <?php endwhile; // end of the loop. ?>

            <?php
                $post = array(
                'post_type' => 'post',
                'order' => 'ASC',
                'post_status' => 'publish'  
            );
            $loop = new WP_Query( $post ); ?>

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="blog-item">
                    <div>
                    <?php the_title( '<h1 class="text-center mb-0">', '</h1>' ); ?>
                        <h5 class="text-center"><? $post_date = get_the_date( 'D M j' ); echo $post_date; ?></h5>
                    </div>
                    <div class="pt-3">
                    <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; // end of the loop. ?>
            <?php wp_reset_postdata();?>
        </div>
    </section>
</div><!-- #primary -->
