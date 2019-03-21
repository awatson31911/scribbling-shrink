<?php
/*
Template Name: LOVE
*/

get_header(); ?>

	<div id="primary" class="fullwidth">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


