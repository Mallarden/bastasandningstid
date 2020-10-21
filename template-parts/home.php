<?php 
/*
* Template Name: Home
*/
get_header(); ?>
<div id="primary" class="content">
  <div class="hero-image">  
  <video autoplay playsinline autoplay muted loop>
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/img/Hemsida-banner04.mp4" type="video/mp4" />
</video>
<div class="text-animation">
    <span>
    Content som:
    </span>
    <span id="hero-word-switcher" style="width: 183px;" class="in">
        <strong class="" data-oid="0" data-width="">Värmer</strong>
        <strong data-oid="1" data-width="" class="">Flyger</strong>
        <strong data-oid="2" data-width="" class="">Illustrerar</strong>
        <strong data-oid="3" data-width="" class="">Samverkar</strong>
        <strong data-oid="4" data-width="" class="">Utmanar</strong>
        <strong data-oid="5" data-width="" class="">Sänds live</strong>
        <strong data-oid="6" data-width="" class="">Sprids</strong>
        <strong data-oid="7" data-width="" class="">Animeras</strong>
        <strong data-oid="8" data-width="" class="">Leker</strong>
        <strong data-oid="9" data-width="" class="">Berör</strong>
        <strong data-oid="10" data-width="" class="">Poppar</strong>
        <strong data-oid="11" data-width="" class="">Trollar</strong>
        <strong data-oid="12" data-width="" class="">Utbildar</strong>
        <strong data-oid="13" data-width="" class="active">Säljer</strong>
    </span>
    </div>
</div>

  <div class="hero-text-container">
    <div class="hero-title">
    </div>
  </div>
  <div class="section-start">
    <section class="first-section">
      <div class="arrow-scroll">
        <div class="scroller"></div>
      </div>
      <div class="section-wrapper row">
        <?php if( have_rows('sektion_1') ):
							while ( have_rows('sektion_1') ) : the_row(); ?>
        <div class="col-sm-12 col-lg-12 fade-y" data-delighter="start:0.90;">
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
      <div class="section-wrapper row mt-5">
      <div class="row our-expertise">
        <div class="col-lg-4 col-sm-12 fade-y" data-delighter="start:0.95;">
          <div class="clients-container">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/animation.mov" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video>
            <h3 class="font-weight-bold">Foto</h3>
            <p>Allt från strategi, till konceptualisering & planering av produktion</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12 fade-y middle-animation" data-delighter="sta.95;">
          <div class="clients-container">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/animation.mov" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video>
            <h3 class="font-weight-bold">Produktion</h3>
            <p>Allt från strategi, till konceptualisering & planering av produktion</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12 fade-y" data-delighter="start:0.95;">
          <div class="clients-container">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/animation.mov" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video>
            <h3 class="font-weight-bold">Distribution</h3>
            <p>Allt från strategi, till konceptualisering & planering av produktion</p>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class="third-section">
    <h1 class=""><strong>Projects</strong></h1>
    <div class="third-section-box">    
      </div>
      <div class="container">
      <div class="row projects-container">
    <?php if( have_rows('sektion_2') ):
							while ( have_rows('sektion_2') ) : the_row(); ?>
        <div class="col-lg-6 col-sm-6 p-0 fade-y" data-delighter="start:0.95;">
          <div class="clients-container" style="background-image:url('<?php the_sub_field('section-2-image-left'); ?>')">
          <p>test</p>
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 p-0 fade-y" data-delighter="start:0.90;">
        <div class="clients-container" style="background-image:url('<?php the_sub_field('section-2-image-center'); ?>')">
          <p>test</p>
          </div>
        </div>
        <?php endwhile;	else :endif; ?>
        </div>
        </div>
    </section>
    <section class="fourth-section">
      <div class="section-wrapper fourth-section-content">
        <h2 class="fade-y" data-delighter="start:0.96;"><strong>Väx tillsammans med oss!</strong></h2>
          <?php if( have_rows('sektion_3') ):
							while ( have_rows('sektion_3') ) : the_row(); ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="d-flex pt-2" style="flex-flow: no-wrap;">
              <?php if( have_rows('direct_impact') ):
							while ( have_rows('direct_impact') ) : the_row(); ?>
              <div class="col col-lg-2 col-md-2 col-sm-2 fade-y" style="" data-delighter="start:0.92;">
                <img class="mt-3 d-flex" style="margin: 0 auto;" src="<? the_sub_field('direct_impact_bild');?>" />
              </div>
              <?php endwhile;	else :endif; ?>
            </div>
          </div>
          <?php endwhile;	else :endif; ?>
        </div>
      </div>

  </section>
  <div class="wave-bottom"></div>
  <section class="fifth-section">
    <div class="section-wrapper">
      <?php if( have_rows('sektion_4') ):
              while ( have_rows('sektion_4') ) : the_row(); ?>
               <div class="row">
      <div class="citat-wrapper" style="width:100%;" data-delighter="start:0.90;">
        <div class="col-sm-12 col-lg-4 pr-0 fade-y">
          <div class="our-team-img-info">
            <div class="col-xs-12 col-sm-12 fade-y personbild pt-5"
              style="background-image:url('<?php the_sub_field('personbild'); ?>')"></div>
            <div class="col-xs-12 col-sm-12 fade-y pt-4" style="max-width: max-content;
    margin: 0 auto; text-align:center;">
              <p><?php the_sub_field('personinfo');?>
            </div>
            </p>
          </div>
        </div>
        <div class="col-md-12 col-lg-8 col-sm-12 fade-y citat-text">
          <div class="pt-2"><?php the_sub_field('personbeskrivning')?></div>
        </div>
      </div>
    </div>
    <hr/>
    <?php endwhile;	else :endif; ?>
    </div>
    <svg>
        <clipPath id="wave" clipPathUnits="objectBoundingBox">
          <path class="st0" d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z"/>
        </clipPath>
</svg>
  </section>

</div><!-- #primary -->

<?php get_footer();