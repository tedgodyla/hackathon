<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="keywords" content="<?= $keywords; ?>" />
	<meta name="description" content="<?= $description; ?>" />
	<meta name="author" content="<?= $author; ?>" />
	<meta name="robots" content="<?= $robots; ?>" />
	
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	
	<link href="lib/css/reset.css" rel="stylesheet">
	<link href="lib/css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="lib/js/html5shim.js"></script>
	<![endif]-->
	<script src="lib/js/jquery-2.1.1.min.js"></script>
	<script src="lib/js/TweenMax.min.js"></script>
	<script src="lib/js/functions.js"></script>
	<script src="lib/js/events.js"></script>
	<script src="lib/js/interaction.js"></script>
	<script src="lib/js/animation.js"></script>
	<script src="lib/js/main.js"></script>
	<title><?= $title ?></title>
</head>
<body>
	<header>
		<section class="wrapper">
			<div class="logo">
				<a href="/hackathon"></a>
			</div>
			<nav>
				<ul class="menu-right">
					<?php foreach ($menuItem as $menuItemKey => $menuItemValue): ?>
						<?php $class = ($page == $menuItemValue[1]) ? " class='active'" : "" ;?>
						<li<?= $class; ?>><a href="/hackathon/?page=<?= $menuItemValue[1]; ?>"><?= $menuItemValue[0]; ?></a></li>
					<?php endforeach; ?>
					<?php $class = ($page == "jouw-profiel") ? " class='active'" : "" ;?>
					<li<?= $class; ?>><a href="/hackathon/?page=jouw-profiel">Jouw profiel</a></li>
				</ul>
				<div class="clear"></div>
			</nav>
			<div class="clear"></div>
		</section>
	</header>