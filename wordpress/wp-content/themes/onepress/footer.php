<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */
?>
    <footer id="colophon" class="site-footer" role="contentinfo">
       
        <div class="site-info">
            <div class="container">
                <?php if ($onepress_btt_disable != '1') : ?>
                    <div class="btt">
                        <a class="back-top-top" href="#page" title="<?php echo esc_html__('Back To Top', 'onepress') ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
                    </div>
                <?php endif; ?>
                <?php
                /**
                 * hooked onepress_footer_site_info
                 * @see onepress_footer_site_info
                 */
                do_action('onepress_footer_site_info');
                ?>
            </div>
        </div>
        <!-- .site-info -->

    </footer><!-- #colophon -->
<?php
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action( 'onepress_site_end' );
?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
</body>
</html>
