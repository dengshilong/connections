<h2><label for="s"><?php _e('搜索:'); ?></label></h2>
	<ul>
		<li>
			<form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div style="text-align:center">
					<p><input type="text" name="s" id="s" size="15" /></p>
					<p><input type="submit" name="submit" value="<?php _e('Search'); ?>" /></p>
				</div>
			</form>
		</li>
	</ul>
<h2><?php _e('关于本站:'); ?></h2>
	<ul><li><?php bloginfo('description'); ?></li></ul>
	<ul><?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具') ) : ?><?php endif; ?></ul>	
<h2><?php _e('Links'); ?></h2>
	<ul>
        <?php 
        $bookmarks = get_bookmarks(); 
        if ( !empty($bookmarks) ) {
            foreach ($bookmarks as $bookmark) {
                echo "<li><a href=\"$bookmark->link_url\" title=\"$bookmark->link_description\" target=\"_blank\">$bookmark->link_name</a></li>";
            }
        }
        ?>
    </ul>

<h2><?php _e('Categories:'); ?></h2>
	<ul><?php wp_list_categories('style=none&show_count=1');    ?></ul>


<h2><?php _e('Monthly:'); ?></h2>
	<ul><?php wp_get_archives('type=monthly&show_post_count=true'); ?></ul>

	

<h2><?php _e('RSS 订阅:'); ?></h2>
	
	<ul>
		<li>
			<a title="RSS2 Feed for Posts" href="<?php bloginfo('rss2_url'); ?>">Posts</a> | <a title="RSS2 Feed for Comments" href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></li>	
	</ul>	
		
