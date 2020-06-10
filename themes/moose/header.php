<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

    <?php
    /**
     * @see moose_elated_header_meta() - hooked with 10
     * @see eltd_user_scalable - hooked with 10
     */
    ?>
	<?php do_action('moose_elated_header_meta'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
global $moose_elated_options;
extract(moose_elated_get_header_variables()); ?>


<?php get_template_part( 'framework/modules/ajax-loader' ); ?>
<?php get_template_part( 'framework/modules/sidearea' ); ?>
<div class="wrapper">
	<div class="wrapper_inner">
		<?php get_template_part( 'framework/modules/side-header' ); ?>
		<?php get_template_part( 'framework/modules/space-around-open' ); ?>
		<?php get_template_part( 'framework/modules/header' ); ?>
		<?php get_template_part( 'framework/modules/back-to-top' ); ?>
		<?php get_template_part( 'framework/modules/popup-menu' ); ?>
		<?php get_template_part( 'framework/modules/fullscreen-search' ); ?>
		<?php get_template_part( 'framework/modules/paspartu-open' ); ?>

		<div class="content <?php echo esc_attr($content_class); ?>">
		<?php $animation = get_post_meta(moose_elated_get_page_id(), "eltd_show-animation", true); ?>
			<?php if($moose_elated_options['page_transitions'] == "1" || $moose_elated_options['page_transitions'] == "2" || $moose_elated_options['page_transitions'] == "3" || $moose_elated_options['page_transitions'] == "4" || ($animation == "updown") || ($animation == "fade") || ($animation == "updown_fade") || ($animation == "leftright")){ ?>
				<div class="meta">
					<?php do_action('moose_elated_ajax_meta'); ?>
					<span id="eltd_page_id"><?php echo esc_html(moose_elated_get_page_id()); ?></span>
					<div class="body_classes"><?php echo esc_html(implode( ',', get_body_class())); ?></div>
				</div>
			<?php } ?>
			<div class="content_inner <?php echo esc_attr($animation);?> ">
				<?php if($moose_elated_options['page_transitions'] == "1" || $moose_elated_options['page_transitions'] == "2" || $moose_elated_options['page_transitions'] == "3" || $moose_elated_options['page_transitions'] == "4" || ($animation == "updown") || ($animation == "fade") || ($animation == "updown_fade") || ($animation == "leftright")){ ?>
					<?php do_action('moose_elated_visual_composer_custom_shortcodce_css');?>
				<?php } ?>