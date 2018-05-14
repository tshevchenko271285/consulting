<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header clearfix">
    <div class="header_menu-outer"></div>
    <?php
    wp_nav_menu( array(
        'theme_location'  => 'menu-1',
        'menu'            => '',
        'menu_id'         => '',
        'container'       => 'nav',
        'container_class' => 'header_menu',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'echo'            => true,
    ) );
    ?>
    <div class="header_boorger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>
