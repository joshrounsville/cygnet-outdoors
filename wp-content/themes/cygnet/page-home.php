<?php
/*
 Template Name: Home Page
*/
?>


<?php get_header(); ?>


  <section class="bg-gray bg-antlers pad-t pad-b--2x">
    <div class="container">

      <div class="row text-center pad-b">
        <div class="span6 offset3 span-l-8 offset-l-2">
          <i class="icon icon-swan-white"></i>
          <blockquote class="border-top pad-t--20">
            <p class="quote">"The world is grand, awfully big and astonishingly beautiful, frequently thrilling."</p>
            <p class="cite">-Dorothy Kilgallen</p>
          </blockquote>
        </div>
      </div>

      <?php $query = new WP_Query( array('posts_per_page' => 3, 'category_name' => 'featured') ); ?>
      <?php if ( $query->have_posts() ) : ?>
      <?php $i = 1; ?>
      <div class="row">
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="span4 span-m-6<?php if ( $i == 3 ) : ?> tablet-hide<?php endif; ?>">
          <div class="blog-excerpt excerpt-icon-<?php echo $i; ?>">
            <div class="img-wrap">
              <time><?php the_time(M); ?><span><?php the_time(j); ?></span></time>
              <?php the_post_thumbnail( 'blog-excerpt' ); ?>
            </div>
            <div class="content-wrap">
              <i class="border"></i>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn btn--block read-more">Read More</a>
          </div>
        </div>
      <?php $i++; ?>
      <?php endwhile; ?>
      </div>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

    </div>
  </section>


  <section class="pad-v--2x bg-blog">
    <div class="container">

      <div class="row text-center">
        <div class="span12">
          <h3 class="pad-b--20">Blog</h3>
          <i class="icon icon-x"></i>
          <h3 class="curved-text font-script font-large-script">Latest Writings</h3>
          <i class="icon icon-circle-scene"></i>
        </div>
      </div>

    </div>
  </section>


  <section class="pad-t--2x pad-b--3x bg-gray bg-texture bg-feather">
    <div class="container">

      <div class="row pad-b--2x">
        <div class="span12">

          <div class="info-box">
            <div class="left">
              <div class="content-wrap">
                <h4>Contact</h4>
                <p class="pad-b--20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                <form action="#" class="form-contact">
                  <div class="form-row pad-b--20">
                    <div class="form-col-left">
                      <div class="form-row pad-b--20">
                        <input type="text" placeholder="Your name" class="input-style">
                      </div>
                      <div class="form-row">
                        <input type="email" placeholder="Your email address" class="input-style">
                      </div>
                    </div>
                    <div class="form-col-right">
                      <div class="form-row">
                        <textarea name="message" id="message" cols="30" rows="5" placeholder="Message" class="input-style"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-row text-center">
                    <input type="submit" value="Send" class="btn btn--secondary btn--min-width">
                  </div>
                </form>
              </div>
            </div>
            <div class="right">
              <div class="top">
                <div class="content-wrap">
                  <h4>About Bekah Klarr</h4>
                  <p>A lifelong seeker of new experiences and wild places, since childhood, Bekah had been writing small poems, sketching little drawings, and snapping photos everyday. As she continued to be inspired by rural places and outdoor adventures an idea formed to create a space for her projects and writings.</p>
                  <i class="icon icon-woman-profile-black align-center"></i>
                </div>
              </div>
              <div class="bottom">
                <div class="content-wrap">
                  <h4>Connect</h4>
                  <ul class="list-inline list-spacer-horz text-center">
                    <li><i class="icon icon-tree-green"></i></li>
                    <li><i class="icon icon-swan-green"></i></li>
                    <li><i class="icon icon-coffee-green"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row text-center">
        <div class="span12">
          <i class="icon icon-trees-three-green"></i>
          <h4 class="h1 font-script text-yellow">Little by little, one travels far.</h4>
        </div>
      </div>

    </div>
  </section>


<?php get_footer(); ?>