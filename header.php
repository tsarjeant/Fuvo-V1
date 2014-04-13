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
</head>
<body> <!-- closed in footer.php -->
	<div class="container"> <!-- closed in footer.php -->
		<header>
			<a href="<?php echo get_option('home'); ?>" rtitle="<?php bloginfo('name'); ?> Home Page"><h1>FUVO</h1></a>
			<h3>Future Vocatons</h3>

			<div class="search"><!--THIS WILL BE A SEARCHBAR INPUT SPANNING THE WIDTH OF THE PAGE --></div>
		</header>