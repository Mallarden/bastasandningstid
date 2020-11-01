<?php 
/*
* Template Name: Case
*/
get_header(); ?>
<div id="primary" class="content blog-page">
<div class="case-hero-image" style="background-color:#<? the_field('background_color_hero')?>; background-image:url('<?php the_sub_field('background-image-hero'); ?>;')">
    <div class="container text-center">
      <div>
        <div class="flex-container">
          <div class="row d-block">
            <div class="flex-item">
              <? the_field('case_hero_text')?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <div class="container py-5">
    <div class="case-grid">
      <?php echo do_shortcode("[pt_view id=cafbcbbf0w]"); ?>
    </div>
  </div>
  <svg>
        <clipPath id="wave" clipPathUnits="objectBoundingBox">
          <path class="st0" d="M1,0c0,0-0.3,0.1-0.5,0.1S0.3,0,0,0.1V1h1L1,0z"/>
        </clipPath>
</svg>
</div><!-- #primary -->

<?php get_footer();