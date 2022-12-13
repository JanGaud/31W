<?php
/**
 * The main template file
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

get_header();

?>
	<main class="site__main">

	<!-- <div class="site__banner">
		<img src="wp-content/themes/31w-Janis/sass/img/ecoleIMG5.jpg" alt="">		
	</div> -->


		<?php  wp_nav_menu(array(
			"menu" => "evenements",
			"container" => "nav",
			"container_class" => "evenement"
		));
?>


<section class="grille">
	<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

			<?php if (in_category('galerie')): ?>
				<?php get_template_part( 'template-parts/accueil-galerie', '' ); ?>
				<?php elseif (in_category('note')): ?>
				<?php get_template_part( 'template-parts/accueil-note', '' ); ?>
				<?php elseif  (in_category('cours')):?>
				<?php get_template_part( 'template-parts/accueil-cours', '' ); ?>

			<?php endif; ?>
			<?php
			endwhile;
			endif;	
			?>
		</section>
	</main><!-- #main -->
<?php
get_footer();

