<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<!-- MaBIdbBDORTm5FykY74vMBs8GqE -->
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>

<body>
<div id="rap">
	<?php get_header(); ?>
	<div id="main">
	<div id="content">
        <?php if ( have_posts() ) : ?>
            <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'content', get_post_format() );

            // End the loop.
            endwhile;
        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content', 'none' );
        endif;
        ?>
		<p align="center"><?php posts_nav_link() ?></p>		
	</div>
	<div id="sidebar">
		<?php get_sidebar(); ?>
		
		<?php if (function_exists('wp_theme_switcher')) { ?>
		<h2>Themes</h2>
		<?php wp_theme_switcher(); } ?>
		
		<h2><?php _e('Meta'); ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>		
	</div>
	
<?php get_footer(); ?>
</div>
</div>
</body>
</html>
