<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>
			<h1 class="centered-text "><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('front-page'); ?>>

				<?php the_content(); ?>

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

		<?php get_template_part('modules/front-page-loop'); ?>


		</section>
		<!-- /section -->

    <?php get_template_part('modules/signup'); ?>

	</main>



<?php get_footer(); ?>
