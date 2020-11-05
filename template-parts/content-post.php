<div class="col-4 custom-col">
	<article class="box-article">
		<div class="ba-image">
			<a href="<?php the_permalink(); ?>">
				<?php
					/**
					 * Post thumbnail
					 *
					 * ref : https://codex.wordpress.org/Post_Thumbnails
					 */
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} else {
						echo '<img src="'.esc_url( get_stylesheet_directory_uri() . '/assets/img/undraw.co.default.png' ).'">';
					}
				?>			
			</a>
		</div>
		<div class="ba-detail">
			<span class="category">
				<?php the_category(); ?>
			</span>
			<h1 class="title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>
			<span class="author-time">
				Oleh <a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a> • <?php the_date(); ?>
			</span>
		</div>
	</article>
</div>