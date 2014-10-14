<?php get_header(); ?>


	<section>
		<div class="container">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="span12">

					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>

				</div>
			</div>
			<?php endwhile; endif; ?>

		</div>
	</section>


<?php get_footer(); ?>