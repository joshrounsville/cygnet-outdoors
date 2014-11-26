<?php get_header(); ?>

  <section class="bg-gray bg-beat pad-v">
    <div class="container">

      <div class="row">
        <div class="span10 offset1 span-m-12 offset-m-0">

          <div class="bg-gray-dark bg-footprints pad--2x text-off-white font-large line-height pull-up relative">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<h3 class="pad-b--20"><?php the_title(); ?></h3>
							<?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>

        </div>
      </div>

    </div>
  </section>




<?php get_footer(); ?>