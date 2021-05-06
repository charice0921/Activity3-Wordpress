<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package black
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet"  href="http://localhost/ecommerce/wp-content/themes/black/css/styles.css" type="text/css">
	
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="nav">
		<div class="logo-container">
		<img src="http://localhost/ecommerce/wp-content/uploads/2021/04/logo.jpg" alt="" class="logo">
		</div>
			
			<ul class ="Menu">
				<li><a class="active" href="http://localhost/ecommerce/" active-color="white">Home</a></li>
				<li><a href="http://localhost/ecommerce/?page_id=22" active-color="white">About</a></li>
				<li><a href="http://localhost/ecommerce/?page_id=24" active-color="white">Contact</a></li>
				<li><a href="http://localhost/ecommerce/?page_id=50" active-color="white">Shop</a></li>
				<li><a href="http://localhost/ecommerce/?page_id=51" active-color="white">Cart</a></li>

			</ul>
		

</div>





