<?php if ( is_404() ) {} else { ?>

<footer class="footer">
	<div class="container-center">
		<div class="row">
			<div class="col-12">
				<div class="f-flex">
					<div class="f-left">						
						<span>
							<?php  ?>
							© Copyright <?php $y = date('Y'); echo $y; ?> <a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
						</span>
					</div>
					<!--Nav menu in footer-->
					<div class="f-right">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-in-footer'
								)
							);
						?>				
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php if ( is_home() || is_archive() || is_category() || is_search() ) {} else { ?>
	<section class="go-up">
		<a href="#"><i class="fas fa-angle-up"></i></a>
	</section>
<?php } ?>

<?php } ?>

<?php wp_footer(); ?>

</body>
</html>