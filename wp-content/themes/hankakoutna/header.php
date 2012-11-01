<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 */
?>
<!doctype html>
<html class="no-js" lang="cs" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--[if lt IE 7 ]>
    <script>document.documentElement.className += ' ie6';</script> <![endif]-->
    <!--[if IE 7 ]>
    <script>document.documentElement.className += ' ie7';</script> <![endif]-->
    <!--[if IE 8 ]>
    <script>document.documentElement.className += ' ie8';</script> <![endif]-->
    <title><?php wp_title(); ?></title>
    <meta name="description" content="">
    <meta name="author" content="Netfinity Digital Media s.r.o.">
    <meta name="viewport" content="width=device-width">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
	<?php
	wp_head();
?>	
</head>

<body>
    <header class="clearfix">
        <h1 class="logo">
            <a href="/" title="Hanka Koutná">
                Hanka Koutná moderátorka
            </a>
        </h1>
        <nav>
            <ul>
                <li><a href="/" title="Úvod">úvod</a></li>
                <li><a href="/par-slov" title="Pár slov">pár slov</a></li>
                <li><a href="/reference" title="Reference">reference</a></li>


                <li><a href="/kontakt" title="Kontakt">kontakt</a></li>
                <li><a href="/blog" title="Blog">blog</a></li>
                <li><a href="/galerie" title="Galerie">galerie</a></li>
            </ul>
        </nav>
    </header>
	