<?php require('header.php'); ?>

<div class="container-fluid">
          <!-- top image  -->
          <div class="row">
            <div class="top-image-holder">
              <?php the_post_thumbnail('full'); ?>
            </div>
          </div><!-- end of top image -->

          <!-- header  -->
          <div class="row">
            <header>
              <div class="container">
                <div class="row">
                  <nav>
                    <ul class="main">
                      <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </header>
          </div><!-- end of header-row -->
          <!-- main content  -->
          <div class="row content">
            <div class="container">
              <div class="row">
                  <h2><?php echo get_the_title(); ?></h2>
                  <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                      <div class="blogpost">
                          <?php the_content(); ?>

                      </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <h6 class="center">Not Found</h6>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php include (TEMPLATEPATH . "/searchform.php"); ?>
                  <?php endif; ?>
              </div>
            </div>
          </div><!-- end of content -->
          <!-- footer  -->
          <div class="row footer">
            <div class="container top-footer" style="padding: 5px 0">
              <div class="col-md-2 col-sm-12 footer-contact" style="padding-left: 0;">Isabelle Schneiter</div>
              <div class="col-md-2 col-sm-12 footer-contact">Rosenbergstrasse 14</div>
              <div class="col-md-2 col-sm-12 footer-contact">8304 Wallisellen</div>
              <div class="col-md-2 col-sm-12 footer-contact">078 664 95 89</div>
              <div class="col-md-2 col-sm-12 footer-contact">info@isabelleschneiter.ch</div>
            </div>
            <div class="container bottom-footer">
              <div class="col-md-4 col-sm-12">Copyright © 2017</div>
              <div class="col-md-4 col-sm-12" style="text-align:center;">isabelleschneiter.ch | Alle Rechte vorbehalten</div>
              <div class="col-md-4 col-sm-12 impressum">Impressum</div>
            </div>
          </div>
        </div><!-- container fluid end -->

<?php require('footer.php'); ?>
