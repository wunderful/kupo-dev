<?php

defined('ABSPATH') or die('Access Denied');

/*
|--------------------------------------------------------------------------
| Define paths
|--------------------------------------------------------------------------
|
| Firstly, we set up some paths which will allow us to include files a
| little easier later on.
|
*/

define('KUPO_LIB', get_template_directory() . '/lib');
define('KUPO_CLASSES', KUPO_LIB . '/classes');

/*
|--------------------------------------------------------------------------
| Register the autoloader
|--------------------------------------------------------------------------
|
| Now we'll set up the autoloader which will include classes when needed.
|
*/

require_once(KUPO_CLASSES . '/Kupo/Autoloader.php');

/*
|--------------------------------------------------------------------------
| Ajax
|--------------------------------------------------------------------------
|
| Set up AJAX functions.
|
*/

new Kupo\Ajax();

/*
|--------------------------------------------------------------------------
| Set up Styles
|--------------------------------------------------------------------------
|
| Handles the enqueueing of various stylesheets used throughout the theme.
|
*/

new Kupo\CSS();

/*
|--------------------------------------------------------------------------
| Editor Styles
|--------------------------------------------------------------------------
|
| Register custom editor styles.
|
*/

new Kupo\EditorStyles();

/*
|--------------------------------------------------------------------------
| Embeds
|--------------------------------------------------------------------------
|
| Handles embeds.
|
*/

new Kupo\Embeds();

/*
|--------------------------------------------------------------------------
| Image Sizes
|--------------------------------------------------------------------------
|
| Handle addition of new custom image sizes.
|
*/

new Kupo\ImageSizes();

/*
|--------------------------------------------------------------------------
| Set up Navigation
|--------------------------------------------------------------------------
|
| Register default navigation menus used throughout the theme and include
| a custom menu walker.
|
*/

new Kupo\Navigation();

/*
|--------------------------------------------------------------------------
| Set up Scripts
|--------------------------------------------------------------------------
|
| Handles the enqueueing of various scripts used throughout the theme.
|
*/

new Kupo\Scripts();

/*
|--------------------------------------------------------------------------
| Set up Sidebar
|--------------------------------------------------------------------------
|
| Registers any sidebars used throughout the theme.
|
*/

new Kupo\Sidebar();

/*
|--------------------------------------------------------------------------
| Theme Customizer
|--------------------------------------------------------------------------
|
| Set up Theme Customizer Options.
|
*/

new Kupo\ThemeCustomizer();

/*
|--------------------------------------------------------------------------
| Theme Support
|--------------------------------------------------------------------------
|
| Handle theme support.
|
*/

new Kupo\ThemeSupport();

/*
|--------------------------------------------------------------------------
| Wp Title
|--------------------------------------------------------------------------
|
| Filters the wp_title function for better SEO.
|
*/

new Kupo\WpTitle();