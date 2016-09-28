<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ThemeConf Workshop - Session 2</title>

	<?php wp_head(); ?>
</head>
<body>

	<div class="wrap">
		<header class="page-header container-fluid">
			<h1>API Theme Example <small>Demo post output from WP-API</small></h1>
		</header>

		<div id="page" class="container">
			<button id="new-post" type="button" class="btn btn-primary">NEW POST</button>
			<div id="content" class="list-group"></div>
		</div>

		<footer class="container-fluid site-footer">
			<div class="site-info">
				<a href="https://wordpress.org/">Proudly powered by WordPress</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>

	<?php wp_footer(); ?>
</body>
</html>
