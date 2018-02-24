<?php 
/*
 * Custom Post Type Single Post Template
 *
 * This is the custom post type single post template. If you edit the custom post type name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type call is "register_post_type( 'staff' )",
 * then your template name should be single-staff.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

	<main id="main" class="wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<?php // Edit the loop in /templates/single-loop. Or roll your own. ?>
		<?php get_template_part( 'templates/single', 'loop'); ?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
