<?php /*
	Template Name: Default page
	URI: http://linesh.com/
	Description: This is a Free WordPress theme built-in widgets and a intuitive theme settings interface... Designed by <a href="http://linesh.com/">Linesh Jose</a>. Both the design and code are  released under a <a href="http://creativecommons.org/licenses/by/3.0//">Creative Commons Attribution 3.0 Unported</a> License.
	Version: 15.05
	Author: Linesh Jose 
	Author URI: http://linesh.com/
	Tags: light, white,Three-columns,  flexible-width, right-sidebar, left-sidebar,  threaded-comments, translation-ready,white, widgets

*/?>
<?php get_header(); ?>
<!-- Content section -->
<td id="content">
<section role="main">
<!-- Title -->
	<h1 class="pagetitle"><?php the_title(); ?></h1>
	<!-- end Title -->
		<!-- post-<?php the_ID(); ?> -->
		<div <?php post_class($pos); ?> id="post-<?php the_ID(); ?>" >
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="single_post">
				
			<div class="entry_content">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<div class="navigation">', 'after' => '</div>', 'next_or_number' => '', 'nextpagelink'     => __('Read More<big>&raquo;</big>'), 'previouspagelink' => __('<big>&laquo;</big>Go Back'))); ?>
			</div>
				
		</article>
		<?php endwhile; else: ?>
		<?php endif; ?>		
		
		</div>
		<!-- /post-<?php the_ID(); ?> -->
</section>
</td>
<!-- /Content section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>