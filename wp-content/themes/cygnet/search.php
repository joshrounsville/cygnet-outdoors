<?php get_header(); ?>


	<section>
		<div class="container">

			<div class="row">
				<div class="span12">
					<h2><?php _e( 'Search Results for:', 'bonestheme' ); ?> <?php echo esc_attr(get_search_query()); ?></h2>
				</div>
			</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="span12">

					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

				</div>
			</div>
			<?php endwhile; ?>

			<?php else : ?>

			<div class="row">
				<div class="span12">
					<h2>Sorry, no results.</h2>
				</div>
			</div>

			<?php endif; ?>

		</div>
	</section>


<?php get_footer(); ?>