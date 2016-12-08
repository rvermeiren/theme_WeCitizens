<?php
/*
Template Name: Archives
*/
get_header(); ?>
	<div id="primary" class="archives-container">
		<main id="main" class="site-main" role="main">
			<div class="archives-uc">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );


				endwhile; // End of the loop.
				?>

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
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
