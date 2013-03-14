<?php /*
	Template Name: 404
	URI: http://lineshjose.com/
	Description: This is a Free WordPress theme built-in widgets and a intuitive theme settings interface... Designed by <a href="http://lineshjose.com/">Linesh Jose</a>. Both the design and code are  released under a <a href="http://creativecommons.org/licenses/by/3.0//">Creative Commons Attribution 3.0 Unported</a> License.
	Version: 11.08
	Author: Linesh Jose 
	Author URI: http://lineshjose.com
	Tags: light, white,Three-columns,  flexible-width, right-sidebar, left-sidebar,  threaded-comments, translation-ready,white, widgets
*/?>
<?php get_header(); ?>

<!-- Content section -->
<td id="content" >
<section role="main">
	<!-- Title -->
	<h1>Page Not Found</h1>
	
	
	
	<!-- 404 -->
	<div class="content">
		<article class="single_post">
		
		<div class="entry_content">
		<h3 class="title">Can't find that page</h3>
		<p >I'm sorry but it appears that you found a page that can't be found on www.lineshjose.com. It may have been moved, deleted, or you may have accidently mistyped the URL in the address bar.</p>
		
		<p>Since this isn't the page you were looking for (unless you are a fan of 404 pages then in that case, go nuts) I will see what I can do to help you find the correct page.</p>
		<p>Let me help you find what you came here for:</p>
		
		<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<table cellpadding="0" cellspacing="3">
				<tr>
					<th width=100>Search for it:</th>
					<td class="noborder">
						<input type="text" class="textbox searchbox" value="" name="s" id="s"  />
						<input type="hidden" id="searchsubmit" value="Search" />
						<input type="submit" id="searchsubmit" value="Go" class="button searchbutton" />
					</td>
				</tr>
			</table>
		</form>
		</div>
	</article>
	</div>
	<!-- /404 -->
	</section>
</td>
<!-- /Content section -->	
<?php get_sidebar(); ?>
<?php get_footer(); ?>