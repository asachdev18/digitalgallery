<?php

//Disable the default WooCommerce stylesheet.
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

if(!function_exists('moose_elated_woo_related_products_args')) {
    /**
     * Function that sets number of displayed related products. Hooks to woocommerce_output_related_products_args filter
     * @param $args array array of args for the query
     * @return mixed array of changed args
     */
    function moose_elated_woo_related_products_args( $args ) {
        global $moose_elated_options;
        if(isset($moose_elated_options['woo_products_list_number']) && $moose_elated_options['woo_products_list_number'] != ''){
            switch($moose_elated_options['woo_products_list_number']){
                case('columns-3') :
                    $args['posts_per_page'] = 3;
                    break;
                case('columns-4') :
                    $args['posts_per_page'] = 4;
                    break;
                default :
                    $args['posts_per_page'] = 3;
            }
        }
        else {
            $args['posts_per_page'] = 3;
        }
        return $args;
    }

    add_filter( 'woocommerce_output_related_products_args', 'moose_elated_woo_related_products_args' );
}

// Define number of products per page.
if(!function_exists('moose_elated_woo_product_per_page')) {
    /**
     * Function that sets number of products per page. Default is 12
     * @return int number of products to be shown per page
     */
    function moose_elated_woo_product_per_page() {
        global $moose_elated_options;

        $products_per_page = 12;
        if(isset($moose_elated_options['woo_products_per_page']) && $moose_elated_options['woo_products_per_page']) {
            $products_per_page = $moose_elated_options['woo_products_per_page'];
        }

        return $products_per_page;
    }

    add_filter('loop_shop_per_page', 'moose_elated_woo_product_per_page', 20);
}

// Hook in
add_filter('woocommerce_checkout_fields', 'moose_elated_custom_override_checkout_fields');

/**
 * Remove add to cart function from woocommerce_after_shop_loop_item_title hook
 * and hook it in eltd_woocommerce_after_product_info
 */
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
add_action('eltd_woocommerce_after_product_info', 'woocommerce_template_loop_add_to_cart', 10);

/**
 * Remove related products from woocommerce_after_single_product_summary hook
 * and hook it in eltd_woocommerce_related_products.With this action(eltd_woocommerce_related_products)
 *  related products now can be hooked separately from woocommerce tabs(accordions)
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
add_action('eltd_woocommerce_related_products', 'woocommerce_output_related_products', 5);


/**
 * Overrides placeholder values for checkout fields
 * @param array all checkout fields
 * @return array checkout fields with overriden values
 */
function moose_elated_custom_override_checkout_fields($fields) {
    //billing fields
    $args_billing = array(
        'first_name' => esc_html__('First name','moose'),
        'last_name'  => esc_html__('Last name','moose'),
        'company'    => esc_html__('Company name','moose'),
        'address_1'  => esc_html__('Address','moose'),
        'email'      => esc_html__('Email','moose'),
        'phone'      => esc_html__('Phone','moose'),
        'postcode'   => esc_html__('Postcode / ZIP','moose'),
        'city'   => esc_html__('City','moose'),
        'state'   => esc_html__('State','moose')
    );
    
    //shipping fields
    $args_shipping = array(
        'first_name' => esc_html__('First name','moose'),
        'last_name'  => esc_html__('Last name','moose'),
        'company'    => esc_html__('Company name','moose'),
        'address_1'  => esc_html__('Address','moose'),
        'postcode'   => esc_html__('Postcode / ZIP','moose')
    );
    
    //override billing placeholder values
    foreach ($args_billing as $key => $value) {
        $fields["billing"]["billing_{$key}"]["placeholder"] = $value;
    }
    
    //override shipping placeholder values
    foreach ($args_shipping as $key => $value) {
        $fields["shipping"]["shipping_{$key}"]["placeholder"] = $value;
    }

    return $fields;
}

// Adds theme support for woocommerce 
add_theme_support('woocommerce');

if(!function_exists('moose_elated_woocommerce_content_before')) {
	function moose_elated_woocommerce_content_before() {
		if ( !is_singular( 'product' ) ) {
			do_action( 'woocommerce_archive_description' );		 
		}
	}
}

if (!function_exists('moose_elated_woocommerce_content')){

    /**
     * Output WooCommerce content.
     *
     * This function is only used in the optional 'woocommerce.php' template
     * which people can add to their themes to add basic woocommerce support
     * without hooks or modifying core templates.
     *
     * @access public
     * @return void
     */
    function moose_elated_woocommerce_content() {

        if ( is_singular( 'product' ) ) {

            while ( have_posts() ) : the_post();

                 wc_get_template_part( 'content', 'single-product' );

            endwhile;

        } else {

            ?>            

            <?php if ( have_posts() ) : ?>

                <?php do_action('woocommerce_before_shop_loop'); ?>

                <?php woocommerce_product_loop_start(); ?>

                    <?php woocommerce_product_subcategories(); ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php  wc_get_template_part( 'content', 'product' ); ?>

                    <?php endwhile; // end of the loop. ?>

                <?php woocommerce_product_loop_end(); ?>

                <?php do_action('woocommerce_after_shop_loop'); ?>

            <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

                <?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>

            <?php endif;

        }
    }
}
if ( ! function_exists( 'moose_elated_woocommerce_output_product_data_tabs' ) ) {

	/**
	 * Output the product tabs.
	 *
	 * @access public
	 * @subpackage	Product/Tabs
	 * @return void
	 */
	function moose_elated_woocommerce_output_product_data_tabs() {
		woocommerce_get_template( 'single-product/tabs/tabs.php' );
                echo '</div>';
	}
}

add_filter( 'get_product_search_form' , 'moose_elated_woo_product_searchform');

/**
 * woo_custom_product_searchform
 *
 * @access      public
 * @since       1.0
 * @return      void
 */
function moose_elated_woo_product_searchform($form) {

    $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
		<div>
			<label class="screen-reader-text" for="s">' . esc_html__( 'Search for:', 'moose' ) . '</label>
			<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . esc_html__( 'Search Products', 'moose' ) . '" />
			<input type="submit" id="searchsubmit" value="&#xf002" />
			<input type="hidden" name="post_type" value="product" />
		</div>
	</form>';

    return $form;

}

if(!function_exists('moose_elated_woocommerce_share')) {
    function moose_elated_woocommerce_share() {
        global $moose_elated_options;

        $product_show_social_share = "no";
        if (isset($moose_elated_options['enable_social_share'])&& ($moose_elated_options['enable_social_share']) =="yes"){
            if (isset($moose_elated_options['post_types_names_product'])&& $moose_elated_options['post_types_names_product'] =="product"){
                if (isset($moose_elated_options['woo_product_single_show_social_share'])) {
                    $product_show_social_share = $moose_elated_options['woo_product_single_show_social_share'];

                    $product_social_share_type = "dropdown";
                    if(isset($moose_elated_options['woo_product_single_select_share_option'])){
                        $product_social_share_type = $moose_elated_options['woo_product_single_select_share_option'];
                    }
                }
            }
        }
        if($product_show_social_share == 'yes'){
            if($product_social_share_type == 'dropdown'){
                if(do_shortcode('[no_social_share]') != ""){
                    echo do_shortcode('[no_social_share]'); // XSS OK
                }
            }
            elseif($product_social_share_type == 'list'){
                if(do_shortcode('[no_social_share_list]') != ""){
                    echo '<div class="social_share_list_holder">';
                    echo do_shortcode('[no_social_share_list]'); // XSS OK
                    echo '</div>'; // close social_share_list_holder
                }
            }
        }

    }

    add_action('eltd_woocommerce_before_related_products', 'moose_elated_woocommerce_share');
}