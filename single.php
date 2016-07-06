<?php /*
	Template Name: Single post view
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
			<header class="entry_header">
				<ul class="metadata">
				<li class="author">
					<div>Written by:</div>
					<a href="<?php echo get_author_posts_url(get_the_author_id());?>" title="<?php the_author();?>" alt="<?php the_author();?>" class="auth_link"><?php the_author();?></a>
					<div class="clearall"></div>
				</li>
				
					<li class="date">
						<div>Written On:</div>
						<!-- Post Date-->
						<a href="<?php echo get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d')); ?>/" >
						<time datetime="<?php echo get_the_date('c'); ?>" pubdate="<?php echo get_the_date('c'); ?>"><?php echo get_the_date() ; ?></time></a>
					</li>
					<li class="category">
						<div>Written In:</div>
						<?php the_category(' , ') ?>
					</li>
					
					<li class="comment">
						<div>Comments:</div>
						<!-- Post Comments-->
						<?php comments_popup_link(__('No Comments', 'lj'), __('1 Comment', 'lj'), __('% Comments', 'lj'), '', __('Comments Closed', 'lj') ); ?>
					</li>
					<?php edit_post_link('Edit this','<!-- Post Edit--><li class="edit"><div>&nbsp;</div>','</li>'); ?> 
				</ul>
			</header>
			
			<div class="entry_content">
				

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<div class="navigation">', 'after' => '</div>', 'next_or_number' => '', 'nextpagelink'     => __('Read More<big>&raquo;</big>'), 'previouspagelink' => __('<big>&laquo;</big>Go Back'))); ?>
			</div>
				
		</article>
		<?php endwhile; else: ?>
		<?php endif; ?>		
		
		<?php comments_template(); ?>
			
		</div>
		<!-- /post-<?php the_ID(); ?> -->
</section>		
</td>
<!-- /Content section -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>