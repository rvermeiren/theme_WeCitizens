<?php
/*
Template Name: Archives
*/
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="entry-content">
				<?php the_post(); ?>

				<h1 class="entry-title"><?php the_title(); ?></h1>

				<?php get_search_form(); ?>

				<h2>Archives by Month:</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>

				<h2>Archives by Subject:</h2>
				<ul>
					 <?php wp_list_categories(); ?>
				</ul>
			</div>
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
