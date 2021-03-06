<?php 
/*
* Template Name: About
*/
get_header(); ?>
<div id="primary" class="content">
<div class="about-hero-image" style="background-color:#<? the_field('background_color_hero')?>; background-image:url('<?php the_field('background_image_hero'); ?>');">
  <div class="about-filter">
    <div class="container text-center">
      <!-- <video autoplay playsinline autoplay muted loop>
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/gbg-03.mp4" type="video/mp4" />
  </video> -->
      <div>
        <div class="flex-container">
          <div class="row d-block">
            <h1 class="flex-item mb-0" style="font-size: font-size: calc(44px + (36 - 10) * ((100vw - 900px) / (1100 - 300)));">Drivna. Nyfikna. Glada.</h1>
            <!-- <p class="flex-item">Vi har alltid haft som ambition att skapa den bästa arbetstiden. </p> -->
            <h3 class="flex-item" style="font-weight:300;">Vi har alltid haft som ambition att skapa den bästa arbetstiden.</h3>
          </div>
        </div>
      </div>
    </div>
</div>

  </div>
  <div class="section-start om-oss-section">
  <img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/white-wave.webp" />  

  <section class="about-first-section">
    <div class="container">
      <?php the_field('vilka_ar_vi')?>
    </div>
  </section>
<section class="about-second-section">
  <div class="container">
  <?php if( have_rows('about_us') ):
    while ( have_rows('about_us') ) : the_row(); ?>
      <div class="row pt-5 fade-y pt-4" data-delighter="start:0.90;">
        <div class="col-lg-3 col-sm-12 px-0 about-us-img">
            <img class="ml-0 mr-0" src="<?php the_sub_field('about_us_image'); ?>"/>
        </div>
        <div class="col-lg-7 col-lg-offset-2 col-sm-12 d-flex align-items-center">
            <div class="about-first-container pt-3">
                <?php the_sub_field('about_us_text'); ?>
            </div>
        </div>
      </div>
      <?php endwhile;	else :endif; ?>
    </div>
</section>
  
  </div>
</div><!-- #primary -->

<?php get_footer();

