<?php

$moose_elated_icon_collections = moose_elated_return_icon_collections();
//Masonry Gallery Metaboxes

//General settings for text, buttons, links
$eltdMasonryGalleryItemGeneral = new MooseElatedMetaBox(
	"masonry_gallery",
	esc_html__( "Masonry Gallery General", 'moose' )
);
moose_elated_meta_boxes()->addMetaBox(
	"masonry_gallery_item_general",
	$eltdMasonryGalleryItemGeneral
);

$eltd_masonry_gallery_item_subtitle = new MooseElatedMetaField(
	'text',
	'eltd_masonry_gallery_item_subtitle',
	'',
	esc_html__( 'Subtitle', 'moose' ),
	''
);
$eltdMasonryGalleryItemGeneral->addChild(
	'eltd_masonry_gallery_item_subtitle',
	$eltd_masonry_gallery_item_subtitle
);

$eltd_masonry_gallery_item_text = new MooseElatedMetaField(
	'text',
	'eltd_masonry_gallery_item_text',
	'',
	esc_html__( 'Text', 'moose' ),
	''
);
$eltdMasonryGalleryItemGeneral->addChild(
	'eltd_masonry_gallery_item_text',
	$eltd_masonry_gallery_item_text
);

$eltd_masonry_gallery_item_link = new MooseElatedMetaField(
	'text',
	'eltd_masonry_gallery_item_link',
	'',
	esc_html__( 'Link', 'moose' ),
	''
);
$eltdMasonryGalleryItemGeneral->addChild(
	'eltd_masonry_gallery_item_link',
	$eltd_masonry_gallery_item_link
);

$eltd_masonry_gallery_item_link_target = new MooseElatedMetaField(
	'select',
	'eltd_masonry_gallery_item_link_target',
	'_self',
	esc_html__( 'Link target', 'moose' ),
	'',
	array(
		'_self' => esc_html__( 'Self', 'moose' ),
		'_blank' => esc_html__( 'Blank', 'moose' )
	)
);
$eltdMasonryGalleryItemGeneral->addChild(
	'eltd_masonry_gallery_item_link_target',
	$eltd_masonry_gallery_item_link_target
);

$eltd_masonry_item_parallax = new MooseElatedMetaField(
	"select",
	"eltd_masonry_item_parallax",
	"no",
	esc_html__( "Set Item in Parallax", 'moose' ),
	"",
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdMasonryGalleryItemGeneral->addChild(
	"eltd_masonry_item_parallax",
	$eltd_masonry_item_parallax
);

$eltd_masonry_item_subtitle_separator = new MooseElatedMetaField(
	"select",
	"eltd_masonry_item_subtitle_separator",
	"no",
	esc_html__( "Enable Separator Around Subtitle", 'moose' ),
	"",
	array(
		"no" => esc_html__( "No", 'moose' ),
		"yes" => esc_html__( "Yes", 'moose' )
	)
);
$eltdMasonryGalleryItemGeneral->addChild(
	"eltd_masonry_item_subtitle_separator",
	$eltd_masonry_item_subtitle_separator
);

//Masonry Gallery Style - Size, Type
$section_style_title = new MooseElatedTitle(
	'section_style_title',
	esc_html__( 'Masonry Gallery Item Style', 'moose' )
);
$eltdMasonryGalleryItemGeneral->addChild(
	'section_style_title',
	$section_style_title
);

$eltd_masonry_gallery_item_size = new MooseElatedMetaField(
	'select',
	'eltd_masonry_gallery_item_size',
	'square_small',
	esc_html__( 'Size', 'moose' ),
	'size',
	array(
		'square_small' => esc_html__( 'Square Small', 'moose' ),
		'square_big' => esc_html__( 'Square Big', 'moose' ),
		'rectangle_portrait' => esc_html__( 'Rectangle Portrait', 'moose' ),
		'rectangle_landscape' => esc_html__( 'Rectangle Landscape', 'moose' )
	)
);
$eltdMasonryGalleryItemGeneral->addChild(
	'eltd_masonry_gallery_item_size',
	$eltd_masonry_gallery_item_size
);

$eltd_masonry_gallery_item_type = new MooseElatedMetaField(
	'select',
	'eltd_masonry_gallery_item_type',
	'with_button',
	esc_html__( 'Type', 'moose' ),
	'type',
	array(
		'with_button' => esc_html__( 'With Button', 'moose' ),
		'with_icon' => esc_html__( 'With Icon', 'moose' ),
		'standard' => esc_html__( 'Standard', 'moose' )
	),
	array(
		'dependence' => true,
		'hide'       => array(
			'with_button' => '',
			'with_icon'   => '#eltdf_eltd_masonry_gallery_item_button_type_container',
			'standard'    => '#eltdf_eltd_masonry_gallery_item_button_type_container, #eltdf_eltd_masonry_gallery_item_icon_type_container'
		),
		'show'       => array(
			'with_button' => '#eltdf_eltd_masonry_gallery_item_button_type_container',
			'#eltdf_eltd_masonry_gallery_item_icon_type_container',
			'with_icon'   => '#eltdf_eltd_masonry_gallery_item_icon_type_container',
			'standard'    => ''
		)
	)
);
$eltdMasonryGalleryItemGeneral->addChild(
	'eltd_masonry_gallery_item_type',
	$eltd_masonry_gallery_item_type
);

$eltd_masonry_gallery_item_button_type_container = new MooseElatedContainer(
	'eltd_masonry_gallery_item_button_type_container',
	'eltd_masonry_gallery_item_type',
	'',
	array( 'standard', 'with_icon' )
);
$eltdMasonryGalleryItemGeneral->addChild(
	'eltd_masonry_gallery_item_button_type_container',
	$eltd_masonry_gallery_item_button_type_container
);

$eltd_masonry_gallery_button_label = new MooseElatedMetaField(
	'text',
	'eltd_masonry_gallery_button_label',
	'',
	esc_html__( 'Button Label', 'moose' ),
	''
);
$eltd_masonry_gallery_item_button_type_container->addChild(
	'eltd_masonry_gallery_button_label',
	$eltd_masonry_gallery_button_label
);

$eltd_masonry_gallery_item_icon_type_container = new MooseElatedContainer(
	'eltd_masonry_gallery_item_icon_type_container',
	'eltd_masonry_gallery_item_type',
	'',
	array( 'standard' )
);
$eltdMasonryGalleryItemGeneral->addChild(
	'eltd_masonry_gallery_item_icon_type_container',
	$eltd_masonry_gallery_item_icon_type_container
);
//Icon Packages
$eltd_masonry_gallery_item_icon_hide_array = array();
$eltd_masonry_gallery_item_icon_show_array = array();

if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	
	$eltd_masonry_gallery_item_icon_collection_params = $moose_elated_icon_collections->getIconCollectionsParams();
	
	foreach ($moose_elated_icon_collections->iconCollections as $dep_collection_key => $dep_collection_object ) {
		
		$eltd_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] = '';
		
		$eltd_masonry_gallery_item_icon_show_array[ $dep_collection_key ] = '#eltdf_eltd_masonry_gallery_item_with_icon_' . $dep_collection_object->param . '_container';
		
		foreach ( $eltd_masonry_gallery_item_icon_collection_params as $eltd_masonry_gallery_item_icon_collection_param ) {
			
			if ( $eltd_masonry_gallery_item_icon_collection_param !== $dep_collection_object->param ) {
				$eltd_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] .= '#eltdf_eltd_masonry_gallery_item_with_icon_' . $eltd_masonry_gallery_item_icon_collection_param . '_container,';
			}
			
		}
		
		$eltd_masonry_gallery_item_icon_hide_array[ $dep_collection_key ] = rtrim(
			$eltd_masonry_gallery_item_icon_hide_array[ $dep_collection_key ],
			','
		);
	}
	
}

$eltd_masonry_gallery_item_with_icon_icon_pack = new MooseElatedMetaField(
	'select',
	'eltd_masonry_gallery_item_with_icon_icon_pack',
	'font_awesome',
	esc_html__( 'Icon Package', 'moose' ),
	esc_html__( 'Choose Icon Package', 'moose' ),
	$moose_elated_icon_collections->getIconCollections(),
	array(
		'dependence' => true,
		'hide'       => $eltd_masonry_gallery_item_icon_hide_array,
		'show'       => $eltd_masonry_gallery_item_icon_show_array
	)
);
$eltd_masonry_gallery_item_icon_type_container->addChild(
	'eltd_masonry_gallery_item_with_icon_icon_pack',
	$eltd_masonry_gallery_item_with_icon_icon_pack
);

if ( is_array( $moose_elated_icon_collections->iconCollections ) && count( $moose_elated_icon_collections->iconCollections ) ) {
	
	foreach ($moose_elated_icon_collections->iconCollections as $collection_key => $collection_object ) {
		$icons_array = $collection_object->getIconsArray();
		
		$icon_collections_keys = $moose_elated_icon_collections->getIconCollectionsKeys();
		
		unset(
			$icon_collections_keys[ array_search(
				$collection_key,
				$icon_collections_keys
			) ]
		);
		
		$eltd_masonry_gallery_item_icon_hide_values = $icon_collections_keys;
		
		$eltd_masonry_gallery_item_icon_pack_container = new MooseElatedContainer(
			'eltd_masonry_gallery_item_with_icon_' . $collection_object->param . '_container',
			'eltd_masonry_gallery_item_with_icon_icon_pack',
			'',
			$eltd_masonry_gallery_item_icon_hide_values
		);
		$eltd_masonry_gallery_item_icon_type_container->addChild(
			'eltd_masonry_gallery_item_with_icon_' . $collection_object->param . '_container',
			$eltd_masonry_gallery_item_icon_pack_container
		);
		
		$eltd_masonry_gallery_item_with_icon_icon_type = new MooseElatedMetaField(
			'select',
			'eltd_masonry_gallery_item_with_icon_' . $collection_object->param,
			'',
			$collection_object->title,
			esc_html__( 'Icon Package', 'moose' ),
			$icons_array
		);
		$eltd_masonry_gallery_item_icon_pack_container->addChild(
			'eltd_masonry_gallery_item_with_icon_' . $collection_object->param,
			$eltd_masonry_gallery_item_with_icon_icon_type
		);
		
	}
	
}