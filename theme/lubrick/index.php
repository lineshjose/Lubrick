<?php /*
	Template Name:Index
	URI: http://lineshjose.com/
	Description: This is a Free WordPress theme built-in widgets and a intuitive theme settings interface... Designed by <a href="http://lineshjose.com/">Linesh Jose</a>. Both the design and code are  released under a <a href="http://creativecommons.org/licenses/by/3.0//">Creative Commons Attribution 3.0 Unported</a> License.
	Version: 11.09
	Author: Linesh Jose 
	Author URI: http://lineshjose.com
	Tags: light, white,Three-columns,  flexible-width, right-sidebar, left-sidebar,  threaded-comments, translation-ready,white, widgets
*/?>
<?php 
	get_header();
	$i=1; 
?>

	
	
<!-- Content section -->
<td id="content">
<section role="main">
	<!-- Title -->
	<h1  class="noborder">
		<?php if (is_category()): ?><?php single_cat_title(); ?> 
		<?php elseif (is_day()): ?>Archive for "<?php the_time('F jS, Y'); ?>"
		<?php elseif (is_month()): ?>Archive for "<?php the_time('F, Y'); ?>"
		<?php elseif (is_year()): ?>Archive for "<?php the_time('Y'); ?>"
		<?php elseif (is_tag()): ?>Archive for "<?php single_tag_title(); ?> "
		<?php elseif (is_search()): ?>Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;
		<?php elseif (is_author()): 
			if(get_query_var('author_name')) :
			$curauth = get_userdatabylogin(get_query_var('author_name'));
			else :
			$curauth = get_userdata(get_query_var('author'));
			endif;
			echo $curauth->display_name; ?>'s  Archives  <?php echo get_the_author() ;?>
		<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>Blog Archives
		<?php elseif (is_home()): ?>Latest Posts
		<?php else: ?>Page not found.
		<?php endif; ?></h1>
	<!-- end Title -->
	
<?php if (have_posts()) {?>

		<!-- Posts lists -->
		<ul class="posts">
		<?php   while (have_posts()) : the_post();
		
		$title="Read about :".get_the_title();
		?>
		<!-- post-<?php the_ID(); ?> -->
			<li  <?php post_class($pos); ?> id="post-<?php the_ID(); ?>" >
				<article>
					<header class="entry_header">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark"  title="Read '<?php the_title(); ?>'"><?php the_title(); ?></a></h2>
						<div class="date"><time datetime="<?php echo get_the_date('c'); ?>" pubdate="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(__('F jS, Y', 'lj')) ; ?></time></div>
					</header>
					<div class="entry_content">
						
						<?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail(get_the_ID()))) {?>
						<div class="thumb">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo $title ?>">
							<?php the_post_thumbnail('blog-thumbnail', array('title' => $title,'alt' => $title, 'class' => 'thumb_img'));?>
						</a>
						</div>
						<?php }?>
						<div class="excerpt"><?php the_excerpt(); ?></div>
					</div>
					
					<footer class="entry_footer">
						<?php printf(__('Posted in %s', 'lj'), get_the_category_list(', ')); ?> | 
						<?php edit_post_link(__('Edit', 'lj'), '', ' | '); ?>  
						<?php comments_popup_link(__('No Comments &#187;', 'lj'), __('1 Comment &#187;', 'lj'), __('% Comments &#187;', 'lj'), '', __('Comments Closed', 'lj') ); ?>
					</footer>
				</article>
				<div class="clearall"></div>
			</li>
			<!-- /post-<?php the_ID(); ?> -->
		<?php echo $break ;?>
		<?php endwhile; // end of one post ?>
		</ul>
		
		
		<?php if (  $wp_query->max_num_pages > 1 ) { ?>
		<!-- Pagination starts -->
		<div class="pagination">
			<?php lj_pagination();?>
			<div class="clearall"></div>
		</div>
		<!-- Pagination ends -->
		<?php } ?>
		
		
<?php }  else {?>

	<article id="post-0" class="posts no-results not-found" style="padding-top:10px;">
		<header class="entry_header">
			<h2 class="entry_title"><?php _e( 'Nothing Found', 'lj' ); ?></h2>
		</header><!-- .entry-header -->
		<div class="entry_content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'lj' ); ?></p>
		</div><!-- .entry-content -->
	</article>
<?php }?>
</section>
</td>	
<!-- /Content section -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>