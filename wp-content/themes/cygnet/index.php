<?php get_header(); ?>


	<section class="pad-v">
		<div class="container">

			<div class="row">
				<div class="span8 offset2 span-l-10 offset-l-1 span-m-12 offset-m-0">

					<div class="blog-excerpt-list">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="blog-item">

							<ul class="blog-meta">
								<li><span class="font-north"><?php the_time('F j, Y'); ?></span> <span>by</span> <span class="font-regular"><?php the_author(); ?></span></li>
								<li><span>filed under:</span> <?php echo get_the_category_list(); ?></li>
								<li><a href="<?php the_permalink(); ?>#comments" class="comments"><?php comments_number(); ?></a></li>
							</ul>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-excerpt-large' ); ?></a>
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn btn--secondary btn--block">Read More</a>
						</div>

						<?php endwhile; endif; ?>

						<ul class="pagination">
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
			</div>

		</div>
	</section>


<?php get_footer(); ?>
