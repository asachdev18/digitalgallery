<?php
class ElatedCPTLike {
	
	 function __construct(){	
		add_action('wp_enqueue_scripts', array(&$this, 'enqueue_scripts'));
		add_action('wp_ajax_moose_elated_like', array(&$this, 'ajax'));
		add_action('wp_ajax_nopriv_moose_elated_like', array(&$this, 'ajax'));
	}
	
	function enqueue_scripts(){
		
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'eltd-like', get_template_directory_uri() . '/js/eltd-like.js', 'jquery', '1.0', TRUE );
		
		wp_localize_script( 'eltd-like', 'eltdLike', array(
			'ajaxurl' => admin_url('admin-ajax.php')
		));
	}
	
	function ajax($post_id){		
		//update

		$likes_id = isset( $_POST['likes_id'] ) && ! empty( $_POST['likes_id'] ) ? sanitize_text_field( $_POST['likes_id'] ) : '';

		if ( !empty( $likes_id ) ) {
			$post_id = str_replace('eltd-like-', '', $likes_id);
			$type    = isset( $_POST['type'] ) ? sanitize_text_field( $_POST['type'] ) : '';

			echo wp_kses($this->like_post($post_id, 'update', $type), array(
				'span' => array(
					'class' => true,
					'aria-hidden' => true,
					'style' => true,
					'id' => true
				),
				'i' => array(
					'class' => true,
					'style' => true,
					'id' => true
				)
			));
		} 
		
		//get
		else {
			$post_id = str_replace('eltd-like-', '', $likes_id);
			echo wp_kses($this->like_post($post_id, 'get'), array(
				'span' => array(
					'class' => true,
					'aria-hidden' => true,
					'style' => true,
					'id' => true
				),
				'i' => array(
					'class' => true,
					'style' => true,
					'id' => true
				)
			));
		}
		exit;
	}
	
	function like_post($post_id, $action = 'get', $type = ''){
		if(!is_numeric($post_id)) return;
	
		switch($action) {
		
			case 'get':
				$like_count = get_post_meta($post_id, '_eltd-like', true);
				if(isset($_COOKIE['eltd-like_'. $post_id])){
					$icon = '<span class="icon-heart" aria-hidden="true"></span>';
				}else{
					$icon = '<span class="icon-heart" aria-hidden="true"></span>';
				}
				if( !$like_count ){
					$like_count = 0;
					add_post_meta($post_id, '_eltd-like', $like_count, true);
					$icon = '<span class="icon-heart" aria-hidden="true"></span>';
				}
				$return_value = $icon . "<span>" . $like_count . "</span>";
				
				return $return_value;
				break;
				
			case 'update':
				$like_count = get_post_meta($post_id, '_eltd-like', true);

				if($type != 'portfolio_list' && isset($_COOKIE['eltd-like_'. $post_id])) {
					return $like_count;
				}
				
				$like_count++;

				update_post_meta($post_id, '_eltd-like', $like_count);
				setcookie('eltd-like_'. $post_id, $post_id, time()*20, '/');

				if($type != 'portfolio_list') {
					$return_value = "<span class='icon-heart' aria-hidden='true'></span><span>" . $like_count . "</span>";

					$return_value .= '</span>';
					return $return_value;
				}

				return '';
				break;
			default:
				return '';
				break;
		}
	}

	function add_moose_elated_like(){
		global $post;

		$output = $this->like_post($post->ID);
  
  		$class = 'eltd-like';
  		$title = esc_html__('Like this', 'moose');
		if( isset($_COOKIE['eltd-like_'. $post->ID]) ){
			$class = 'eltd-like liked';
			$title = esc_html__('You already liked this!', 'moose');
		}
		
		return '<a href="#" class="'. $class .'" id="eltd-like-'. $post->ID .'" title="'. $title .'">'. $output .'</a>';
	}

	function add_moose_elated_like_portfolio_list($portfolio_project_id){

  		$class = 'eltd-like';
  		$title = esc_html__('Like this', 'moose');
		if( isset($_COOKIE['eltd-like_'. $portfolio_project_id]) ){
			$class = 'eltd-like liked';
			$title = esc_html__('You already like this!', 'moose');
		}
		
		return '<a class="'. $class .'" data-type="portfolio_list" id="eltd-like-'. $portfolio_project_id .'" title="'. $title .'"></a>';
	}

    function add_moose_elated_like_blog_list($blog_id){

        $class = 'eltd-like';
        $title = esc_html__('Like this', 'moose');
        if( isset($_COOKIE['eltd-like_'. $blog_id]) ){
            $class = 'eltd-like liked';
            $title = esc_html__('You already like this!', 'moose');
        }

        return '<a class="hover_icon '. $class .'" data-type="portfolio_list" id="eltd-like-'. $blog_id .'" title="'. $title .'"></a>';
    }
}

global $moose_elated_like;
$moose_elated_like = new ElatedCPTLike();

function moose_elated_like() {
	global $moose_elated_like;
	echo wp_kses($moose_elated_like->add_moose_elated_like(), array(
		'span' => array(
			'class' => true,
			'aria-hidden' => true,
			'style' => true,
			'id' => true
		),
		'i' => array(
			'class' => true,
			'style' => true,
			'id' => true
		),
		'a' => array(
			'href' => true,
			'class' => true,
			'id' => true,
			'title' => true,
			'style' => true
		)
	));
}
if(!function_exists('elated_cpt_like_latest_posts')){
	function elated_cpt_like_latest_posts() {
		global $moose_elated_like;
		return $moose_elated_like->add_moose_elated_like();
	}
}
if(!function_exists('elated_cpt_like_portfolio_list')) {
	function elated_cpt_like_portfolio_list($portfolio_project_id) {
		global $moose_elated_like;
		return $moose_elated_like->add_moose_elated_like_portfolio_list($portfolio_project_id);
	}
}