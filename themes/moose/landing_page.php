<?php
/*
Template Name: Landing Page
*/
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_id = moose_elated_get_page_id();
$moose_elated_sidebar = moose_elated_get_sidebar_layout(false);

$moose_elated_enable_page_comments = false;
if(get_post_meta($moose_elated_id, "eltd_enable-page-comments", true) == 'yes') {
	$moose_elated_enable_page_comments = true;
}

if(get_post_meta($moose_elated_id, "eltd_page_background_color", true) != ""){
	$moose_elated_background_color = 'background-color: '.esc_attr(get_post_meta($moose_elated_id, "eltd_page_background_color", true));
}else{
	$moose_elated_background_color = "";
}

$moose_elated_pagination_classes = '';
if( isset($moose_elated_options['pagination_type']) && $moose_elated_options['pagination_type'] == 'standard' ) {
	if( isset($moose_elated_options['pagination_standard_position']) && $moose_elated_options['pagination_standard_position'] !== '' ) {
		$moose_elated_pagination_classes .= "standard_".esc_attr($moose_elated_options['pagination_standard_position']);
	}
}
elseif ( isset($moose_elated_options['pagination_type']) && $moose_elated_options['pagination_type'] == 'arrows_on_sides' ) {
	$moose_elated_pagination_classes .= "arrows_on_sides";
}

if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
else { $paged = 1; }

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <?php
        if ( !empty(getenv('HTTP_USER_AGENT')) && (strpos( getenv('HTTP_USER_AGENT'), 'MSIE') !== false)) {
            echo('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');
        } ?>

        <?php
        /**
         * moose_elated_header_meta hook
         *
         * @see moose_elated_header_meta() - hooked with 10
         * @see moose_elated_user_scalable_meta() - hooked with 10
         */
        do_action('moose_elated_header_meta');
        ?>

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url($moose_elated_options['favicon_image']); ?>">
        <link rel="apple-touch-icon" href="<?php echo esc_url($moose_elated_options['favicon_image']); ?>"/>

        <?php wp_head(); ?>

    </head>

<body <?php body_class(); ?>>

<div class="wrapper">
    <div class="wrapper_inner">
        <div class="content content_top_margin_none">
            <div class="content_inner">
                <?php get_template_part( 'title' ); ?>
                <?php get_template_part('slider');?>
                <div class="full_width" <?php moose_elated_inline_style($moose_elated_background_color); ?>>
                    <div class="full_width_inner">
                        <?php if(($moose_elated_sidebar == "default")||($moose_elated_sidebar == "")) : ?>
                            <?php if (have_posts()) :
                                while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>
									<?php moose_elated_pages_wp_link_pages($moose_elated_pagination_classes); ?>
                                    <?php
                                    if($moose_elated_enable_page_comments){
                                        ?>
                                        <div class="container">
                                            <div class="container_inner">
                                                <?php
                                                comments_template('', true);
                                                ?>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php elseif($moose_elated_sidebar == "1" || $moose_elated_sidebar == "2"): ?>

                        <?php if($moose_elated_sidebar == "1") : ?>
                        <div class="two_columns_66_33 clearfix grid2">
                            <div class="column1">
                        <?php elseif($moose_elated_sidebar == "2") : ?>
                        <div class="two_columns_75_25 clearfix grid2">
                            <div class="column1">
                                <?php endif; ?>
                                <?php if (have_posts()) :
                                    while (have_posts()) : the_post(); ?>
                                        <div class="column_inner">

                                            <?php the_content(); ?>
											<?php moose_elated_pages_wp_link_pages($moose_elated_pagination_classes); ?>
                                            <?php
                                            if($moose_elated_enable_page_comments){
                                                ?>
                                                <div class="container">
                                                    <div class="container_inner">
                                                        <?php
                                                        comments_template('', true);
                                                        ?>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>


                            </div>
                            <div class="column2"><?php get_sidebar();?></div>
                        </div>
                        <?php elseif($moose_elated_sidebar == "3" || $moose_elated_sidebar == "4"): ?>
                        <?php if($moose_elated_sidebar == "3") : ?>
                        <div class="two_columns_33_66 clearfix grid2">
                            <div class="column1"><?php get_sidebar();?></div>
                            <div class="column2">
                                <?php elseif($moose_elated_sidebar == "4") : ?>
                                <div class="two_columns_25_75 clearfix grid2">
                                    <div class="column1"><?php get_sidebar();?></div>
                                    <div class="column2">
                                        <?php endif; ?>
                                        <?php if (have_posts()) :
                                            while (have_posts()) : the_post(); ?>
                                                <div class="column_inner">
                                                    <?php the_content(); ?>
													<?php moose_elated_pages_wp_link_pages($moose_elated_pagination_classes); ?>
                                                    <?php
                                                    if($moose_elated_enable_page_comments){
                                                        ?>
                                                        <div class="container">
                                                            <div class="container_inner">
                                                                <?php
                                                                comments_template('', true);
                                                                ?>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>


                                    </div>

                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>