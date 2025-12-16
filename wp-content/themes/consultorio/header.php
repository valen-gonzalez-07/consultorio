<!DOCTYPE html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!-- mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="format-detection" content="telephone=no">

		<?php
		wp_head();
		?>
	</head>
	<body <?php body_class(); ?>>

	<header class="main-header">
		<nav class="nav-bar">
			<ul class="nav-links">
				<li><a href="#hero-banner">Inicio</a></li>
				<li><a href="#especialidades">Especialidades</a></li>
				<li><a href="#quien-soy">Quién soy</a></li>
				<li><a href="#contacto">Contacto</a></li>
			</ul>

			<button class="hamburger" aria-label="Abrir menú">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</nav>
	</header>



