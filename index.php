<!DOCTYPE html>
<!--[if lt IE 9]><html class="lt-ie9" lang="en"><![endif]-->
<!--[if gte IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="UTF-8" />
	<title>Maribeth's Puppy Gallery</title>
	<meta name="description" content="iMarc, LLC" />
	<meta name="author" content="Design, programming, by iMarc. More info at http://imarc.net" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="./css/styles.css" media="all" />
	<script src="./js/jquery-1.11.3.js"></script>
	<script src="./js/main.js"></script>

	<!--[if IE]>
	<script src="./js/html5shiv.js"></script>
	<![endif]-->
	<style>
		.images img {
			display: inline-block;
			margin: .5em;
			max-width: 200px;
		}
	</style>
</head>
<body>
<header class="primary" role="banner">
	<div class="container">
		<div class="branding">
			<h1>
				<a href="">UX Workgroup</a>
			</h1>
		</div>
	</div>
</header>

<div class="torso container">
	<div class="main" role="main">
		<header>
			<h1>
				Puppy Gallery
			</h1>
		</header>

		<section class="gallery">
			<div class="images">
				<img src="/img/puppy-1.jpg" alt="Cute puppy #1">
				<img src="/img/puppy-2.jpg" alt="Cute puppy #2">
				<img src="/img/puppy-3.jpg" alt="Cute puppy #3">
				<img src="/img/puppy-4.jpg" alt="Cute puppy #4">
			</div>

			<button class="button get-more">Load More</button>
		</section>


	</div>
</div>

<footer class="primary" role="contentinfo">
	<div class="container">
		<div class="copyright">©2013 iMarc LLC.</div>
	</div>
</footer>
</body>
</html>