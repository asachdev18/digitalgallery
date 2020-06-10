<?php

if ( ! function_exists( 'moose_elated_get_font_weight_array' ) ) {
	/**
	 * Returns array of font weights
	 *
	 * @param bool $first_empty whether to add empty first member
	 *
	 * @return array
	 */
	function moose_elated_get_font_weight_array( $first_empty = false ) {
		$font_weights = array();

		if ( $first_empty ) {
			$font_weights[''] = esc_html__( 'Default', 'moose' );
		}

		$font_weights['100'] = esc_html__( '100 Thin', 'moose' );
		$font_weights['200'] = esc_html__( '200 Thin-Light', 'moose' );
		$font_weights['300'] = esc_html__( '300 Light', 'moose' );
		$font_weights['400'] = esc_html__( '400 Normal', 'moose' );
		$font_weights['500'] = esc_html__( '500 Medium', 'moose' );
		$font_weights['600'] = esc_html__( '600 Semi-Bold', 'moose' );
		$font_weights['700'] = esc_html__( '700 Bold', 'moose' );
		$font_weights['800'] = esc_html__( '800 Extra-Bold', 'moose' );
		$font_weights['900'] = esc_html__( '900 Ultra-Bold', 'moose' );

		return $font_weights;
	}
}
if ( ! function_exists( 'moose_elated_get_font_style_array' ) ) {
	/**
	 * Returns array of font styles
	 *
	 * @param bool $first_empty
	 *
	 * @return array
	 */
	function moose_elated_get_font_style_array( $first_empty = false ) {
		$font_styles = array();

		if ( $first_empty ) {
			$font_styles[''] = esc_html__( 'Default', 'moose' );
		}

		$font_styles['normal']  = esc_html__( 'Normal', 'moose' );
		$font_styles['italic']  = esc_html__( 'Italic', 'moose' );

		return $font_styles;
	}
}

if ( ! function_exists( 'moose_elated_get_text_transform_array' ) ) {
	/**
	 * Returns array of text transforms
	 *
	 * @param bool $first_empty
	 *
	 * @return array
	 */
	function moose_elated_get_text_transform_array( $first_empty = false ) {
		$text_transforms = array();

		if ( $first_empty ) {
			$text_transforms[''] = esc_html__( 'Default', 'moose' );
		}

		$text_transforms['none']       = esc_html__( 'None', 'moose' );
		$text_transforms['capitalize'] = esc_html__( 'Capitalize', 'moose' );
		$text_transforms['uppercase']  = esc_html__( 'Uppercase', 'moose' );
		$text_transforms['lowercase']  = esc_html__( 'Lowercase', 'moose' );
		$text_transforms['initial']    = esc_html__( 'Initial', 'moose' );
		$text_transforms['inherit']    = esc_html__( 'Inherit', 'moose' );

		return $text_transforms;
	}
}
if ( ! function_exists( 'moose_elated_get_text_decorations' ) ) {
	/**
	 * Returns array of text transforms
	 *
	 * @param bool $first_empty
	 *
	 * @return array
	 */
	function moose_elated_get_text_decorations( $first_empty = false ) {
		$text_decorations = array();

		if ( $first_empty ) {
			$text_decorations[''] = esc_html__( 'Default', 'moose' );
		}

		$text_decorations['none']         = esc_html__( 'None', 'moose' );
		$text_decorations['underline']    = esc_html__( 'Underline', 'moose' );

		return $text_decorations;
	}
}

if ( ! function_exists( 'moose_elated_get_arrows_type' ) ) {

	function moose_elated_get_arrows_type() {
		return array(
			'fa fa-angle-double-' => 'fa-angle-double',
			'fa fa-angle-' => 'fa-angle',
			'fa fa-arrow-circle-' => 'fa-arrow-circle',
			'fa fa-arrow-circle-o-' => 'fa-arrow-circle-o',
			'fa fa-arrow-' => 'fa-arrow',
			'fa fa-caret-' => 'fa-caret',
			'fa fa-caret-square-o-' => 'fa-caret-square-o',
			'fa fa-chevron-circle-' => 'fa-chevron-circle',
			'fa fa-chevron-' => 'fa-chevron',
			'fa fa-hand-o-' => 'fa-hand-o',
			'fa fa-long-arrow-' => 'fa-long-arrow',
			'arrow_' => 'arrow',
			'arrow_carrot-' => 'arrow_carrot',
			'arrow_carrot-2' => 'arrow_carrot-2',
			'arrow_carrot-left_alt2' => 'arrow_carrot alt2',
			'arrow_carrot-2left_alt2' => 'arrow_carrot 2 alt2',
			'arrow_triangle-' => 'arrow_triangle',
			'arrow_triangle-left_alt2' => 'arrow_triangle alt2',
			'icon-arrows-drag-' => 'icon-arrows-drag',
			'icon-arrows-drag-left-dashed' => 'icon-arrows-drag dashed',
			'icon-arrows-keyboard-' => 'icon-arrows-keyboard',
			'icon-arrows-' => 'icon-arrows',
			'icon-arrows-left-double-32' => 'icon-arrows double',
			'icon-arrows-move-' => 'icon-arrows-move',
			'icon-arrows-sign-' => 'icon-arrows-sign',
			'icon-arrows-slide-left1' => 'icon-arrows-slide 1',
			'icon-arrows-slide-left2' => 'icon-arrows-slide 2',
			'icon-arrows-slim-' => 'icon-arrows-slim',
			'icon-arrows-slim-left-dashed' => 'icon-arrows-slim dashed',
			'icon-arrows-square-' => 'icon-arrows-square',
			'ion-arrow-left-a' => 'ion-arrow a',
			'ion-arrow-left-b' => 'ion-arrow b',
			'ion-arrow-left-c' => 'ion-arrow c',
			'ion-chevron-' => 'ion-chevron',
			'ion-ios-arrow-' => 'ion-ios-arrow',
			'ion-ios-arrow-thin-' => 'ion-ios-arrow-thin',
			'ion-ios-fastforward' => 'ion-ios fastforward/rewind',
			'ion-ios-fastforward-outline' => 'ion-ios fastforward/rewind outline',
			'ion-ios-skipbackward' => 'ion-ios skipbackward/skipforward',
			'ion-ios-skipbackward-outline' => 'ion-ios skipbackward/skipforward outline',
			'ion-android-arrow-' => 'ion-android-arrow',
			'ion-android-arrow-drop' => 'ion-android-arrow-dropleft/dropright',
			'ion-android-arrow-dropleft-circle' => 'ion-android-arrow-dropleft/dropright circle'
		);
	}
}
if ( ! function_exists( 'moose_elated_get_double_arrows_type' ) ) {

	function moose_elated_get_double_arrows_type() {
		return array(
			'fa fa-angle-double-' => 'fa-angle-double',
			'arrow_carrot-2' => 'arrow_carrot-2',
			'arrow_carrot-2left_alt2' => 'arrow_carrot 2 alt2',
			'icon-arrows-left-double-32' => 'icon-arrows double',
			'icon-arrows-move-' => 'icon-arrows-move',
			'ion-ios-fastforward' => 'ion-ios fastforward/rewind',
			'ion-ios-fastforward-outline' => 'ion-ios fastforward/rewind outline',
			'ion-ios-skipbackward' => 'ion-ios skipbackward/skipforward',
			'ion-ios-skipbackward-outline' => 'ion-ios skipbackward/skipforward outline',
		);
	}
}
if ( ! function_exists( 'moose_elated_get_arrows_up_type' ) ) {

	function moose_elated_get_arrows_up_type() {
		return array(
			'fa fa-arrow-circle-o-up' => 'fa-arrow-circle-o-up',
			'fa fa-arrow-circle-up' => 'fa-arrow-circle-up',
			'fa fa-arrow-up' => 'fa-arrow-up',
			'fa fa-long-arrow-up' => 'fa-long-arrow-up',
			'fa fa-caret-square-o-up' => 'fa-caret-square-o-up',
			'fa fa-caret-up' => 'fa-caret-up',
			'fa fa-chevron-circle-up' => 'fa-chevron-circle-up',
			'fa fa-chevron-up' => 'fa-chevron-up',
			'fa fa-angle-up' => 'fa-angle-up',
			'fa fa-angle-double-up' => 'fa-angle-double-up',
			'fa fa-hand-o-up' => 'fa-hand-o-up',
			'arrow_up' => 'arrow_up',
			'arrow_up_alt' => 'arrow_up_alt',
			'arrow_carrot-up' => 'arrow_carrot-up',
			'arrow_carrot-2up' => 'arrow_carrot-2up',
			'arrow_carrot-up_alt2' => 'arrow_carrot-up_alt2',
			'arrow_carrot-2up_alt2' => 'arrow_carrot-2up_alt2',
			'arrow_carrot_up_alt' => 'arrow_carrot_up_alt',
			'arrow_carrot-2up_alt' => 'arrow_carrot-2up_alt',
			'arrow_triangle-up' => 'arrow_triangle-up',
			'arrow_triangle-up_alt' => 'arrow_triangle-up_alt',
			'arrow_triangle-up_alt2' => 'arrow_triangle-up_alt2',
			'ion-arrow-up-a' => 'ion-arrow-up-a',
			'ion-arrow-up-b' => 'ion-arrow-up-b',
			'ion-arrow-up-c' => 'ion-arrow-up-c',
			'ion-chevron-up' => 'ion-chevron-up',
			'ion-ios-arrow-up' => 'ion-ios-arrow-up',
			'ion-ios-arrow-thin-up' => 'ion-ios-arrow-thin-up',
			'ion-android-arrow-up' => 'ion-android-arrow-up',
			'ion-android-arrow-dropup' => 'ion-android-arrow-dropup',
			'ion-android-arrow-dropup-circle' => 'ion-android-arrow-dropup-circle',
			'ion-android-navigate' => 'ion-android-navigate',
		);
	}
}
if ( ! function_exists( 'moose_elated_get_blockquote_type' ) ) {

	function moose_elated_get_blockquote_type() {

		return array(
			'fa fa-quote-right' => 'fa-quote-right',
			'fa fa-quote-left' => 'fa-quote-left',
			'icon_quotations' => 'icon_quotations',
			'icon_quotations_alt' => 'icon_quotations_alt',
			'icon_quotations_alt2' => 'icon_quotations_alt2',
			'ion-quote' => 'ion-quote',
		);
	}
}