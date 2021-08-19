<?php
	//Template Name: Helper
?>

<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>


<?php
	//endwhile;
//endif;
?>


<?php


	//Returns the title of the current page.
	//echo get_the_title();
	//the_title();

	//Returns the content of the current page.
	//if (have_posts()) : while (have_posts()) : the_post();
	//echo get_the_content();
	//the_content();
	//endwhile;
	//endif;

	//Return my theme directory!
	//echo get_theme_root_uri();

	//Return my wordpress settings!
	//echo bloginfo('title');
	//echo bloginfo('description');

	//Returns full directory.
	//echo get_bloginfo('stylesheet_directory');
	
	/*
	//Returns wordpress content for Head and Footer.
	wp_head();	
	wp_footer();

	//We use it to pull the top and bottom.
	get_header();
	get_footer();

	//Returns the title of the page.
	get_the_title();
	//Retorna o slug da página.
	global $post;
	$post_slug=$post->post_name;
	echo $post_slug;


	//ACF plugin functions
	
	while(have_rows('nome_tipo_contato')){
			the_row();
			echo get_sub_field('nome');
	}

	the_field('nome');
	*/
?>



