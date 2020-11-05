<?php get_header(); ?>

<main class="main-content">
	<div class="container-center">
		<?php
			if ( is_category() ) {
				get_template_part( 'template-parts/category' );
			} else if ( is_search() ) {
				get_template_part( 'template-parts/search' );
			} else if ( is_archive() ) {
				get_template_part( 'template-parts/archive' );
			}
		?>
		<div class="row custom-row-article">
			<!--The post-->
			<?php 
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'post' );
					endwhile;
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
			?>
		</div>
		<div class="row">
			<div class="col-12">
				<!--Pagination-->
				<div class="pagination">
					<?php pagination(); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>