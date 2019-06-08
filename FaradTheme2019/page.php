<?php get_header(); ?>
	<div style="
		background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('<?php bloginfo('template_url'); ?>/img/massa2.jpg') no-repeat center center fixed;
		display: table;
		height: 40%;
		position: relative;
		width: 100%;
		background-size: cover;">
	</div>
	<div class="padding bg-light anim hid">
		<div id="page" class="container border bg-white">

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="col-sm-12 w-100 "> 

					<?php the_content(); ?>

				</div>

				<?php endwhile; ?>
				<?php endif; ?>


		</div>
	</div>
<?php get_footer(); ?>