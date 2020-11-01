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
            <h1 class="flex-item">Drivna. Nyfikna. Glada.</h1>
            <!-- <p class="flex-item">Vi har alltid haft som ambition att skapa den bästa arbetstiden. </p> -->
            <h4 class="flex-item">Vi har alltid haft som ambition att skapa den bästa arbetstiden.</h4>
          </div>
        </div>
      </div>
    </div>
</div>
  </div>
  <section class="wave-test about-first-section pb-5 ">
  <svg>
    <clipPath id="wave" clipPathUnits="objectBoundingBox">
      <path class="st0" d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z"/>
    </clipPath>
  </svg>
    <div class="container">
    <h1 class=""><strong>Vilka är vi?</h1></strong>
    <p>Vi är ett gäng energifyllda arbetsmyror som är lika förtjusta i Adobe-programmen och kamerateknik, som gröna siffror och tilltagande grafer i diverse marknadsautomation- och annonseringsverktyg. Hur kommer sig denna kombination? Jo för vi har utbildat oss till ingenjörer eller ekonomer, parallellt med att en hobby blev till en sysselsättning som blev till en heltidstjänst. 
    <br/>
Vi har fått det bästa av två världar som vi sedan integrerat: Resultatorienterad business rörlig bild.</p>
    </div>
  </section>
<section class="about-second-section">
  <div class="container pb-5">
  <?php if( have_rows('about_us') ):
    while ( have_rows('about_us') ) : the_row(); ?>
      <div class="row pt-5">
        <div class="col-lg-5 col-sm-12 about-us-img" style="background-image:url('<?php the_sub_field('about_us_image'); ?>')">
            <!-- <img src="<?php the_sub_field('about_us_image'); ?>"/> -->
        </div>
        <div class="col-lg-7 col-sm-12 d-flex align-items-center">
            <div class="about-first-container pt-3">
                <?php the_sub_field('about_us_text'); ?>
            </div>
        </div>
      </div>
      <?php endwhile;	else :endif; ?>
    </div>
</section>
  
 
</div><!-- #primary -->

<?php get_footer();

