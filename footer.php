<!-- footer  -->
          <div class="row footer">
            <div class="container top-footer" style="padding: 5px 0">
              <?php dynamic_sidebar( 'contact1' ); ?>
              <?php dynamic_sidebar( 'contact2' ); ?>
              <?php dynamic_sidebar( 'contact3' ); ?>
              <?php dynamic_sidebar( 'contact4' ); ?>
              <?php dynamic_sidebar( 'contact5' ); ?>
            </div>
            <div class="container bottom-footer">
              <?php dynamic_sidebar( 'copyright1' ); ?>
              <?php dynamic_sidebar( 'copyright2' ); ?>
              <?php dynamic_sidebar( 'copyright3' ); ?>
            </div>
          </div>
        </div><!-- container fluid end -->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    </body>
        <?php wp_footer(); ?>
</html>
