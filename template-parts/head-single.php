<?php 
	if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); 
?>							
<h1 class="article-title">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h1>
<span class="admin-time">
	<i class="fas fa-user"></i> <a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a> • <i class="fas fa-calendar"></i> <?php the_date(); ?>
</span>