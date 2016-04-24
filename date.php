<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/1">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
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
<body id="archives">
<div id="rap">
	<?php get_header();?>	
	<div id="main">
	<div id="content">
		<?php if ($posts) { ?>	
		<?php $post = $posts[0]; /* Hack. Set $post so that the_date() works. */ ?>
		<?php if (is_day()) { ?>
			<h3><?php the_time('l, F jS, Y'); ?></h3>			
			<div class="post-info">Daily Archive</div>
		<?php } elseif (is_month()) { ?>
			<h3><?php the_time('F Y'); ?></h3>
			<div class="post-info">Monthly Archive</div>
		
		<?php } elseif (is_year()) { ?>
			<h3><?php the_time('Y'); ?></h3>
			<div class="post-info">Yearly Archive</div>
		
		<?php } ?>				
		<br/>				
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
        <?php } else { ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>           
        <?php } ?>
	</div>
	<div id="sidebar">
		<?php /* If this is a daily archive */ if (isset($_GET['day']) && !empty($_GET['day'])) { ?>
			<h2>Currently Browsing</h2><ul><li><p>You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for the day <?php the_time('l, F jS, Y'); ?>.</p></li></ul>
			
			<?php /* If this is a monthly archive */ } elseif ((isset($_GET['m']) && !empty($_GET['m'])) or (isset($_GET['monthnum']) && ! empty($_GET['monthnum']))) { ?>
			<h2>Currently Browsing</h2><ul><li><p>You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for <?php the_time('F, Y'); ?>.</p></li></ul>

			<?php /* If this is a yearly archive */ } elseif (isset($_GET['year']) && !empty($_GET['year'])) { ?>
			<h2>Currently Browsing</h2><ul><li><p>You are currently browsing the <a href="<?php bloginfo('url'); ?>"><?php echo bloginfo('name'); ?></a> weblog archives
			for the year <?php the_time('Y'); ?>.</p></li></ul>
			<?php } ?>			
	
	<?php get_sidebar(); ?>
	</div>

<?php get_footer();?>
</div>
</div>
</body>
</html>
