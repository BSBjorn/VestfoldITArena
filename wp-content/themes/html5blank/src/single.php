<?php get_header(); ?>

	<main role="main" aria-label="Content">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h5 class="uppercase red"><?php the_title(); ?></h5>
			<?php // html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

			<p><span class="date">
				<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
				<i class="fa fa-clock-o" aria-hidden="true"> </i> <?php the_date('d.m.y'); ?>
				</time>
			</span></p>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1 class="centered-text uppercase post-title">
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<!-- post details -->

			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>




		</article>
		<!-- /article -->

	<?php endwhile; ?>
	<div class="pagination Grid Grid--1of2">

		<div class="Grid-cell next-post">
			<?php next_post_link('%link', '<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Neste'); ?>
		</div>

		<div class="Grid-cell previous-post">
			<?php previous_post_link('%link', 'Tidligere <i class="fa fa-long-arrow-right" aria-hidden="true"></i>'); ?>
		</div>
	</div>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
<?php get_footer(); ?>
