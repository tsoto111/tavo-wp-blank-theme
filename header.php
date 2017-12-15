<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	
	<!-- Responsive Viewport -->
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- End Responsive Viewport -->
	
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php } ?>

	<!-- Stylesheets -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" media="only screen and (max-width:720px)" href="<?php bloginfo('template_url'); ?>/assets/css/mobile.css" type="text/css">
	<link rel="stylesheet" media="only screen and (min-width:721px) and (max-width:1024px)" href="<?php bloginfo('template_url'); ?>/assets/css/tablet.css" type="text/css">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header">
        <div class="container">
            <h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
            <p id="header-description"><?php bloginfo('description'); ?></p>
        </div>
    </header>
    <nav id="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </nav>
    <main class="main">
