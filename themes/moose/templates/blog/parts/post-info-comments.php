<!--<div class="post_comments_holder"><a class="post_comments" href="--><?php //comments_link(); ?><!--" target="_self">--><?php //comments_number('0 ' . esc_html__('Comments','moose'), '1 '.esc_html__('Comment','moose'), '% '.esc_html__('Comments','moose') ); ?><!--</a></div>-->
<div class="post_comments_holder">
	<i class="icon-bubble"></i>
	<a class="post_comments" href="<?php comments_link(); ?>" target="_self">
		<?php comments_number('0 ' . esc_html__('Comments','moose'), '1 '.esc_html__('Comment','moose'), '% '.esc_html__('Comments','moose') ); ?>
	</a>
</div>