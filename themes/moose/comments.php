<?php
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_title_tag="h5";
if(isset($moose_elated_options['blog_single_title_tags'])){
    $moose_elated_title_tag = $moose_elated_options['blog_single_title_tags'];
}
$moose_elated_headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');
//get correct heading value
$moose_elated_title_tag = (in_array($moose_elated_title_tag, $moose_elated_headings_array)) ? $moose_elated_title_tag : 'h5';

$moose_elated_pagination_classes = '';
if( isset($moose_elated_options['pagination_type']) && $moose_elated_options['pagination_type'] == 'standard' ) {
	if( isset($moose_elated_options['pagination_standard_position']) && $moose_elated_options['pagination_standard_position'] !== '' ) {
		$moose_elated_pagination_classes .= "standard_".esc_attr($moose_elated_options['pagination_standard_position']);
	}
}
elseif ( isset($moose_elated_options['pagination_type']) && $moose_elated_options['pagination_type'] == 'arrows_on_sides' ) {
	$moose_elated_pagination_classes .= "arrows_on_sides";
}
?>

<div class="comment_holder clearfix" id="comments">
<div class="comment_number"><div class="comment_number_inner"><<?php echo esc_attr($moose_elated_title_tag); ?>><?php comments_number( esc_html__('No Comments','moose'), '1'.esc_html__(' Comment ','moose'), '% '.esc_html__(' Comments ','moose')); ?></<?php echo esc_attr($moose_elated_title_tag); ?>></div></div>
<div class="comments">
<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'moose' ); ?></p>
			</div></div>
<?php
		
		return;
	endif;
?>
<?php if ( have_comments() ) : ?>

	<ul class="comment-list <?php if(isset($moose_elated_options['blog_comments_reply_link_on_bottom_yes_no'])&& $moose_elated_options['blog_comments_reply_link_on_bottom_yes_no']=='yes' ) echo "bottom-comment-link" ;?>">
		<?php wp_list_comments(array( 'callback' => 'moose_elated_comment')); ?>
	</ul>


<?php // End Comments ?>

 <?php else : // this is displayed if there are no comments so far 

	if ( ! comments_open() ) :
?>
		<!-- If comments are open, but there are no comments. -->

	 
		<!-- If comments are closed. -->
		<p><?php esc_html_e('Sorry, the comment form is closed at this time.', 'moose'); ?></p>

	<?php endif; ?>
<?php endif; ?>
</div></div>
<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );
$consent  = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

$args = array(
	'id_form' => 'commentform',
	'id_submit' => 'submit_comment',
	'title_reply'=>'<'.$moose_elated_title_tag.'><span class="icon-action-undo"></span>'. esc_html__( 'Leave a Comment','moose' ) .'</'.$moose_elated_title_tag.'>',
	'title_reply_to' => esc_html__( 'Post a Reply to %s','moose' ),
	'cancel_reply_link' => esc_html__( 'Cancel Reply','moose' ),
	'label_submit' => esc_html__( 'Submit','moose' ),
	'comment_field' => '<div class="textarea_holder clearfix"><textarea id="comment" placeholder="'.esc_html__( 'Write your comment here...','moose' ).'" name="comment" cols="45" rows="8" aria-required="true"></textarea><span class="icon-pencil comment_area_icon"></span></div>',
	'comment_notes_before' => '<p class="comment-notes">' . esc_html__( 'Your email address will not be published.','moose' ). '</p>',
	'comment_notes_after' => '',
	'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<div class="three_columns clearfix">'
		. '<div class="column1"><div class="column_inner"><input id="author" name="author" placeholder="'. esc_html__( 'Your full name','moose' ) .'" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /><span class="icon-user comment_form_icon"></span></div></div>',
		'url' => '<div class="column2"><div class="column_inner"><input id="email" name="email" placeholder="'. esc_html__( 'E-mail address','moose' ) .'" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /><span class="icon-envelope comment_form_icon"></span></div></div>',
		'email' => '<div class="column3"><div class="column_inner"><input id="url" name="url" type="text" placeholder="'. esc_html__( 'Website','moose' ) .'" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /><span class="icon-globe comment_form_icon"></span></div></div></div>',
		'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" ' . $consent . ' />' .
					'<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'moose' ) . '</label></p>'
		 ) ) );
 ?>
<?php if(get_comment_pages_count() > 1){
	?>
	<div class="comment_pager <?php echo esc_attr($moose_elated_pagination_classes); ?>">
		<p><?php paginate_comments_links(); ?></p>
	</div>
<?php } ?>
 <div class="comment_form">
	<?php comment_form($args); ?>
</div>
								
							


