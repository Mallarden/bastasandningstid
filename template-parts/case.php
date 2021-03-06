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
     
      <!-- <?php echo do_shortcode("[pt_view id=92c8a52vgl]"); ?>  -->
    </div>
  </div>
</div><!-- #primary -->

<?php get_footer();