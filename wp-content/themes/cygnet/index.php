<?php get_header(); ?>


	<section class="pad-v">
		<div class="container">

			<div class="row">
				<div class="span8">

					<div class="blog-excerpt-list">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="blog-item">

							<ul class="blog-meta">
								<li><a href="#"><?php the_time('F j, Y'); ?></a> <span>by</span> <a href="#" class="font-regular"><?php the_author(); ?></a></a></li>
								<li><span>Filed Under:</span> <?php echo get_the_category_list(); ?></li>
							</ul>
							<?php the_post_thumbnail( 'blog-excerpt-large' ); ?>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn--secondary btn--block">Read More</a>
						</div>

						<?php endwhile; endif; ?>

						<ul class="blog-pagination">
							<?php if ( get_previous_posts_link() ) : ?>
								<li class="previous">
									<?php previous_posts_link( '<i class="icon icon-nav-arrow-left"></i> Previous Page' ); ?>
								</li>
							<?php endif; ?>
							<?php if ( get_next_posts_link() ) : ?>
								<li class="next">
									<?php next_posts_link( 'Next Page <i class="icon icon-nav-arrow-right"></i>' ); ?>
								</li>
							<?php endif; ?>
						</ul>

					</div>

				</div>
				<div class="span4">
					<div class="bg-white">
						<h4>Sidebar</h4>
						<ul>
							<li><a href="#">Lorem Ipsum set Dolor</a></li>
							<li><a href="#">Lorem Ipsum set Dolor</a></li>
							<li><a href="#">Lorem Ipsum set Dolor</a></li>
							<li><a href="#">Lorem Ipsum set Dolor</a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</section>


<?php get_footer(); ?>
