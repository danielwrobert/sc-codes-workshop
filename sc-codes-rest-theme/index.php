<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ThemeConf Workshop - Session 2</title>

	<?php wp_head(); ?>
</head>
<body>

	<div id-"page" class="wrap site">
		<header id="masthead" class="container-fluid site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="/" rel="home">SC Codes REST API Theme</a>
				</h1>
				<p class="site-description">Demo post output from WP-API</p>
			</div>
		</header><!-- header -->

		<div id="content" class="container-fluid site-content">
			<div class="button-group" role="group">
				<button id="prev-post" type="button" class="btn btn-primary">PREVIOUS POST</button>
				<button id="next-post" type="button" class="btn btn-primary">NEXT POST</button>
			</div>
			<div class="row">
				<div id="primary" class="content-area col-sm-7">
					<div id="post-content" class="post list-group"></div>
				</div>
				<article class="sidebar widget-area col-sm-4 col-sm-offset-1 list-group" role="complementary">
					<div class="widget-container list-group-item">
						<h3 class="widget-title">A sidebar widget</h3>
						<p>This is a sidebar widget, in your WordPress theme you can set these up to display across your site.</p>
					</div><!-- .widget-container -->
					<div class="widget-container list-group-item">
						<h3 class="widget-title">Another sidebar widget</h3>
						<p>A second sidebar widget, maybe you could use a plugin to display a social media feed, or simply list your most recent posts.</p>
					</div><!-- .widget-container -->
				</article>
			</div>
		</div>

		<footer id="colophon" class="container-fluid site-footer" role="contentinfo">
			<div class="site-info">
				<a href="https://wordpress.org/">Proudly powered by WordPress</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>

	<?php wp_footer(); ?>
</body>
</html>
