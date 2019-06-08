<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		<!-- Bootstrap core CSS -->


		<!-- Custom styles for this template -->
		<?php wp_head(); ?>

	</head>
	<body>
		<!-- Header -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dar fixed-top navbar-custom">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon" style="border-color: #eb7125!important;"></span>
			</button>
			<a class="navbar-brand" href="<?php echo site_url(); ?>"><img id="flogo" src="<?php bloginfo('template_url'); ?>/img/fLogo.png" height="50" alt=""></a>
			<?php
				wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse',
				'container_id'      => 'navbarsExampleDefault',
				'menu_class'        => 'nav navbar-nav ml-auto mt-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			) );
			?>


			<!--<div class="collapse navbar-collapse" id="navbarsExampleDefault">

				<ul class="navbar-nav ml-auto">
					<li class=nav-item active"">
	 					<a class="nav-link" href="#">HEM <span class="sr-only">(current)</span></a>
					</li>
					<li class=nav-item active"">
						<a class="nav-link" href="#">GALLERI <span class="sr-only">(current)</span></a>
					</li>
					<li class=nav-item active"">
						<a class="nav-link" href="#">PROJEKTGRUPPEN 2019 <span class="sr-only">(current)</span></a>
					</li>
					<li class=nav-item active"">
						<a class="nav-link" href="#">FÖR FÖRETAG<span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>-->

		</nav>
