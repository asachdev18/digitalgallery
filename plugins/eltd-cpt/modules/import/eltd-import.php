<?php
if (!function_exists ('add_action')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}
class ElatedCPTImport {

    public $message = "";
    public $attachments = false;
	private static $instance;


	public static function getInstance() {
		if ( self::$instance === null ) {
			return new self();
		}

		return self::$instance;
	}

    function __construct() {
        add_action('admin_menu', array(&$this, 'eltd_admin_import'));
        add_action('admin_init', array(&$this, 'eltd_register_theme_settings'));

    }
    function eltd_register_theme_settings() {
        register_setting( 'eltd_options_import_page', 'eltd_options_import');
    }

    function init_eltd_import() {
        if(isset($_REQUEST['import_option'])) {
            $import_option = $_REQUEST['import_option'];
            if($import_option == 'content'){
                $this->import_content('proya_content.xml');
            }elseif($import_option == 'custom_sidebars') {
                $this->import_custom_sidebars('custom_sidebars.txt');
            } elseif($import_option == 'widgets') {
                $this->import_widgets('widgets.txt','custom_sidebars.txt');
            } elseif($import_option == 'options'){
                $this->import_options('options.txt');
            }elseif($import_option == 'menus'){
                $this->import_menus('menus.txt');
            }elseif($import_option == 'settingpages'){
                $this->import_settings_pages('settingpages.txt');
            }elseif($import_option == 'complete_content'){
                $this->import_content('proya_content.xml');
                $this->import_options('options.txt');
                $this->import_widgets('widgets.txt','custom_sidebars.txt');
                $this->import_menus('menus.txt');
                $this->import_settings_pages('settingpages.txt');
                $this->message = __("Content imported successfully", "eltd");
            }
        }
    }

    public function import_content($file){
	   
	    ob_start();
	    require_once ABSPATH . 'wp-admin/includes/class-wp-importer.php';
	    require_once 'class.wordpress-importer.php';
	
	    $eltd_import = new WP_Import();
	    set_time_limit(0);
	
	    $eltd_import->fetch_attachments = $this->attachments;
	    $returned_value = $eltd_import->import($file);
	    if(is_wp_error($returned_value)){
		    $this->message = esc_html__("An Error Occurred During Import", "eltd-cpt");
	    }
	    else {
		    $this->message = esc_html__("Content imported successfully", "eltd-cpt");
	    }
	    ob_get_clean();
    
     
    }

    public function import_widgets($file, $file2){
        $this->import_custom_sidebars($file2);
        $options = $this->file_options($file);
        foreach ((array) $options['widgets'] as $eltd_widget_id => $eltd_widget_data) {
            update_option( 'widget_' . $eltd_widget_id, $eltd_widget_data );
        }
        $this->import_sidebars_widgets($file);
        $this->message = __("Widgets imported successfully", "eltd");
    }

    public function import_sidebars_widgets($file){
        $eltd_sidebars = get_option("sidebars_widgets");
        unset($eltd_sidebars['array_version']);
        $data = $this->file_options($file);
        if ( is_array($data['sidebars']) ) {
            $eltd_sidebars = array_merge( (array) $eltd_sidebars, (array) $data['sidebars'] );
            unset($eltd_sidebars['wp_inactive_widgets']);
            $eltd_sidebars = array_merge(array('wp_inactive_widgets' => array()), $eltd_sidebars);
            $eltd_sidebars['array_version'] = 2;
            wp_set_sidebars_widgets($eltd_sidebars);
        }
    }

    public function import_custom_sidebars($file){
        $options = $this->file_options($file);
        update_option( 'eltd_sidebars', $options);
        $this->message = __("Custom sidebars imported successfully", "eltd");
    }

    public function import_options($file){
        $options = $this->file_options($file);
        update_option( 'eltd_options_moose', $options);
        $this->message = __("Options imported successfully", "eltd");
    }

    public function import_menus($file){
        global $wpdb;
        $eltd_terms_table = $wpdb->prefix . "terms";
        $this->menus_data = $this->file_options($file);
        $menu_array = array();
        foreach ($this->menus_data as $registered_menu => $menu_slug) {
            $term_rows = $wpdb->get_results($wpdb->prepare("SELECT * FROM $eltd_terms_table where slug=%s", $menu_slug), ARRAY_A);
            if(isset($term_rows[0]['term_id'])) {
                $term_id_by_slug = $term_rows[0]['term_id'];
            } else {
                $term_id_by_slug = null;
            }
            $menu_array[$registered_menu] = $term_id_by_slug;
        }
        set_theme_mod('nav_menu_locations', array_map('absint', $menu_array ) );

    }
    public function import_settings_pages($file){
        $pages = $this->file_options($file);
        foreach($pages as $eltd_page_option => $eltd_page_id){
            update_option( $eltd_page_option, $eltd_page_id);
        }
    }

    public function file_options($file){

        $file_content = $this->eltd_file_contents($file);
        if ($file_content) {
            $unserialized_content = unserialize(base64_decode($file_content));
            if ($unserialized_content) {
                return $unserialized_content;
            }
        }
        return false;
    }

    function eltd_file_contents( $path ) {
		$url      = "http://export.elated-themes.com/".$path;
		$response = wp_remote_get($url);
		$body     = wp_remote_retrieve_body($response);
		return $body;
    }
	
	function eltdf_update_meta_fields_after_import( $folder ) {
		global $wpdb;
		
		$url         = home_url( '/' );
		$demo_urls   = $this->eltdf_import_get_demo_urls( $folder );
		
		foreach ( $demo_urls as $demo_url ) {
			$sql_query   = "SELECT meta_id, meta_value FROM wp_postmeta WHERE meta_value LIKE '" . esc_url( $demo_url ) . "%';";
			$meta_values = $wpdb->get_results( $sql_query );
			
			if ( ! empty( $meta_values ) ) {
				foreach ( $meta_values as $meta_value ) {
					$new_value = $this->eltdf_recalc_serialized_lengths( str_replace( $demo_url, $url, $meta_value->meta_value ) );
					
					$wpdb->update( $wpdb->postmeta,	array( 'meta_value' => $new_value ), array( 'meta_id' => $meta_value->meta_id )	);
				}
			}
		}
	}
	
	function eltdf_update_options_after_import( $folder ) {
		$url       = home_url( '/' );
		$demo_urls = $this->eltdf_import_get_demo_urls( $folder );
		
		foreach ( $demo_urls as $demo_url ) {
			$global_options    = get_option( 'eltd_options_moose' );
			$new_global_values = str_replace( $demo_url, $url, $global_options );
			
			update_option( 'eltd_options_moose', $new_global_values );
		}
	}
	
	function eltdf_import_get_demo_urls( $folder ) {
		$demo_urls  = array();
		$domain_url = 'demo.elated-themes.com/' .  str_replace( '/', '', $folder );
		
		$demo_urls[] = ! empty( $domain_url ) ? 'http://' . $domain_url : '';
		$demo_urls[] = ! empty( $domain_url ) ? 'https://' . $domain_url : '';
		
		return $demo_urls;
	}
	
	function eltdf_recalc_serialized_lengths( $sObject ) {
		$ret = preg_replace_callback( '!s:(\d+):"(.*?)";!', 'eltdf_recalc_serialized_lengths_callback', $sObject );
		
		return $ret;
	}
	
	function eltdf_recalc_serialized_lengths_callback( $matches ) {
		return "s:" . strlen( $matches[2] ) . ":\"$matches[2]\";";
	}
    
    
    function eltd_admin_import() {

		if ( elated_cpt_is_installed('theme') ) {
			global $moose_elated_framework;

			$slug = "_tabimport";
			$this->pagehook = add_submenu_page(
				'moose_elated_theme_menu',
				esc_html__('Elated Options - Elated Import', 'eltd-cpt'),                   // The value used to populate the browser's title bar when the menu page is active
				esc_html__('Import', 'eltd-cpt'),                   // The text of the menu in the administrator's sidebar
				'administrator',                  // What roles are able to access the menu
				'moose_elated_theme_menu' . $slug,                // The ID used to bind submenu items to this menu
				array($moose_elated_framework->getSkin(), 'renderImport')
			);

			add_action('admin_print_scripts-' . $this->pagehook, 'moose_elated_enqueue_admin_scripts');
			add_action('admin_print_styles-' . $this->pagehook, 'moose_elated_enqueue_admin_styles');
			//$this->pagehook = add_menu_page('Elated Import', 'Elated Import', 'manage_options', 'eltd_options_import_page', array(&$this, 'eltd_generate_import_page'),'dashicons-download');

		}
	}

}


if(!function_exists('elated_cpt_data_import')){
    function elated_cpt_data_import(){
		$eltd_import_object = ElatedCPTImport::getInstance();

        if ($_POST['import_attachments'] == 1)
            $eltd_import_object->attachments = true;
        else
            $eltd_import_object->attachments = false;

        $folder = "moose1/";
        if (!empty($_POST['example']))
            $folder = $_POST['example']."/";

        $eltd_import_object->import_content($folder.$_POST['xml']);

        die();
    }

    add_action('wp_ajax_eltd_dataImport', 'elated_cpt_data_import');
}

if(!function_exists('elated_cpt_widgets_import')){
    function elated_cpt_widgets_import(){
		$eltd_import_object = ElatedCPTImport::getInstance();

        $folder = "moose1/";
        if (!empty($_POST['example']))
            $folder = $_POST['example']."/";

        $eltd_import_object->import_widgets($folder.'widgets.txt',$folder.'custom_sidebars.txt');

        die();
    }

    add_action('wp_ajax_eltd_widgetsImport', 'elated_cpt_widgets_import');
}

if(!function_exists('elated_cpt_options_import')){
    function elated_cpt_options_import(){
		$eltd_import_object = ElatedCPTImport::getInstance();

        $folder = "moose1/";
        if (!empty($_POST['example']))
            $folder = $_POST['example']."/";

        $eltd_import_object->import_options($folder.'options.txt');

        die();
    }

    add_action('wp_ajax_eltd_optionsImport', 'elated_cpt_options_import');
}

if(!function_exists('elated_cpt_other_import')){
    function elated_cpt_other_import(){
		$eltd_import_object = ElatedCPTImport::getInstance();
        $folder = "moose1/";
        if (!empty($_POST['example']))
            $folder = $_POST['example']."/";

        $eltd_import_object->import_options($folder.'options.txt');
        $eltd_import_object->import_widgets($folder.'widgets.txt',$folder.'custom_sidebars.txt');
        $eltd_import_object->import_menus($folder.'menus.txt');
        $eltd_import_object->import_settings_pages($folder.'settingpages.txt');
	
	    $eltd_import_object->eltdf_update_meta_fields_after_import( $folder );
	    $eltd_import_object->eltdf_update_options_after_import( $folder );

        die();
    }

    add_action('wp_ajax_eltd_otherImport', 'elated_cpt_other_import');
}

if ( ! function_exists('elated_cpt_import_object') ) {
	function elated_cpt_import_object() {
		 new ElatedCPTImport();
	}

	add_action( 'init', 'elated_cpt_import_object' );
}

