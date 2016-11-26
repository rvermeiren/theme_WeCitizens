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

			<table class="table-footer" border="0"> <!-- FAIRE EN SORTE QUE CA SOIT CONTENU DANS LA LARGEUR DU CONTENT -->
				<tbody class="tbody-footer">
					<tr>
						<td class="td-footer">  
							<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
								<a title="Votre collaboration" href="/?page_id=35">
					      		<img class=" size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/don.jpg" alt="Faites un don" width="59" height="53" />
					      		<br>Faites un don
								</a>
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == 'nl') : ?>
								<a title="Doe een gift" href="/?page_id=8398">
					      		<img class=size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/don.jpg" alt="Doe een gift" width="59" height="53" />
							    <br>Doe een gift
							 	 </a>  
							<?php endif; ?>
							<!--<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
								<a title="Votre collaboration" href="/?page_id=8399">
					      		<img class=size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/don.jpg" alt="Faites un don" width="59" height="53" />
							    <br>Donate now
							  	</a>    
							<?php endif; ?>-->
						</td>
						<td class="td-footer">  
							<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
								<a href="/?page_id=8381">
								<img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/panel.jpg" alt="Participez à nos panels" width="59" height="53" />
								<br>Participez aux panels
								</a> 
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == 'nl') : ?>
								<a href="/?page_id=8380">  
								<img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/panel.jpg" alt="Neem deel aan onze opiniepanels" width="59" height="53" />
								<br>Neem deel aan onze opiniepanels
								</a>   
							<?php endif; ?>
							<!--<?php if (ICL_LANGUAGE_CODE == 'en') : ?> 
							<a href="/?page_id=8378">  
								<div class="footerbutton">
							    <span class="footerbutton"><img class="size-full wp-image-8172" src="http://dev.wecitizens.be/wp-content/uploads/panel.jpg" alt="Participez à nos panels" width="59" height="53" />
							    <br>Participate to our panels
							</a>   
							<?php endif; ?> -->  
						</td>
						<td class="td-footer">  
							<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
								<a href="/?page_id=8618">	
						        <img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/campagne.jpg" alt="Soutenez une campagne" width="59" height="53" />
						        <br>Soutenez une campagne
						  		</a>
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == 'nl') : ?>
								<a href="/?page_id=9443">
						        <img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/campagne.jpg" alt="Steun een campagne" width="59" height="53" />
						        <br>Steun een campagne 
							  	</a>  
							<?php endif; ?>
							<!--<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
								<a href="/?page_id=8618">
						        <img class="size-full wp-image-8172" src="http://dev.wecitizens.be/wp-content/uploads/campagne.jpg" alt="Soutenez une campagne" width="59" height="53" />
						        <br>Support our campaignes
								</a>  
							<?php endif; ?> -->
						</td>
						<td class="td-footer">  
							<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
								<a href="/?page_id=568">
						      	 <img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/newsletter.jpg" alt="Souscrivez à notre newsletter" width="59" height="53" />
						      	 <br>Souscrivez à notre newsletter
								</a>
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == 'nl') : ?>
								<a href="/?page_id=8400">
					      	 	<img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/newsletter.jpg" alt="Schrijf u in op onze nieuwsbrief" width="59" height="53" />
					      	 	<br>Schrijf u in op onze nieuwsbrief 
							 	</a>        
							<?php endif; ?>
							<!--<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
								<a href="/?page_id=8401">
						      	 <img class="size-full wp-image-8172" src="http://dev.wecitizens.be/wp-content/uploads/newsletter.jpg" alt="Souscrivez à notre newsletter" width="59" height="53" />
						      	 <br>Subscribe to our newsletter
								</a>
							<?php endif; ?>-->
						</td>
					</tr>
					<tr>
						<td class="td-footer">
							<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
								<a href="/?page_id=1308">	
						        <img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/reppol.jpg" alt="Répertoire politique" width="59" height="53" />
						        <br>Répertoire Politique<br><small>S'informer sur un acteur politique</small>
							 	</a>
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == 'nl') : ?>
								<a href="/?page_id=1311">
						        <img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/reppol.jpg" alt="Politieke Databank" width="59" height="53" />
						        <br>Politieke Databank<br><small>Informatie inwinnen over een politicus</small>
								</a>
							<?php endif; ?>
							<!--<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
								<a href="/?page_id=1313">
						        <img class="size-full wp-image-8172" src="http://dev.wecitizens.be/wp-content/uploads/reppol.jpg" alt="Répertoire politique" width="59" height="53" />
						        <br>Political Directory<br><small>Get info about a political actor</small>
								</a>
							<?php endif; ?>-->
						</td>
						<td class="td-footer">
							<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>	
							 	<a href="/?page_id=24">
								<img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/gps.jpg" alt="GPS électoral" width="59" height="53" />
						        <br>GPS électoral<br><small>Qui pense comme vous?</small>
								</a>
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == 'nl') : ?>
								<a href="/?page_id=272">
						        <img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/gps.jpg" alt="Kieswijzer" width="59" height="53" />
						        <br>Kieswijzer<br><small>Wie heeft dezelfde opvattingen als u?</small>
								</a>
							<?php endif; ?>
							<!--<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
								<a href="/?page_id=1079">
						        <img class="size-full wp-image-8172" src="http://dev.wecitizens.be/wp-content/uploads/gps.jpg" alt="GPS électoral" width="59" height="53" />
						        <br>Electoral GPS<br><small>Who think like you?</small>
								</a>
							<?php endif; ?> -->
						</td>
						<td class="td-footer">
							<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
								<a href="/?page_id=8311">
						        <img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/screening.jpg" alt="Radioscopies politiques" width="59" height="53" /><br>Radioscopies politiques<br><small>Qui pense quoi?</small>
								</a> 
							<?php endif; ?>
							<?php if (ICL_LANGUAGE_CODE == 'nl') : ?>
								<a href="/?page_id=8310">
						        <img class="size-full wp-image-8172" src="http://www.wecitizens.be/wp-content/uploads/screening.jpg" alt="Politieke doorlichtingen" width="59" height="53" /><br>Politieke doorlichtingen<br><small>Wie denkt wat?</small>
								</a>  
							<?php endif; ?>
							<!--<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
								<a href="/?page_id=#">
						        <img class="size-full wp-image-8172" src="http://dev.wecitizens.be/wp-content/uploads/screening.jpg" alt="Political screening" width="59" height="53" /><br>Political screening<br><small>Who thinks what?</small>
								</a>
							<?php endif; ?>   -->
						</td>
					</tr>
				</tbody>
			</table>


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
