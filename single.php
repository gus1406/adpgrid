<?php get_header(); ?>

<main class="main-content">
	<div class="container-center">
		<div class="row">
			<div class="col-12">
				<?php 
					if ( have_posts() ) : 
						while ( have_posts() ) : the_post();
							?>
							<div class="main-single">
								<!--single head-->
								<div class="ms-head">
									<?php get_template_part( 'template-parts/head', 'single' ); ?>
								</div>

								<div class="ms-content">
									<?php the_content(); ?>
									<!--category in content-->
									<div class="msf-tags">						
										<?php the_category(' '); ?>
									</div>
								</div>

								<div class="ms-footer">
									<div class="msf-share">
										<!--social share-->
										<?php get_template_part( 'template-parts/social-share' ); ?>
									</div>					
								</div>

								<!--admin profile-->
								<div class="ms-admin-profile">
									<div class="img">
										<?php echo get_avatar( get_the_author_meta('user_email')); ?>
									</div>
									<div class="text">
										<h2><?php the_author(); ?></h2>
										<p>
											<?php
												/**
												 * @link https://developer.wordpress.org/reference/functions/get_the_author_meta/
												 */
												$author_desc = get_the_author_meta('description');
												if (empty($author_desc)) {
													echo "Change in profile > biography";
												} else {
													echo get_the_author_meta('description');
												}												
											?>
										</p>
									</div>
								</div>
								<!--
								<div class="ms-releated">
									<p><b>You may also like :</b></p>
									<div class="container-full">
										<div class="row">
											
										</div>
									</div>
								</div>
								-->
								<div class="ms-comments">
									<?php
										/**
										 * If comments are open or we have at least one comment, load up the comment template.
										 */
										if (comments_open()){
									    	comments_template();
										}
										
										/**
										 * include javascript for quick reply
										 */
										if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
									    	wp_enqueue_script('comment-reply', 'wp-includes/js/comment-reply', array(), false, true);
										}
									?>
								</div>

								<div class="ms-prev-next">
									<div class="prev">
										<?php echo get_previous_post_link( '%link', '&laquo; Previous Post', true ); ?>
									</div>
									<div class="next">
										<?php echo get_next_post_link( '%link', 'Next Post &raquo;' ,true ); ?>
									</div>
								</div>

							</div>
							<?php 
						endwhile;
					endif;
				?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>