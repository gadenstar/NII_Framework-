<!DOCTYPE html>
<html <?php language_attributes( 'html' ) ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo _wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />

	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<?php wp_head() // For plugins ?>
</head>


<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">
	<?php //get_template_part("framework/headers/innerheader-2"); ?>
	<div id="header">
		<div class="uk-container uk-container-center">
			<h1 id="blog-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo _wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
			<div id="blog-description"><?php bloginfo('description') ?></div>
		</div>
	</div><!--  #header -->
	<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary-menu' ) ); ?>	
