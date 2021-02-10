<?php 
/*
* Template Name: Services
*/
get_header(); ?>
<div id="primary" class="content">

  <div class="tjanster-hero-image" style="background-color:#<? the_field('background-color-hero')?>;>
    <div class="container text-center">
      <div>
        
        <div class="flex-container" style="color:white;">
          <div class="row d-block">
            <div class="flex-item"><? the_field('service_hero_text')?></div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
  <img style="width:100%;     background-color: #212121;
    " src="<?php echo get_template_directory_uri(); ?>/img/white-wave.webp" />  

<section class="services-first-section">
 
  <div class="container pb-5">
  <?php if( have_rows('services_first_container') ):
        while ( have_rows('services_first_container') ) : the_row(); ?>
      <div class="row fade-x three-part-info" data-delighter="start:0.90;">
        <div class="col-lg-3 col-sm-12">
          <div class="black-box">
          <?php the_sub_field('services_first_numbers'); ?>
          </div>
        </div>
        <div class="col-lg-9 col-sm-12">
          <div class="services-first-container">
          
          <?php the_sub_field('services_first_text'); ?>
      
          </div>
        </div>
      </div>
      <?php endwhile;	else :endif; ?>

</section>
  <section class="services-second-section pb-5">
    <div class="container-fluid">
    <h1 style="font-size:3em;" class="pl-3"><strong>Våra styrkor</h1></strong>
    <?php if( have_rows('services_repeater') ):
        while ( have_rows('services_repeater') ) : the_row(); ?>
    <div class="w-100 d-flex case-container ">
      <div class="px-0 col-lg-2 col-sm-12 fade-y" data-delighter="start:0.90;">
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
    <div class="w-100 d-flex ml-0 row case-container pt-4">
      <div class="col-lg-6 col-sm-12 fade-y" data-delighter="start:0.90;">
        <div class="w-100 bg-shadow">
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