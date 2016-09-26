<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SC Codes Theme</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<header role="banner">
			<div class="site-name half left"><!-- site name and description  --></div>
			<div class="site-name half left">
				<h1 class="one-half-left" id="site-title">
					<a title="Creating a WordPress theme from static html - home" rel="home">WordPress Theme Building</a>
				</h1>
				<h2 id="site-description">Creating a WordPress theme from static html</h2>
			</div>
			 <!-- an aside in the header - this will be populated via a widget area later -->
			<aside class="header widget-area half right" role="complementary">
				<div class="widget-container">This will be a widget area in the header - address details (or anything else you like) goes here</div><!-- .widget-container -->
			</aside><!-- .half right -->
		</header><!-- header -->

		<!-- full width navigation menu - delete nav element if using top navigation -->
		<nav class="menu main"><?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			<div class="skip-link screen-reader-text"><a title="Skip to content" href="#content">Skip to content</a></div>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Latest news</a></li>
				<li><a href="#">Featured articles</a></li>
			</ul>
		</nav><!-- .main -->

		<div class="main">
