<?php get_header(); ?>

  <section class="bg-gray pad-v">
    <div class="container">

      <?php
        $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query('showposts=6&post_type=portfolio'.'&paged='.$paged);
      ?>

			<?php $post_count = 1; if ($wp_query->have_posts()): while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<?php $date = DateTime::createFromFormat('Ymd', get_field('article_publish_date')); ?>

      <?php if ($post_count % 3 == 1): ?>
       <div class="row pad-b--30 pad-b-s-0">
       <?php endif; ?>

        <div class="span4">
        	<div class="portfolio-wrap">
        		<div class="img-wrap">
							<?php the_post_thumbnail('portfolio-background'); ?>
        		</div>
						<div class="portfolio-content">
							<h2 class="h1"><?php the_title(); ?></h2>
							<ul class="portfolio-meta">
								<li><span>Source</span> <?php the_field('article_source'); ?></li>
								<li><span>Published On</span> <time datetime="<?php echo $date->format('Y-m-d'); ?>"><?php echo $date->format('F j, Y'); ?></time></li>
							</ul>
						</div>
						<div class="portfolio-hover-content">
							<h4><?php the_title(); ?></h4>
							<div class="portfolio-excerpt_wrap">
								<?php the_field('article_excerpt'); ?>
							</div>
							<ul class="portfolio-meta">
								<li><span>Source</span> <?php the_field('article_source'); ?></li>
								<li><span>Published On</span> <time datetime="<?php echo $date->format('Y-m-d'); ?>"><?php echo $date->format('F j, Y'); ?></time></li>
							</ul>
						</div>
						<a href="<?php the_field('link_to_article'); ?>" class="btn btn--block" target="_blank">Read in Full</a>
        	</div>
        </div>

      <?php if ($post_count % 3 == 0): ?>
      </div>
      <?php endif; ?>

    	<?php $post_count++; endwhile; endif; ?>

    	<?php $post_count = $post_count - 1 ; if (0 != $post_count % 3): ?>
      </div>
      <?php endif; ?>

      <?php if ( get_previous_posts_link() || get_next_posts_link() ) : ?>
      <div class="row pad-t--20 pad-b--20">
        <div class="span12">
          <ul class="pagination pagination-portfolio">
            <?php if ( get_previous_posts_link() ) : ?>
              <li class="previous">
                <?php previous_posts_link( '<i class="icon icon-nav-arrow-left-white"></i> Previous' ); ?>
              </li>
            <?php endif; ?>
            <?php if ( get_next_posts_link() ) : ?>
              <li class="next">
                <?php next_posts_link( 'Next <i class="icon icon-nav-arrow-right-white"></i>' ); ?>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>

      <?php
        $wp_query = null;
        $wp_query = $temp;
      ?>

    </div>
  </section>


<?php get_footer(); ?>