<?php get_header(); ?>

	<main id="main" class="wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('hentry'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

            <header class="article-header">

                <?php get_template_part( 'templates/header', 'title'); ?>

                <?php // Delete or comment out if you don't need this on your page or post. Edit in /templates/byline.php ?>
                <?php get_template_part( 'templates/byline'); ?>

            </header> <?php // end article header ?>

            <section class="entry-content" itemprop="articleBody">
                
                <?php the_content(); ?>
            
            </section> <?php // end article section ?>

            <footer class="article-footer">

                <?php // this is here *just* to pass Theme Check. Link pages suck. There, I said it. ?>
                <?php wp_link_pages(); ?> 

            </footer>

            <?php comments_template(); ?>

        </article>

        <?php endwhile; endif; ?>

	</main>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
