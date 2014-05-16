<!-- header.php -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="FUVO" content="">
<meta name="viewport" content="width=device-width">
<title> <?php wp_title("|", true, "right"); ?> <?php bloginfo('name'); ?></title>
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/www/css/style.css">
<script type="text/javascript" src="//use.typekit.net/eor1ixy.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="wp-content/themes/Fuvo V1/www/js/scripts.js"></script>
<?php wp_head(); ?>


</head>
<body> <!-- closed in footer.php -->
	<div class="container"> <!-- closed in footer.php -->
		<header>
			<div>
			<a href="<?php echo get_option('home'); ?>" rtitle="<?php bloginfo('name'); ?> Home Page"><h1></h1></a>
			<h3>Explore Exciting Vocations</h3>

			<?php get_search_form(); ?>
			</div>

		</header>
		<div class="content">