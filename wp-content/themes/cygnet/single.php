<?php get_header(); ?>


	<section class="bg-gray">
		<div class="container">

			<div class="row">
				<div class="span8 offset2">

					<div class="blog-wrap">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="blog-excerpt">

							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>

						<?php endwhile; endif; ?>

					</div>

				</div>
			</div>

		</div>
	</section>


<?php get_footer(); ?>
