<div class="Grid Grid--1of2 small-Grid--full Grid--guttersLg">

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="Grid-cell">
	<!-- article -->

	<article id="post-<?php the_ID(); ?>" <?php post_class('loop-post'); ?>>
		<!-- post title -->
		<h6 class="loop-post-title uppercase">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		</h6>

		 <div class="loop-post-excerpt"><?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?></div>
		<!-- /post title -->
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('post-thumb', array("class"=>"loop-thumb")); // Declare pixel size you need inside the array ?>
			</a>

		<?php else : ?>
			<img class="loop-thumb" src="https://source.unsplash.com/random/500x210">
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post details -->
		<p><span class="date">
			<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
			<i class="fa fa-clock-o" aria-hidden="true"> </i> <?php the_date('d.m.y'); ?>
			</time>
		</span>
		<a class="view-article alignright nomargin" href="<?php the_permalink(); ?>"><?php echo __('View Article', 'html5blank'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</a>
	</p>

	</article>
	<!-- /article -->
</div>

<?php endwhile; ?>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

</div>
