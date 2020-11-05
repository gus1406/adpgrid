<?php get_header(); ?>

<main class="page-not-found">
	<div class="img">
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/404.png'; ?>" alt="404 image">
	</div>
	<h1>Page Not Found</h1>
	<p><a href="<?php echo esc_url( get_home_url() ); ?>">Back Home <i class="fas fa-home"></i></a></p>
</main>

<?php get_footer(); ?>