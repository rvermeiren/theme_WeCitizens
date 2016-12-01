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

		<table class="table-footer" border="0">
			<tbody class="tbody-footer">
				<tr>
					<td class="td-footer">  
						<?php if (ICL_LANGUAGE_CODE == 'fr') : ?>
							<a>What you need to know about WeCitizens:</a>
							<details>
							  <summary>You want to locate politicians on the political spectrum</summary>
							  <p>Text you see after expansion.</p>
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
					</td>
				</tr>

		</table>

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
