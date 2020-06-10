<?php
$moose_elated_options       = moose_elated_return_global_options();
$moose_elated_template_name = moose_elated_return_template_name();
?>

<div class="flexslider">
    <ul class="slides">
        <?php
        $blog_gallery = get_post_meta(get_the_ID(), 'eltd_post-image-gallery' , true );
		$array_id = explode(',',$blog_gallery);
        $blog_image_size = 'full';
        $blog_type = '';
        $image_height = '';
        $image_width = '';

        if(is_single()) {
            $blog_type = 'blog_single';
        }
        elseif($moose_elated_template_name == "blog-standard.php" || $moose_elated_template_name == "blog-standard-whole-post.php") {
            $blog_type = 'blog_standard_type';
        }
        elseif($moose_elated_template_name == "blog-split-column.php") {
            $blog_type = 'blog_split_column';
        }

        if($blog_type !== ''){
            if( isset($moose_elated_options[$blog_type.'_image_size']) && $moose_elated_options[$blog_type.'_image_size'] !== '') {
                $blog_image_size = $moose_elated_options[$blog_type.'_image_size'];

            }

            if( $blog_image_size == 'custom'
                && isset($moose_elated_options[$blog_type.'_image_size_height']) && $moose_elated_options[$blog_type.'_image_size_height'] !== ''
                && isset($moose_elated_options[$blog_type.'_image_size_width']) && $moose_elated_options[$blog_type.'_image_size_width'] !== '') {

                $image_height = $moose_elated_options[$blog_type.'_image_size_height'];
                $image_width = $moose_elated_options[$blog_type.'_image_size_width'];
            }

        }

        if($array_id !==false){
            foreach($array_id as $img_id){ ?>
                <li>
                        <?php if( $blog_image_size == 'custom' && $image_height !== '' && $image_height !== ''){
                            echo moose_elated_generate_thumbnail($img_id,null,$image_width,$image_height);
                        }
                        else{
                            echo wp_get_attachment_image($img_id, $blog_image_size);
                        }
                        ?>
                    </li>
            <?php }

        }
        ?>
    </ul>
</div>
