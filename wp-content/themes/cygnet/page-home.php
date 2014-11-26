<?php
/*
 Template Name: Home Page
*/
?>


<?php get_header(); ?>


  <section class="bg-gray bg-antlers parallax pad-t pad-b--2x">
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
          <a href="<?php echo get_post_type_archive_link( 'portfolio' ); ?>" class="link-block">
            <h4 class="pad-b--20">Portfolio</h4>
            <i class="icon icon-x"></i>
            <img src="<?php echo get_template_directory_uri(); ?>/library/img/structure/text-latest-writings.png" alt="Latest Writings" class="circle-text" width="283" height="73">
            <i class="icon icon-circle-scene"></i>
          </a>
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
                <div class="form-wrap">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>
            <div class="right">
              <div class="top">
                <div class="content-wrap">
                  <h4>Cygnet Outdoors</h4>
                  <p>Cygnet Outdoors is a source for inspiration centered around the outdoors and adventures big and small. I strive to represent outdoorsmen through my writings and photos. I hope to encourage people to seek the wondrous beauty that surrounds their everyday life.</p>
                  <i class="icon icon-woman-profile-black align-center"></i>
                </div>
              </div>
              <div class="bottom">
                <div class="content-wrap">
                  <h4>Connect</h4>
                  <ul class="list-contact-fancy text-center">
                    <li>
                      <a href="https://www.facebook.com/cygnetoutdoors" target="_blank" class="link-popover">
                        <i class="icon icon-facebook-fancy"></i>
                        <span class="popover-content">Facebook</span>
                      </a>
                    </li>
                    <li>
                      <a href="https://twitter.com/CygnetOutdoors" target="_blank" class="link-popover">
                        <i class="icon icon-twitter-fancy"></i>
                        <span class="popover-content">Twitter</span>
                      </a>
                    </li>
                    <li>
                      <a href="http://instagram.com/cygnetoutdoors" target="_blank" class="link-popover">
                        <i class="icon icon-instagram-fancy"></i>
                        <span class="popover-content">Instagram</span>
                      </a>
                    </li>
                    <li>
                      <a href="mailto:bekah@cygnetoutdoor.com" target="_blank" class="link-popover">
                        <i class="icon icon-email-fancy"></i>
                        <span class="popover-content">Email</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row text-center pad-b--20">
        <div class="span12">
          <i class="icon icon-trees-three-green"></i>
          <h4 class="h1 font-script text-yellow">Little by little, one travels far.</h4>
        </div>
      </div>

    </div>
  </section>


<?php get_footer(); ?>