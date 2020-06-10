<div class="date">
	<?php if(!moose_elated_post_has_title()) { ?>
		<a href="<?php the_permalink() ?>">
	<?php } ?>

<!--	<span class="date_text">--><?php //esc_html_e('Posted on','moose'); ?><!--</span>-->
	<span class="date_text">
		<i class="icon-calendar"></i>
	</span>
	<?php the_time(get_option('date_format')); ?>

	<?php if(!moose_elated_post_has_title()) { ?>
		</a>
	<?php } ?>
</div>