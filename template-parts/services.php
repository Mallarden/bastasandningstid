<?php 
/*
* Template Name: Services
*/
get_header(); ?>
<div id="primary" class="content">

  <div class="tjanster-hero-image" style="background-color:#<? the_field('background-color-hero')?>; background-image:url('<?php the_sub_field('background-image-hero'); ?>;')">
    <div class="container text-center">
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
            <div class="flex-item"><? the_field('service_hero_text')?></div>
            <!-- <p class="flex-item">Tillsammans tittar vi på vad för rörligt content ni ska utnyttja och hur detta ska
              utformas på bästa sätt.
              Sedan producerar vi det. Helt för egen maskin. Tillsist stöttar vi publicerings- och annonseringsarbetet
              så
              mycket det behövs. </p>
            <h4 class="flex-item">En enkel formula där alla delar integreras för att kunna erhålla så bra resultat som
              möjligt.</h4> -->
          </div>
        </div>
      </div>
    </div>
  </div>
<section class="wave-test services-first-section">
  <svg>
    <clipPath id="wave" clipPathUnits="objectBoundingBox">
      <path class="st0" d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z"/>
    </clipPath>
  </svg>
  <div class="container pb-5">
  <?php if( have_rows('services_first_container') ):
        while ( have_rows('services_first_container') ) : the_row(); ?>
      <div class="row">
        <div class="col-3">
          <div class="black-box">
          <?php the_sub_field('services_first_numbers'); ?>
          </div>
        </div>
        <div class="col-9">
          <div class="services-first-container">
          
          <?php the_sub_field('services_first_text'); ?>
            <!-- <div class="service-first-title"><h1>Strategi- & förarbete</h1></div>
            <div class="service-first-text"><p>Allting börjar med ett bra förarbete för att förstå  målgrupp till önskat resultat. Därefter tittar vi på allt från vad som ska produceras till kanaler och parametrar för efterarbetet. 
Det må vara viktigt att kunna hantera färg och form, men i slutändan handlar det om att förbättra siffror och sälj.</p>
            </div> -->
          </div>
        </div>
      </div>
      <?php endwhile;	else :endif; ?>
      <!-- <div class="row" style="flex-direction: row-reverse;">
        <div class="col-3"><div class="black-box">2</div></div>
        <div class="col-9">
          <div class="services-first-container">
          <div class="service-first-title"><h1>Filmproduktion
</h1></div>
            <div class="service-first-text"><p>Vi projektleder, filmar, klipper och producerar all form av rörligt content med kunskap inom allt från klassisk videoproduktion till animation och 3D-grafik. 

Vi sitter inne på allt från drönare till egen foto- och inspelningsstudio för att kunna ta oss an alla typer av uppdrag och effektivt kunna producera förstklassigt content.</p></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-3">
          <div class="black-box">3</div></div>
        <div class="col-9">
          <div class="services-first-container">
          <div class="service-first-title"><h1>Annonsering & efterarbete
</h1></div>
            <div class="service-first-text"><p>För att det content som produceras ska få den genomslagskraft som önskas krävs att det vävs samman med optimal och anpassad annonsering. 

Vi arbetar med annonsering mot alla digitala plattformar där vi analyserar arbetet löpande och förbättrar både parametrar och innehållet för att skapa bästa möjliga resultat.</p></div>
          </div>
        </div>
      </div>
    </div> -->
</section>
  <section class="services-second-section pb-5">
    <div class="container-fluid">
    <h1 class=""><strong>Våra styrkor</h1></strong>
    <?php if( have_rows('services_repeater') ):
        while ( have_rows('services_repeater') ) : the_row(); ?>
    <div class="w-100 d-flex case-container">
      <div class="col-lg-2 col-sm-12 fade-y" data-delighter="start:0.90;">
        <div class="clients-container w-100">
          <!-- style="background-image:url('<?php the_sub_field('services'); ?>')"> -->
          <img src="<?php the_sub_field('services'); ?>">
        </div>
      </div>
      <div class="col-lg-10 col-sm-12 fade-y clients-text-container" data-delighter="start:0.90;">
        <div>
          <p><?php the_sub_field('case_text'); ?></p>
        </div>
      </div>
    </div>
    <?php endwhile;	else :endif; ?>
    </div>
  </section>
  <section class="services-third-section">
    <div class="container pt-5">
      <h1 class="text-center font-weight-bold">Vår studio</h1>
      <p class="text-center">I samma lokal där vi klipper och klistrar har vi även vår inspelningsstudio som vi använder för projekt. Med mycket belysning och diverse olika bakgrunder kan vi skapa precis den miljö som önskas.</p>
    </div>
    <div class="container">
    <?php if( have_rows('services_studio_repeater') ):
        while ( have_rows('services_studio_repeater') ) : the_row(); ?>
    <div class="w-100 d-flex case-container pt-4">
      <div class="col-lg-6 col-sm-12 fade-y" data-delighter="start:0.90;">
        <div class="clients-container w-100 bg-shadow">
          <img src="<?php the_sub_field('studio_image'); ?>">
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 fade-y" data-delighter="start:0.90;">
        <div class="clients-container w-100">
        </div>
      </div>
    </div>
    <?php endwhile;	else :endif; ?>
    </div>
  </section>
</div><!-- #primary -->

<?php get_footer();