<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scratchpad
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<!-- USER CASES -->
		<div class="uc-container">
			<div class="div-uc">  
				<!-- English -->

				<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
					<h2>What you need to know about WeCitizens:</h2>
					<details>
					  <summary>You want to locate politicians on the political spectrum</summary>
					  <p>
					  <ul>
					  <li>
					  </ul>
					  </p>
					</details>
					<details>
					  <summary>Get insight about political and fiscal issues</summary>
					  <p>Text you see after expansion.</p>
					</details>
					<details>
					  <summary>The best investment you can do: donate</summary>
					  <p>Text you see after expansion.</p>
					</details>
					<details>
					  <summary>You can contribute to transparency in public management</summary>
					  <p>Text you see after expansion.</p>
					</details>
				<?php endif; ?>

				<!-- French -->

				<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
					<h2>Ce que vous devez savoir sur NousCitoyens:</h2>
					<details>
					  <summary>En savoir plus sur la sphère politique ? Essayez nos outils !</summary>
					  <ul class="expand">
					  <li>Vous voulez vous informer sur un acteur politique en particulier ? Voyez notre <a class="expandlink" title="Répertoire Politique" href="http://directory.wecitizens.be/fr/politician/personne-virtuelle-665">Répertoire Politique</a>.
					  <li>Vous voulez identifier les hommes politiques favorables à une question précise ? Faites une <a class="expandlink" title="Répertoire Politique" href="http://directory.wecitizens.be/fr">recherche avancée</a> dans le Répertoire Politique. 
					  <li>Lors des élections, voulez savoir qui pense comme vous ? Testez notre <a class="expandlink" title="GPS électoral" href="">GPS Électoral.</a>
					  </ul>
					  <a class="expandbutton" title="Outils" href="http://www.wecitizens.be/fr/outils-2/">Voir la liste des outils</a>
					</details>
					<details>
					  <summary>Réalisez votre investissement le plus rentable. Faites un don.</summary>
					  <ul class="expand">
					  <li>Votre don ou votre cotisation de membre contribue à une meilleure gestion de l’État. Lorsque les responsables politiques constatent que nous nous intéressons à leur travail, ils donnent le meilleur d’eux-mêmes.
					  <li>Restez informés de nos actions : souscrivez à la <a class="expandlink" title="GPS électoral" href="http://www.wecitizens.be/fr/bulletins/">newsletter</a>.
					  </ul>
					  <a class="expandbutton" title="Don" href="http://www.wecitizens.be/fr/impliquez-vous/votre-collaboration/">Je fais un don maintenant</a>
					</details>
					<details>
					  <summary>Vous êtes pour la transparence ? Contribuez-y !</summary>
					  <ul class="expand">
					  <li>Faites-vous entendre : participez et soutenez les campagnes.
					  Vous ne trouvez pas la question politique qui vous tient à cœur ? Commander un sondage des
					  acteurs politiques.
					  <li>Vous avez un dossier sur un cas de gestion publique et vous voudriez donner l’alerte ? Prenez contact avec notre rédacteur en chef <a class="expandlink" title="GPS électoral" href="mailto:pinon@wecitizens.be">(pinon@wecitizens.be)</a>. 
					  <li>Vous possédez des informations qui manquent dans le Répertoire Politique ? Signalez-le au rédacteur en chef ou via le formulaire anonyme que vous trouvez au pied de chaque profil personnel.
					  </ul>
					  <a class="expandbutton" title="Questions" href="http://www.wecitizens.be/fr/">Voir la liste des question politiques</a>
					</details>
					<details>
					  <summary>Enfin un observatoire citoyen de la gestion publique en Belgique. </summary>
					  <ul class="expand">
					  <li>Nous Citoyens se profile observatoire de la gestion publique
					  <li>Nous publions une revue trimestrielle des réformes fiscales, le FiscoFlash. 
					  <li>Dans nos newsletters nous livrons des <a class="expandlink" title="GPS électoral" href="http://www.wecitizens.be/fr/archives-2/">analyses politiques</a>.
					  <li>Nous avons le projet de publier des articles sur des cas intéressants de gestion publique.
					  </ul>
					  <a class="expandbutton" title="Questions" href="http://www.wecitizens.be/fr/">Voir la liste des question politiques</a>
					</details>
				<?php endif; ?>

				<!-- Ne -->
				
			</div>
		</div>
		<!-- END OF USER CASES -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
