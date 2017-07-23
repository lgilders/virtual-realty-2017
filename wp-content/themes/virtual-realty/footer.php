<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Virtual_Realty
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
            <?php
                $phoneNumber = get_field('phone_number', 'option');
                $emailAddress = get_field('e-mail_address', 'option');
            ?>

            <div id="phoneNumber">
                <a href="tel:1-" + <?php echo $phoneNumber;?> >
                    <?php the_field('phone_number', 'option'); ?>
                </a>
            </div>

            <div id="emailAddress">
                <a href="mailto:" + <?php echo $emailAddress;?> >
                    <?php the_field('e-mail_address', 'option'); ?>
                </a>
            </div>

            <div id="facebook">
                <a href="https://www.facebook.com/VirtualRealtyLLC">
                    <?php the_field('facebook_cta', 'option'); ?>
                </a>
            </div>

            <div id="copyright">
                <?php the_field('copyright', 'option'); ?>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
