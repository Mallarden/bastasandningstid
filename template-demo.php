<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="blogg-hero-image skew-bg position-relative">
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
            <h1 class="flex-item"><?php the_title(); ?></h1>
            <p class="flex-item">Tillsammans tittar vi på vad för rörligt content ni ska utnyttja och hur detta ska
              utformas på bästa sätt.
              Sedan producerar vi det. Helt för egen maskin. Tillsist stöttar vi publicerings- och annonseringsarbetet
              så
              mycket det behövs. </p>
            <h4 class="flex-item">En enkel formula där alla delar integreras för att kunna erhålla så bra resultat som
              möjligt.</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
				<div class="container project-content">
				<?php the_content(); ?>
				</div>
				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
