<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>amis-world.com</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/amis-world-style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Henny+Penny&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/c94db687b2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css"
		type="text/css" media="all" />
</head>

<body>
	<!-- header タブメニューの応用で作っていく -->
	<header class="fixed">
		<img src="<?php echo get_template_directory_uri(); ?>/logo-img/amis-logo.png" alt="AmisWorld">
		<ul class="header-menu">
			<li><a href="#page0" class="active">HOME</a></li>
			<li>
				<div class="toggle-gallery-menu">GALLERY <span class="rotate">▾</span></div>
				<div id="toggle-js-gallery">
					<div><a href="<?php echo get_template_directory_uri(); ?>/gallery-link-page/gallery-top.html">GALLERY TOP</a></div>
					<div><a href="<?php echo get_template_directory_uri(); ?>/gallery-link-page/gallery-highway.html">高速道路チャレンジ</a></div>
					<div><a href="<?php echo get_template_directory_uri(); ?>/gallery-link-page/gallery-complete.html">市町村コンプリート編</a></div>
					<div><a href="<?php echo get_template_directory_uri(); ?>/gallery-link-page/gallery-picture-book.html">絵本シリーズ</a></div>
					<div><a href="<?php echo get_template_directory_uri(); ?>/gallery-link-page/gallery-island.html">離島編</a></div>
				</div>
			</li>
			<li><a href="#page1">PROFILE</a></li>
			<li><a href="#page2">CONTACT</a></li>
		</ul>
		<!-- ハンバーガーメニュー -->
		<button class="menu-trigger">
			<span></span>
			<span></span>
			<span></span>
		</button>
		<!-- ドロワー -->
		<div id="drower-bg">
			<ul class="jscontent">
				<li class="js-1"><a href="#page0" class="active">HOME</a></li>
				<li class="js-1"><a href="<?php echo get_template_directory_uri(); ?>/gallery-link-page/gallery-highway.html">GALLERY</a></li>
				<li class="js-1"><a href="#page1">PROFILE</a></li>
				<li class="js-1"><a href="#page2">CONTACT</a></li>
			</ul>
		</div>
	</header>
	<!-- header ここまで -->