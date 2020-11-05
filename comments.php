<?php 
comment_form();

if (have_comments()) : ?>
    <ol class="post-comments">
        <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
            ));
        ?>
    </ol>
<?php
else :
	echo "<h3 class=\"text-center\">No comments</h3>";
endif;

?>