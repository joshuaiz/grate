<img src="https://studio.bio/images/logo_sm.svg" width=96 />
<<<<<<< HEAD
# Grate
=======

# Grate

A super-minimal WordPress starter theme with CSS Grid for developers.

## What is Grate?
Grate is a fork of [Plate](https://github.com/joshuaiz/plate) that uses explicit semantic HTML markup with CSS Grid. 

Grid + Plate = __Grate__

### tl:dr;
We need to restructure our markup, stripping it down to functional HTML components to work with CSS Grid the right way.

### A little preface on CSS Grid
CSS Grid is a major milestone for CSS and web development in general and it is finally ready. Yet, to *really* use it properly we can't just assign some new parameters to existing markup in our CSS. Well, we __could__, but we shouldn't. Why not? <em>CSS Grid changes the way we should think about how our HTML is structured.</em>

What does that mean? Well, for the entire history of the web, we have been using extraneous markup just to contain all of our elements that we need to arrange in our layouts, whether we are using floats, or more recently, Flexbox. Flexbox is great (and it works alongside CSS Grid) however it only works in one direction. What's more, to use Flexbox and floats we need to insert wrapper elements in our HTML to contain the child elements we want to align that are totally unrelated to the function of the document. 

If you've made the move from floats to Flexbox, you'll notice the clearfix hack and flexbox do not play nicely with each other. You'll get all kinds of weird behavior that the clearfix hack was supposed to fix in the first place. Super no bueno.

These extra containers lead to divitis, are woefully unsemantic and now, *are totally unnecessary*.

Take this example HTML layout:

	<div id="container">
		<header>
            		<div id="inner-header" class="clearfix">
				<div id="logo"><img src="logo.png" /></div>
					<h1><?php the_title(); ?></h1>
				<nav></nav>
			</div>
		</header>
		<div id="content">
			<div id="inner-content" class="clearfix">
				<main id="main" class="clearfix">
					<article class="clearfix">
						<?php the_content(); ?>
					</article>
				</main>
				<aside class="sidebar clearfix">
					<div id="inner-sidebar" class="clearfix">
						<?php get_sidebar(); ?>
					</div>
				</aside>
			</div>
		</div>
		<footer>
			<div id="inner-footer" class="clearfix">
				<p>© 2018 Site Title.</p>
			</div>
		</footer>
	</div>
	
The `#content`, `#inner-header`, `#inner-content`, `#inner-sidebar`, and `#inner-footer` divs are __only__ there to be wrappers to contain floats or be flexbox wrappers. They don't tell us anything about what is in them and really just muddy up your markup.

__Clearfix is also super hacky.__ While it works well enough, it never felt right to me. It solved a very real layout problem but in the process adds extra fluff to the markup. We don't need it anymore. For years, all of these hacky bits and extra divs is how we have been structuring our markup just to make it work. 

Until now, most of our job as web designers is making boxes around other boxes, then adding hacks until the boxes do what we want. What a mess!

It's time to move on.

With CSS Grid, we can have a much simpler semantic layout like this:

    <div id="container" class="grid">
        <header>
            <h1><?php the_title(); ?></h1>
        </header>
        <main>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article><?php the_content(); ?></article>
            <?php endwhile; endif; ?>
        </main>
        <aside>
            <?php get_sidebar(); ?>
        </aside>
        <footer>
            <small>© 2018 <?php get_bloginfo('name'); ?></small>
        </footer>
    </div>
        
Anyone can read this and know exactly what is going on. This makes sense just as a *document*, without any rendering at all. What's great is this structure is fully accessible and without any extra markup, the styles are now functionally completely independent. 

We can keep this simple structure and use CSS Grid to do all the heavy lifting for our layout(s) with a few lines of code. No hacks, no calc, no floats. Boom.

<img src="https://studio.bio/images/grate_grid.png" />

### So what does this mean for Grate?
When I initially forked Plate to create Grate, it became apparent really quickly that I would have to completely restructure the HTML in the theme templates, stripping it down to only the actual functional components. 

#### Liberate the markup!
With modular, component-based development coming into its own, breaking down the HTML markup into its semantic, functional components is an imperative. Most WordPress sites are not simply blogs and they need to be flexible enough to adapt to any templating system or layout, while still being responsive.

Grate is built with basic, functional HTML components that strip out many of the extra container divs, keeping the markup simple and adaptable. It comes with a default structure much like the example above but with only the base elements, these can be easily swapped out, rearranged or removed completely. Starting with this foundation is good for mobile first, accessibility and SEO at the same time. 

Of course developers will need to add their own custom content components to these depending on the nature of the content they want to display. But now, there is (almost) nothing to strip away - the theme is about as agnostic as it can be.

All that said, for Grate, I've left in the #inner-header and #inner-footer divs so we can use max-width on the actual header and footer content (using the .wrap class) keeping the outer header and footer elements full width. These elements could be removed once the subgrid property is fully adopted. For now, we still need some interstitial HTML but it won't be long until the major browsers adopt subgrids.

Just like before, you can use custom page templates to create different layouts. Yet, by using CSS Grid and subgrids, the possibilities are endless and you probably don't need to use as many templates as before. Think about your page templates in a modular, component-based way and with just a couple page setups, you can cover all of the layouts your site needs. If you start out with a good grid to begin with, you could probably handle multiple layouts with just a few lines of scss.

## Notes:

This is a super early alpha release so I would test this theme out before using it on a production site. It is subject to change a lot and eventually, some of the things in Grate may get merged into a future release of Plate.

I've left some basic css in to set up the logo, site title, nav and background colors for the grid template areas; just remove these after you see your grid in action.
