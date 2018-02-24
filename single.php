<?php get_header(); ?>

	<main id="main" class="wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<?php // Edit the loop in /templates/single-loop. Or roll your own. ?>
		<?php get_template_part( 'templates/single', 'loop'); ?>

	</main>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
