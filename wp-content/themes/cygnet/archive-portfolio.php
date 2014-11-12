<?php get_header(); ?>


  <section class="bg-gray pad-v">
    <div class="container">

			<?php $post_count = 1; if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $date = DateTime::createFromFormat('Ymd', get_field('article_publish_date')); ?>

      <?php if ($post_count % 3 == 1): ?>
       <div class="row pad-b--30">
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
						<a href="<?php the_field('link_to_article'); ?>" class="btn btn--block">Read in Full</a>
        	</div>
        </div>

      <?php if ($post_count % 3 == 0): ?>
      </div>
      <?php endif; ?>

    	<?php $post_count++; endwhile; endif; ?>

    	<?php $post_count = $post_count - 1 ; if (0 != $post_count % 3): ?>
      </div>
      <?php endif; ?>

    </div>
  </section>


<?php get_footer(); ?>