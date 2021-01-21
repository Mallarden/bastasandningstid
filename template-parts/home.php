<?php 
/*
* Template Name: Home
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="hero-image">  
  <video class="desktop-hero" autoplay playsinline autoplay muted loop>
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hemsida-banner04.mp4" type="video/mp4" />
</video>
<video class="mobile-hero" autoplay playsinline autoplay muted loop>
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hemsida-bannermobil.mp4" type="video/mp4" />
</video>
</div>

  <div class="hero-text-container">
    <div class="hero-title">
    </div>
  </div>
  <img class="first-wave" style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/white-wave.webp" />  

  <div class="section-start">

    <section class="first-section pt-0">
      <div class="arrow-scroll">
        <div class="scroller"></div>
      </div>
      <div class="section-wrapper row">

        <?php if( have_rows('sektion_1') ):
							while ( have_rows('sektion_1') ) : the_row(); ?>
        <div class="col-sm-12 col-lg-12 fade-y" style="max-width:1000px;" data-delighter="start:0.90;">
          <div>
            <? the_sub_field('sektion_1_text');?>
          </div>
        </div>
        <?php endwhile;	else :endif; ?>
      </div>
    </section>
    <section class="second-section">
    <div class="second-section-box">    
    <h1 class="text-center"><strong>Våra områden</strong></h1>
</div>
      <div class="section-wrapper row">
      <div class="row our-expertise">
        <div class="col-lg-4 col-sm-12 fade-x" data-delighter="start:0.92;">
          <div class="vara-omraden">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.Strategi-01.mp4" width="100%" autoplay="true" loop="true"></video>
            <h3 class="font-weight-bold pb-0 mb-1">Foto</h3>
            <p>Allt från strategi, till konceptualisering & planering av produktion</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12 fade-y middle-animation" data-delighter="start:0.93;">
          <div class="vara-omraden">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.Film-01.mp4" width="100%" autoplay="true" loop="true"></video>
            <!-- <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.Film-01.mp4" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video> -->

            <h3 class="font-weight-bold pb-0 mb-1">Produktion</h3>
            <p>Filmproduktion och skapande av content i alla dess former</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12 fade-x pb-0" data-delighter="start:0.95;">
          <div class="vara-omraden">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.Annons-01.mp4" width="100%" autoplay="true" loop="true"></video>
            <h3 class="font-weight-bold pb-0 mb-1">Distribution</h3>
            <p>Publicering och annonsering mot alla digitala kanaler</p>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class="third-section">
      <div class="third-section-box">
    <div class="float-box">
      <h1 class="" style="font-size:40px;"><strong>Projekt. Kampanjer. Samarbeten.</strong></h1>
    <p style="font-style: italic; font-size:18px;">Det börjar med ett, som blir till två, som blir till samarbete, som leder till livslång kärlek!</p>
    <br/><br/>
    <p>[ps2id id='case' target=''/]</p>
    </div>
    </div>
    <div class="container">
    <?php echo do_shortcode("[robo-gallery id='448']"); ?>
     </div>
    </section>
  
  <!-- <div class="wave-bottom"></div> -->
  <section class="fifth-section pt-5">
    <div class="pb-0">
              <h1 class="fade-y text-center" data-delighter="start:0.96;"><strong>Några fina ord.</strong></h1>
    <!-- TESTIMONIALS -->
<section class="testimonials">
  <div>
    <img src="https://i.imgur.com/gZ5HY0U.png" class="img-responsive quote-image fade-y" data-delighter="start:0.90;"">
  </div>
  <br/>
  <?php echo do_shortcode('[gs_logo title="yes" posts="15" order="ASC" logo_cat="testimonials" inf_loop="1" mode="horizontal" speed="1000"]
'); ?>

      
    </section>
    <!-- END OF TESTIMONIALS -->
    <?php if( have_rows('sektion_4') ):
              while ( have_rows('sektion_4') ) : the_row(); ?>
   
    <!-- <svg>
        <clipPath id="wave" clipPathUnits="objectBoundingBox">
          <path class="st0" d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z"/>
        </clipPath>
</svg> -->
<?php endwhile;	else :endif; ?> 
<img style="width:100%;" src="<?php echo get_template_directory_uri(); ?>/img/test.webp" />  
</section>
  <section class="fourth-section pt-0">
      <div class="section-wrapper fourth-section-content">
        <h2 style="font-size:40px;" class="fade-y" data-delighter="start:0.96;"><strong>Väx tillsammans med oss precis som dess verksamheter gör.</strong></h2>
        <? the_field('logo-slider') ?>
          <!-- <?php if( have_rows('sektion_3') ):
							while ( have_rows('sektion_3') ) : the_row(); ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="d-flex pt-2" style="flex-flow: no-wrap;">
              <?php if( have_rows('direct_impact') ):
							while ( have_rows('direct_impact') ) : the_row(); ?>
              <div class="col-md-4 col-sm-4 col-xs-4 fade-y" style="" data-delighter="start:0.92;">
                <img class="mt-3 d-flex" style="margin: 0 auto;" src="<? the_sub_field('direct_impact_bild');?>" />
              </div>
              <?php endwhile;	else :endif; ?>
            </div>
          </div>
          <?php endwhile;	else :endif; ?> -->
        </div>
    

  </section>
</div><!-- #primary -->

<?php get_footer();
