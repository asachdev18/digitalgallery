<?php
$moose_elated_options       = moose_elated_return_global_options();
global $more;
$more = 0;


$blog_show_categories = "no";
if (isset($moose_elated_options['blog_masonry_gallery_show_categories'])){
	$blog_show_categories = $moose_elated_options['blog_masonry_gallery_show_categories'];
}
$blog_show_comments = "no";
if (isset($moose_elated_options['blog_masonry_gallery_show_comments'])){
	$blog_show_comments = $moose_elated_options['blog_masonry_gallery_show_comments'];
}

$blog_show_author = "no";
if (isset($moose_elated_options['blog_masonry_gallery_show_author'])){
	$blog_show_author = $moose_elated_options['blog_masonry_gallery_show_author'];
}
$blog_show_like = "no";
if (isset($moose_elated_options['blog_masonry_gallery_show_like'])) {
	$blog_show_like = $moose_elated_options['blog_masonry_gallery_show_like'];
}
$blog_show_article_icon = "yes";
if (isset($moose_elated_options['blog_masonry_gallery_show_article_icon'])) {
	$blog_show_article_icon = $moose_elated_options['blog_masonry_gallery_show_article_icon'];
}

$blog_show_date = "no";
if (isset($moose_elated_options['blog_masonry_gallery_show_date'])) {
	$blog_show_date = $moose_elated_options['blog_masonry_gallery_show_date'];
}

$blog_social_share_type = "dropdown";
if(isset($moose_elated_options['blog_masonry_gallery_select_share_options_masonry_type'])){
	$blog_social_share_type = $moose_elated_options['blog_masonry_gallery_select_share_options_masonry_type'];
}
$blog_show_social_share = "no";
if (isset($moose_elated_options['enable_social_share'])&& $moose_elated_options['enable_social_share'] =="yes"){
	if (isset($moose_elated_options['post_types_names_post'])&& $moose_elated_options['post_types_names_post'] =="post"){
		if (isset($moose_elated_options['blog_masonry_gallery_show_share'])&& $blog_social_share_type == "dropdown") {
					$blog_show_social_share = $moose_elated_options['blog_masonry_gallery_show_share'];
		}
	}
}

$blog_read_more_button_classes = '';
if (isset($moose_elated_options['blog_masonry_gallery_read_more_button_icon']) && $moose_elated_options['blog_masonry_gallery_read_more_button_icon'] == 'yes'){
    $blog_read_more_button_classes .= 'with_icon';
}

$_post_format = get_post_format();
$post_format_class = '';
switch ($_post_format) {
	case "video":
		$post_format_class.='video';
	break;
	case "audio":
		$post_format_class.='audio';
	break;
	case "link":
		$post_format_class.='link';
	break;
	case "gallery":
		$post_format_class.='gallery';
	break;
	case "quote":
		$post_format_class.='quote';
	break;
	default:
}	

$blog_post_size = 'square_small';	
 if (get_post_meta(get_the_ID(), 'eltd_blog_masonry_gallery_article_size', true) !== '') {
	 $blog_post_size = get_post_meta(get_the_ID(), 'eltd_blog_masonry_gallery_article_size', true);
}

$image_size = "";

switch($blog_post_size){
	case "square_small":
		$image_size.= "eltd-moose-portfolio-square";
	break;
	case "square_big":
		$image_size.= "portfolio_masonry_larg";
	break;
	case "rectangle_portrait":
		$image_size.= "eltd-moose-portfolio-masonry-tall";
	break;
	case "rectangle_landscape":
		$image_size.= "eltd-moose-portfolio-masonry-wide";
	break;
}

?>
<article id="post-<?php the_ID(); ?>" <?php post_class($blog_post_size); ?>>
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="post_image_wrapper">
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail($image_size); ?>
				</a>
			</div>
		<?php } ?>
		<div class="post_text <?php if ( has_post_thumbnail() ) { echo "with_image";} ?>">			
			<div class="post_text_inner">				
				<div class="post_text_inner2">
					<?php if($blog_show_article_icon == "yes" ){ ?>
						<div class="post_icon_holder">
							<span class="<?php echo esc_attr($post_format_class); ?>"></span>
						</div>
					<?php } ?>
					<h4>
						<a href="<?php the_permalink(); ?>" target="_self" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h4>
					<?php if($blog_show_author == "yes" || $blog_show_date == "yes" || $blog_show_social_share == "yes" || $blog_show_categories == "yes" || $blog_show_comments == "yes" || $blog_show_like == "yes") { ?>	
							<div class="post_info">
								<?php moose_elated_post_info(array('date' => $blog_show_date, 'author' => $blog_show_author, 'share' => $blog_show_social_share, 'category' => $blog_show_categories, 'comments' => $blog_show_comments, 'like' => $blog_show_like)); ?>
							</div>
					<?php } ?>
					<?php
                        moose_elated_read_more_button('blog_masonry_gallery_read_more_button',$blog_read_more_button_classes);
					?>
					<?php if(isset($moose_elated_options['blog_masonry_gallery_show_share']) && $moose_elated_options['blog_masonry_gallery_show_share'] == "yes" && $blog_social_share_type == "list") {
						echo do_shortcode('[no_social_share_list]'); // XSS OK
					}; ?>
				</div>
			</div>
		</div>
</article>

