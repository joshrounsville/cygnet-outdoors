<?php get_header(); ?>


	<section class="pad-v">
		<div class="container">

			<div class="row">
				<div class="span8 offset2 span-l-10 offset-l-1 span-m-12 offset-m-0">

					<div class="blog-post">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="blog-item">
							<ul class="blog-meta">
								<li><span class="font-north"><?php the_time('F j, Y'); ?></span> <span>by</span> <span class="font-regular"><?php the_author(); ?></span></li>
								<li><span>filed under:</span> <?php echo get_the_category_list(); ?></li>
								<li><a href="#comments" class="comments scroll-link"><?php comments_number(); ?></a></li>
							</ul>
							<?php if( get_field('slider') ): ?>
								<div class="post-slider-img-wrap"></div>
								<div class="slider post-slider">
								<?php while( has_sub_field('slider') ): ?>
								<?php
									$image = get_sub_field('slide');
									$size = 'blog-excerpt-large';
									$thumb = $image['sizes'][ $size ];
								?>
									<div class="item"><img src="<?php echo $thumb; ?>" alt="Cygnet Outdoors"></div>
								<?php endwhile; ?>
							</div>
							<?php else : ?>
								<?php the_post_thumbnail( 'blog-excerpt-large' ); ?>
							<?php endif; ?>
							<h1 class="text-center"><?php the_title(); ?></h1>
							<div class="post">
								<?php the_content(); ?>
							</div>
							<ul class="blog-interact-single">
								<li><a href="#" class="blog-comments-link hide-show-link" data-target="comment-respond">Comment</a></li>
								<li><i class="icon icon-x"></i></li>
								<li><a href="#" class="share-hide-show hide-show-link" data-target="share-wrap">Share</a></li>
							</ul>
							<div class="share-wrap">
								<div id="share" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>"></div>
							</div>
							<ul class="blog-meta-single">
								<li><?php echo get_the_category_list(); ?></li>
							</ul>

							<?php comments_template(); ?>

 						</div>
						<?php endwhile; endif; ?>

						<p class="inline-border inline-border-thick"><i class="icon icon-swan-black"></i></p>
					</div>

				</div>
			</div>

		</div>
	</section>


<?php get_footer(); ?>
