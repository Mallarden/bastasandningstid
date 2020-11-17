<?php 
/*
* Template Name: Blog
*/
get_header(); ?>
<div id="primary" class="content blog-page">
<div class="blogg-hero-image skew-bg position-relative" style="background-color:#<? the_field('background-color-hero')?>; background-image:url('<?php the_sub_field('background-image-hero'); ?>;')">
    <div class="container text-center content">
      <!-- <video autoplay playsinline autoplay muted loop>
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/gbg-03.mp4" type="video/mp4" />
  </video> -->
      <div>
        <!-- <h1>En rörlig helhetslösning.</h1>
        <p>Tillsammans tittar vi på vad för rörligt content ni ska utnyttja och hur detta ska utformas på bästa sätt.
          Sedan producerar vi det. Helt för egen maskin. Tillsist stöttar vi publicerings- och annonseringsarbetet så
          mycket det behövs. </p>
        <h4>En enkel formula där alla delar integreras för att kunna erhålla så bra resultat som möjligt.</h4> -->
        <div class="flex-container">
          <div class="row d-block">
            <h1 class="flex-item pb-0">Kundskap. Nyheter. Tips.</h1>
            <h3 class="flex-item mt-0 pt-0" style="font-weight:300;">Här hittar ni en blandning av allt möjligt. Givetvis noggrant strukturerat. En blandning av uppdateringar, matnyttiga tips och trender.  </h3>
        
          </div>
        </div>
      </div>
    </div>
  </div>
    <section class="position-relative">
        <div class="blog-container container pt-5">
            
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
                <div class="blog-item row">
                    <div class="col-lg-5 col-sm-12 pb-2 blog-img-container">
                    <?php if ( has_post_thumbnail() ) {
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        echo '<div class="background-page-img" style="background-image: url('. $url.')"></div>';
                        }
                    ?>
                    </div>
                    <div class="col-lg-7 col-sm-12 text-part">
                    <?php the_title( '<h1 class="text-center mb-0">', '</h1>' ); ?>
                        <h5 class="text-center"><? $post_date = get_the_date( 'D M j' ); echo $post_date; ?></h5>
                    <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; // end of the loop. ?>
            <?php wp_reset_postdata();?>
        </div>
    </section>
    <svg>
    <clipPath id="wave" clipPathUnits="objectBoundingBox">
      <path class="st0" d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z"/>
    </clipPath>
  </svg>
</div><!-- #primary -->

<?php get_footer();