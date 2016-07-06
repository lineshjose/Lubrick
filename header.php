<?php /*
	Template Name:Header
	URI: http://linesh.com/
	Description: This is a Free WordPress theme built-in widgets and a intuitive theme settings interface... Designed by <a href="http://linesh.com/">Linesh Jose</a>. Both the design and code are  released under a <a href="http://creativecommons.org/licenses/by/3.0//">Creative Commons Attribution 3.0 Unported</a> License.
	Version: 15.05
	Author: Linesh Jose 
	Author URI: http://linesh.com/
	Tags: light, white,Three-columns,  flexible-width, right-sidebar, left-sidebar,  threaded-comments, translation-ready,white, widgets
*/?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head profile="http://gmpg.org/xfn/11">
<title><?php lj_title();	?></title>
<meta name="description" content="<?php lj_description(); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="robots" content="<?php lj_robotx();?>" /> 
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="Creator" content="Linesh Jose( http://linesh.com/)" /> 

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />

	
<?php 
if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); 
	// Dynamic wp headers 
	wp_head(); 
?>

</head>

<body <?php body_class(); ?>>

<!-- Container -->
<div id="container">

<!-- Header -->	
<div id="header">
<header id="branding" role="banner">
<div class="logo">
	<hgroup>
		<?php if( get_option('lj_logo') && get_option('lj_logo_header') == "yes" )  { ?>
		<a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_option('lj_logo'); ?>" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		<?php } else if(get_option('lj_logo_header') == "default"  ||  !get_option('lj_logo_header') ){ ?> 
		<a href="<?php bloginfo('url'); ?>/"><img src="<?php echo  get_stylesheet_directory_uri();?>/images/logo.png" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" /></a> 		
		<?php } else if(get_option('lj_logo_header')=="no") { ?>
		<div class="title"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></div>
		<?php } ?>
		<div class="slogan"><?php bloginfo('description'); ?></div>
	</hgroup>
</div>
<header>
</div>		
<!-- end header -->	


<!-- Main Page -->	
<table id="page" cellpadding="0" cellspacing="0" width="100%">
<tr>