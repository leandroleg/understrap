<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>

    <?php get_sidebar('footerfull'); ?>

    <div class="wrapper" id="wrapper-footer">

      <div class="<?php echo $container; ?>" id="content">

        <div class="row">

          <div class="col-md-12">

            <footer class="site-footer" id="colophon" role="contentinfo">

              <div class="site-info">
                <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'understrap' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'understrap' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( __( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ), '<a rel="designer" href="http://understrap.com/">understrap.com</a>' ); ?>
                (<?php printf( __( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' ) ); ?>)
              </div><!-- .site-info -->

            </footer><!-- #colophon -->

          </div><!--col end -->

        </div><!-- row end -->

      </div><!-- container end -->

    </div><!-- wrapper end -->

  </div><!-- #page -->

  <?php wp_footer(); ?>

</body>

</html>
