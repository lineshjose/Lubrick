	<?php /*
	Template Name: Sidebar
	URI: http://linesh.com/
	Description: This is a Free WordPress theme built-in widgets and a intuitive theme settings interface... Designed by <a href="http://linesh.com/">Linesh Jose</a>. Both the design and code are  released under a <a href="http://creativecommons.org/licenses/by/3.0//">Creative Commons Attribution 3.0 Unported</a> License.
	Version: 15.05
	Author: Linesh Jose 
	Author URI: http://linesh.com/
	Tags: light, white,Three-columns,  flexible-width, right-sidebar, left-sidebar,  threaded-comments, translation-ready,white, widgets

	*/?>
	
	
	<!-- Sidebar -->
	<td id="sidebar">
	<section>
		<aside id=""><div class="connection">
			<ul>
				<li><a href="http://facebook.com/<?php echo get_option('lj_facebook');?>" class="facebook" title="Facebook" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/images/transper.gif" class="facebook"  alt="Facebook" title="Facebook"/> </a></li>
						
				<li><a href="http://twitter.com/<?php echo get_option('lj_twitter');?>"  class="twitter" title="Twitter"  target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/images/transper.gif" class="twitter"  alt="Twitter" title="Twitter"/> </a></li>
						
				<li><a href="http://plus.google.com/<?php echo get_option('lj_google_plus');?>"  class="google_plus"title="Google Plus" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/images/transper.gif" class="google_plus"  alt="google plus" title="Google Plus"/></a></li>
					
				<li><a href="<?php bloginfo_rss( 'rss2_url' ); ?>"  class="rss" title="Syndicate this site using RSS 2.0" target="_blank">
				<img src="<?php bloginfo('template_url'); ?>/images/transper.gif" class="rss"  alt="RSS Subscribe" title="RSS Subscribe"/></a></li>
			</ul>
			<div class="clearboth"></div>
		</div></aside>

		<aside id=""><div class="widget search">
		<?php _e('<h3>Search</h3>'); ?>
		<!--  Search box-->	
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
				<input type="search" class="textbox searchbox"  name="s" id="s" placeholder="Serach" required="required" />
				<input type="hidden" id="searchsubmit" value="Search" />
				<input type="submit" id="" value="Go" />
			</form>	
		<!--  Search box-->	
	</div></aside>
	
	
	<aside id=""><div class="widget">
		<?php _e('<h3>Main menu</h3>'); ?>
		<ul>
			<?php lj_get_custom_nav('MainNavigation');?>
		</ul>
	</div></aside>
		
		
		
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
	if (!dynamic_sidebar("Graphi Sidebar") ) : ?>

		<aside id=""><div class="widget">
			<?php _e('<h3>Archives</h3>'); ?>
			<ul>
			<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</div></aside>

	<?php endif; ?>
		<aside id=""><div class="widget">
			<h3>Feeds</h3>
			<ul >		
			<li><a href="<?php bloginfo_rss( 'rss2_url' ); ?>" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS 2.0</abbr></a></li>
			<li><a href="<?php bloginfo_rss( 'atom_url' ); ?>" title="Syndicate this site using atom">Entries <abbr title="Really Simple Syndication">Atom</abbr></a></li>
			<li><a href="<?php bloginfo_rss( 'comments_rss2_url' ); ?>" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS 2.0</abbr></a></li>
			</ul>
		</div></aside>
		
	</section>
	</td>
	<!-- Sidebar  ends-->	