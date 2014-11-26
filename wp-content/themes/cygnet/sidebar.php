				<div class="sidebar">

          <div class="widget">
            <h4>Subscribe</h4>
            <form action="#">
              <input type="email" placeholder="Enter Your Email" class="subscribe-field">
              <input type="submit" value="submit" class="subscribe-submit">
            </form>
          </div>

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php endif; ?>

          <p class="copyright">&copy; <?php echo date("Y") ?> Cygnet Outdoors</p>

				</div>
