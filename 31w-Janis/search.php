<?php
/**
 * 
 * 
 *Template Name: Search Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igc31w
 */


get_header();?>


	
	<main class="site__main">
		<div class="search-header">
			<h2>Résultats de la recherche</h2>
			<small> Elément de recherche : <?php echo get_search_query(); ?></small>
		</div>
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
			<div class="elements-recherches separation">
						<?php the_post_thumbnail('thumbnail'); ?>
					<div class="elements-txt-separation">
						<h5><?= get_the_title(); ?></h5>
						<?php
						$le_permalien = "<a href='" . get_the_permalink() . "'> &#11157;</a>";
						?>
						<blockquote><?= wp_trim_words(get_the_excerpt(),40, $le_permalien); ?></blockquote>
					</div>
			</div>
			
	<?php
			endwhile;
			endif;	
		?>
	</main><!-- #main -->
	<?php
get_footer();

