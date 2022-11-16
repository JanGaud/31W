<?php
get_header();

?>
<h1>single.php</h1>
	<main class="site__main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>
			<h1><?= get_the_title(); ?></h1>
			<?php the_content();?>
            <p>L'adresse de l'évennement<?php the_field('adresse');?></p>	
            
            <p>date et l'heure de l'evennement<?php the_field('date_et_heure_de_levennement')?></p>
		<?php	endif;	?>
	</main><!-- #main -->
<?php
get_footer();