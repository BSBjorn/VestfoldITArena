<?php /* Template Name: Member Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

        <?php if(have_rows('members') ) : ?>

          <div class="members">
            <?php while(have_rows('members')) : the_row();
              //Vars
              $name = get_sub_field('member_name');
              $email = get_sub_field('member_epost');
              $url = get_sub_field('member_url');
              $tlf = get_sub_field('kontak_telefon');
              $logo = get_sub_field('member_logo');
              $size = 'full';
							$description = get_sub_field('beskrivelse');
            ?>


              <div class="member">

                <?php echo wp_get_attachment_image($logo, $size,'', array('class'=>'')); ?>
                <h2><?php echo $name; ?></h2>
                <div class="member-info">
                  <a href="mailto:<?php echo $email; ?>"> <i class="fa fa-envelope"></i> <?php echo $email; ?></a><br/>
                  <a href="<?php echo $url; ?>"> <i class="fa fa-globe"></i> <?php echo $url; ?></a><br/>
                  <a href="tel:<?php echo $tlf;?>"><i class="fa fa-phone"></i> <?php echo $tlf; ?></a>
                </div>
								<?php if ($description) : ?>
									<div class="member-description">
									<?php echo $description; ?>
								</div>
								<?php endif; ?>
              </div>


            <?php endwhile; ?>
          </div>
        <?php endif; ?>



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
