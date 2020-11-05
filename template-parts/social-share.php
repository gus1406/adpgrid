<p><b>Share :</b></p>
<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="fb" target="blank_"><i class="fab fa-facebook-f"></i></a>
<a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="tw" target="blank_"><i class="fab fa-twitter"></i></a>
<a href="whatsapp://send?text=<?php the_permalink(); ?>" class="wa" data-action="share/whatsapp/share" target="blank_"><i class="fab fa-whatsapp"></i></a>
<a href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=&description=" class="ps" target="blank_"><i class="fab fa-pinterest"></i></a>
<span class="copy" onclick="OpenSL()"><i class="far fa-copy"></i></span>
<span class="copy-link" id="ShareLink">
	<?php the_permalink(); ?>
</span>