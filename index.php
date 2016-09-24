<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ThemeConf Workshop - Session 2</title>

	<?php wp_head(); ?>

	<style>
		h1 {
			margin-top: 0;
		}

		img,
		.wp-caption {
			max-width: 100%;
		}

		#new-post {
			margin-bottom: 15px;
		}

		.post-title,
		.post-content {
			overflow-wrap: break-word;
			word-wrap: break-word;
		}
	</style>
</head>
<body>

	<div class="wrap">
		<header class="page-header">
			<div class="container">
				<h1>API Theme Example <small>Demo post output from WP-API</small></h1>
			</div>
		</header>

		<div id="page" class="container">
			<button id="new-post" type="button" class="btn btn-primary">NEW POST</button>
			<div id="content" class="list-group"></div>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
