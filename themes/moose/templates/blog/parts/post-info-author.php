<!--<div class="post_info_author_holder">--><?php //esc_html_e('by', 'moose'); ?><!-- <a class="post_author_link" href="--><?php //echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?><!--">--><?php //the_author_meta('display_name'); ?><!--</a></div>-->
<div class="post_info_author_holder">
	<i class="icon-user"></i>
	<a class="post_author_link" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php the_author_meta('display_name'); ?></a>
</div>
