<div id="header">
	<ul id="topnav">
        <?php wp_nav_menu( array('container' => false,   'link_before' => ' ', 'link_after' => ' |')); ?>
	</ul>
	<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>		
	<div id="desc"><?php bloginfo('description');?></div>
</div>
