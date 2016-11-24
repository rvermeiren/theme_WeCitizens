<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Scratchpad
 */

?>
		</div><!-- .wrap -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrap">

			<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
				<aside id="footer-widgets" class="widget-area" role="complementary">
					<div class="grid-container">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				</aside><!-- #secondary -->
			<?php } ?>

			<div class="site-info">
				<?php get_template_part( 'images/inline', 'line.svg' ); ?>
				<?php scratchpad_social_menu(); ?>

		  		Copyright © 2014
		    		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>. All rights reserved.
		    	<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
		    		<a href="<?php bloginfo('url'); ?>/vie-privee/" >Vie privée</a> | 
		    		<a href="<?php bloginfo('url'); ?>/termes-et-conditions/">Termes et conditions</a> | 
		    		<a href="<?php bloginfo('url'); ?>/contact/" title="Cliquez ici pour nous contacter">Contact</a>
		    	<?php endif; ?>
					<?php if (ICL_LANGUAGE_CODE == 'nl') : ?>
		    		<a href="<?php bloginfo('url'); ?>/privacy/" >Privacy</a> | 
		    		<a href="<?php bloginfo('url'); ?>/algemene-voorwaarden/">Algemene voorwaarden</a> | 
		    		<a href="<?php bloginfo('url'); ?>/contacteer-ons/" title="Contacteer ons">Contact</a>
		    	<?php endif; ?>
			</div><!-- .site-info -->
		</div><!-- .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
