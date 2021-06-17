<?php include("config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Placeholder for Keywords">
	<meta name="description" content="Placeholder for website description">
	<link href="<?php echo INCLUDE_PATH; ?>style/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>style/styles.css">
	<title>Project ONE</title>
</head>

<body>
	<base base="<?php echo INCLUDE_PATH; ?>"/>
	<?php

	$url = isset($_GET['url']) ? $_GET['url'] : 'home';

	switch ($url) {

		case 'about':
			echo '<target target="about"/>';
			break;
		case 'services':
			echo '<target target="services"/>';
			break;
	}

	?>

	<header>

		<div class="center">

			<div class="logo left"><a href="/">Logo</a></div>
			<!--Logo-Goes-Here-->

			<nav class="desktop right">

				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>about">About</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>services">Products</a></li>
					<li><a realTime="contact" href="<?php echo INCLUDE_PATH; ?>contact">Contact</a></li>
				</ul>

			</nav>
			<nav class="mobile right">
				<div class="menu-btn-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>about">About</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>services">Products</a></li>
					<li><a realTime="contact" href="<?php echo INCLUDE_PATH; ?>contact">Contact</a></li>
				</ul>

			</nav>
			<div class="clear"></div>
		</div>
	</header>

	<div class="main-content">

		<?php

		if (file_exists('pages/' . $url . '.php')) {
			include('pages/' . $url . '.php');
		} else {
			if ($url != "about" && $url != "services") {
				include('pages/404.php');
			} else {
				include('pages/home.php');
			}
		}

		?>


	</div>

	<footer>

		<div class="center">

			<p>Rodrigo TBW - AKA: Azaghalo - All rights reserved</p>

		</div>

	</footer>

	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.min.js"></script>

	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>

	<script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>

	<script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>

</body>

</html>