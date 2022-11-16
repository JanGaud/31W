<?php

get_header();

?>
	<main class="site__main">
		<code>front-page.php</code>
		<?php wp_nav_menu(array(
            "menu" => "evenements",
            "container" => "nav",
           "container_class" => "evenements",
        ))?>
        
        
        
        
        <?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
			<h1><?= get_the_title(); ?></h1>

			<?php the_content();
			$le_permalien = "<a href='" . get_the_permalink() . "'>Suite</a>";
			?>
			
			<blockquote><?php the_excerpt(); ?></blockquote>
			<blockquote><?= wp_trim_words(get_the_excerpt(),5, $le_permalien); ?></blockquote>
			


<?php
			endwhile;
			endif;	
		?>
	</main><!-- #main -->
<?php
get_footer();