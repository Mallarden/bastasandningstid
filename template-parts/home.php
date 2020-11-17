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
    <span id="hero-word-switcher" style="width: 183px;" class="in ml-1">
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
        <div class="col-lg-4 col-sm-12 fade-x" data-delighter="start:0.92;">
          <div class="vara-omraden">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.Strategi-01.mp4" width="100%" autoplay="true" loop="true"></video>
            <h3 class="font-weight-bold">Foto</h3>
            <p>Allt från strategi, till konceptualisering & planering av produktion</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12 fade-y middle-animation" data-delighter="start:0.93;">
          <div class="vara-omraden">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.Film-01.mp4" width="100%" autoplay="true" loop="true"></video>
            <!-- <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.Film-01.mp4" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/animation-img.png" loop="" preload="" playsinline="true" webkit-playsinline="true" muted="" width="100%" height="auto" alt=""></video> -->

            <h3 class="font-weight-bold">Produktion</h3>
            <p>Filmproduktion och skapande av content i alla dess former</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12 fade-x" data-delighter="start:0.95;">
          <div class="vara-omraden">
            <video class="myvideos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.Annons-01.mp4" width="100%" autoplay="true" loop="true"></video>
            <h3 class="font-weight-bold">Distribution</h3>
            <p>Publicering och annonsering mot alla digitala kanaler</p>
          </div>
        </div>
        </div>
      </div>
    </section>
    <section class="third-section">
    <h1 class=""><strong>Urval av case</strong></h1>
    <div class="third-section-box"></div>
    <div class="container">
    <div class="w-100 row ml-0 case-container pt-4">
    <?php if( have_rows('sektion_2') ):
        while ( have_rows('sektion_2') ) : the_row(); ?>
    
      <div class="col-lg-5 offset-lg-1 px-0 col-sm-12 project-item fade-y" data-delighter="start:0.90;">
        <div class="clients-container w-100 bg-shadow">
          <img src="<?php the_sub_field('section-2-image'); ?>">
            <div class="hover-this-project">
              <div class="project-box-container">
              <!-- <img class="projects-logga mt-5 mb-2" src="<?php the_sub_field('section_2_logga'); ?>"> -->
              <p><?php the_sub_field('section_2_infotext'); ?></p>
              <a href="<?php the_sub_field('section_2_ahref'); ?>">
                <button type="button" class="btn btn-primary">Läs mer</button>
              </a>
              </div>
          </div>
        </div>
      </div>
    <?php endwhile;	else :endif; ?>
    </div>
     </div>
    </section>
    <section class="fourth-section">
      <div class="section-wrapper fourth-section-content">
        <h2 class="fade-y" data-delighter="start:0.96;"><strong>Väx tillsammans med oss precis som dess företag gör.</strong></h2>
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
  <!-- Carousel Start below -->
  <div id="carousel1" class="carousel slide testimonial-style fade-y" data-delighter="start:0.90;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="carousel-caption testimonial-caption-style">
        <div class="carousel-container">
          <p>”Northmire och Jakob hjälper oss med vår digitala marknadsföring, allt från filmproduktion till framtagande av olika typer av innehåll till våra kampanjer. Jakob är snabb, effektiv och har bra kreativ höjd och levererar alltid hög kvalitet. Rekommenderar starkt Jakob till alla bolag som behöver få hjälp med sin digitala marknadsföring på ett kostnadseffektivt sätt!”</p>
          </div>
          <div class="d-flex justify-content-center pt-3 carousel-info-container" style="">
            <img style="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kund.png" />
            <p class="testimonial-authors">Person 1</p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="carousel-caption testimonial-caption-style">
        <div class="carousel-container">
          <p>”Northmire och Jakob hjälper oss med vår digitala marknadsföring, allt från filmproduktion till framtagande av olika typer av innehåll till våra kampanjer. Jakob är snabb, effektiv och har bra kreativ höjd och levererar alltid hög kvalitet. Rekommenderar starkt Jakob till alla bolag som behöver få hjälp med sin digitala marknadsföring på ett kostnadseffektivt sätt!”</p>
          </div>
          <div class="d-flex justify-content-center pt-3 carousel-info-container" style="">
            <img style="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kund.png" />
            <p class="testimonial-authors">Person 1</p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="carousel-caption testimonial-caption-style">
        <div class="carousel-container">
          <p>”Northmire och Jakob hjälper oss med vår digitala marknadsföring, allt från filmproduktion till framtagande av olika typer av innehåll till våra kampanjer. Jakob är snabb, effektiv och har bra kreativ höjd och levererar alltid hög kvalitet. Rekommenderar starkt Jakob till alla bolag som behöver få hjälp med sin digitala marknadsföring på ett kostnadseffektivt sätt!”</p>
          </div>
          <div class="d-flex justify-content-center pt-3 carousel-info-container" style="">
            <img style="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/kund.png" />
            <p class="testimonial-authors">Person 1</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls -->

    <a class="left carousel-control" href="#carousel1" data-slide="prev"> <span class="fas fa-arrow-left"></span> </a>
    <a class="right carousel-control" href="#carousel1" data-slide="next"> <span class="fas fa-arrow-right"></span> </a>
  </div>
      
    </section>
    <!-- END OF TESTIMONIALS -->
    <?php if( have_rows('sektion_4') ):
              while ( have_rows('sektion_4') ) : the_row(); ?>
   
    <svg>
        <clipPath id="wave" clipPathUnits="objectBoundingBox">
          <path class="st0" d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z"/>
        </clipPath>
</svg>
<?php endwhile;	else :endif; ?> 
  </section>

</div><!-- #primary -->

<?php get_footer();
