<?php
if(!class_exists('MooseElatedLatestPosts')) {
	class MooseElatedLatestPosts extends WP_Widget {
		private $params;

		public function __construct() {
			parent::__construct(
				'eltd_latest_posts_widget', // Base ID
				esc_html__('Moose Blog', 'moose'), // Name
				array('description' => esc_html__('Display posts from your blog', 'moose'),) // Args
			);

			$this->setParams();
		}

		protected function setParams() {
			$this->params = array(
				array(
					'name' => 'title',
					'type' => 'textfield',
					'title' => esc_html__('Title', 'moose')
				),
				array(
					'name' => 'type',
					'type' => 'dropdown',
					'title' => esc_html__('Type', 'moose'),
					'options' => array(
						"image_in_box" => esc_html__("Image in left box", 'moose'),
						"minimal" => esc_html__("Minimal", 'moose')
					)
				),
				array(
					'name' => 'number_of_posts',
					'type' => 'textfield',
					'title' => esc_html__('Number of posts', 'moose')
				),
				array(
					'name' => 'order_by',
					'type' => 'dropdown',
					'title' => esc_html__('Order By', 'moose'),
					'options' => array(
						'title' => esc_html__('Title', 'moose'),
						'date' => esc_html__('Date', 'moose')
					)
				),
				array(
					'name' => 'order',
					'type' => 'dropdown',
					'title' => esc_html__('Order', 'moose'),
					'options' => array(
						'ASC' => esc_html__('ASC', 'moose'),
						'DESC' => esc_html__('DESC', 'moose')
					)
				),
				array(
					'name' => 'category',
					'type' => 'textfield',
					'title' => esc_html__('Category Slug', 'moose')
				),
				array(
					'name' => 'text_length',
					'type' => 'textfield',
					'title' => esc_html__('Number of characters', 'moose')
				),
				array(
					'name' => 'title_tag',
					'type' => 'dropdown',
					'title' => esc_html__('Title Tag', 'moose'),
					'options' => array(
						"" => "",
						"h2" => "h2",
						"h3" => "h3",
						"h4" => "h4",
						"h5" => "h5",
						"h6" => "h6"
					)
				),
				array(
					'name' => 'title_size',
					'type' => 'textfield',
					'title' => esc_html__('Title Size (px)', 'moose')
				),
				array(
					'name' => 'title_color',
					'type' => 'textfield',
					'title' => esc_html__('Title Color', 'moose')
				),
				array(
					'name' => 'display_excerpt',
					'type' => 'dropdown',
					'title' => esc_html__('Display Excerpt', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'0' => esc_html__('No', 'moose'),
						'1' => esc_html__('Yes', 'moose')
					)
				),
				array(
					'name' => 'excerpt_color',
					'type' => 'textfield',
					'title' => esc_html__('Excerpt Color', 'moose')
				),
				array(
					'name' => 'info_position',
					'type' => 'dropdown',
					'title' => esc_html__('Info Position', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'top' => esc_html__('Top', 'moose'),
						'bottom' => esc_html__('Bottom', 'moose')
					)
				),
				array(
					'name' => 'post_info_font_size',
					'type' => 'textfield',
					'title' => esc_html__('Post info font size (px)', 'moose')
				),
				array(
					'name' => 'post_info_color',
					'type' => 'textfield',
					'title' => esc_html__('Post info color', 'moose')
				),
				array(
					'name' => 'post_info_link_color',
					'type' => 'textfield',
					'title' => esc_html__('Post info link color', 'moose')
				),
				array(
					'name' => 'post_info_font_family',
					'type' => 'textfield',
					'title' => esc_html__('Post info font family', 'moose')
				),
				array(
					'name' => 'post_info_text_transform',
					'type' => 'dropdown',
					'title' => esc_html__('Post info text transform', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'none' => esc_html__('None', 'moose'),
						'capitalize' => esc_html__('Capitalize', 'moose'),
						'uppercase' => esc_html__('Uppercase', 'moose'),
						'lowercase' => esc_html__('Lowercase', 'moose')
					)
				),
				array(
					'name' => 'post_info_font_weight',
					'type' => 'dropdown',
					'title' => esc_html__('Post info font weight', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'100' => esc_html__('Thin 100', 'moose'),
						'200' => esc_html__('Extra-Light 200', 'moose'),
						'300' => esc_html__('Light 300', 'moose'),
						'400' => esc_html__('Regular 400', 'moose'),
						'500' => esc_html__('Medium 500', 'moose'),
						'600' => esc_html__('Semi-Bold 600', 'moose'),
						'700' => esc_html__('Bold 700', 'moose'),
						'800' => esc_html__('Extra-Bold 800', 'moose'),
						'900' => esc_html__('Ultra-Bold 900', 'moose')
					)
				),
				array(
					'name' => 'post_info_font_style',
					'type' => 'dropdown',
					'title' => esc_html__('Post info font style', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'normal' => esc_html__('Normal', 'moose'),
						'italic' => esc_html__('Italic', 'moose')
					)
				),
				array(
					'name' => 'post_info_letter_spacing',
					'type' => 'textfield',
					'title' => esc_html__('Post info letter spacing (px)', 'moose')
				),
				array(
					'name' => 'display_category',
					'type' => 'dropdown',
					'title' => esc_html__('Display Category', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'1' => esc_html__('Yes', 'moose'),
						'0' => esc_html__('No', 'moose')
					)
				),
				array(
					'name' => 'display_date',
					'type' => 'dropdown',
					'title' => esc_html__('Display Date', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'1' => esc_html__('Yes', 'moose'),
						'0' => esc_html__('No', 'moose')
					)
				),
				array(
					'name' => 'date_size',
					'type' => 'textfield',
					'title' => 'Date Size (px)'
				),
				array(
					'name' => 'display_author',
					'type' => 'dropdown',
					'title' => esc_html__('Display Author', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'1' => esc_html__('Yes', 'moose'),
						'0' => esc_html__('No', 'moose')
					)
				),
				array(
					'name' => 'display_comments',
					'type' => 'dropdown',
					'title' => esc_html__('Display Comments', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'1' => esc_html__('Yes', 'moose'),
						'0' => esc_html__('No', 'moose')
					)
				),
				array(
					'name' => 'background_color',
					'type' => 'textfield',
					'title' => esc_html__('Box Background Color', 'moose')
				),
				array(
					'name' => 'border_color',
					'type' => 'textfield',
					'title' => esc_html__('Separator Between Item Color', 'moose')
				),
				array(
					'name' => 'border_width',
					'type' => 'textfield',
					'title' => esc_html__('Separator Between Item Thickness (px)', 'moose')
				),
				array(
					'name' => 'display_button',
					'type' => 'dropdown',
					'title' => esc_html__('Display Button', 'moose'),
					'options' => array(
						'' => esc_html__('Default', 'moose'),
						'1' => esc_html__('Yes', 'moose'),
						'0' => esc_html__('No', 'moose')
					)
				),
				array(
					'name' => 'button_size',
					'type' => 'dropdown',
					'title' => esc_html__('Button Size', 'moose'),
					'options' => array(
						"" => esc_html__("Default", 'moose'),
						"small" => esc_html__("Small", 'moose'),
						"medium" => esc_html__("Medium", 'moose'),
						"large" => esc_html__("Large", 'moose'),
						"big_large" => esc_html__("Extra Large", 'moose')
					)
				),
				array(
					'name' => 'button_style',
					'type' => 'dropdown',
					'title' => esc_html__('Button Style', 'moose'),
					'options' => array(
						"" => esc_html__("Default", 'moose'),
						"white" => esc_html__("White", 'moose')
					)
				),
				array(
					'name' => 'button_text',
					'type' => 'textfield',
					'title' => esc_html__('Button Text', 'moose')
				),
				array(
					'name' => 'button_color',
					'type' => 'textfield',
					'title' => esc_html__('Button Text Color', 'moose')
				),
				array(
					'name' => 'button_hover_color',
					'type' => 'textfield',
					'title' => esc_html__('Button Text Hover Color', 'moose')
				),
				array(
					'name' => 'button_background_color',
					'type' => 'textfield',
					'title' => esc_html__('Button Background Color', 'moose')
				),
				array(
					'name' => 'button_hover_background_color',
					'type' => 'textfield',
					'title' => esc_html__('Button Hover Background Color', 'moose')
				),
				array(
					'name' => 'button_border_color',
					'type' => 'textfield',
					'title' => esc_html__('Button Border Color', 'moose')
				),
				array(
					'name' => 'button_border_width',
					'type' => 'textfield',
					'title' => esc_html__('Button Border Width', 'moose')
				),
				array(
					'name' => 'button_hover_border_color',
					'type' => 'textfield',
					'title' => esc_html__('Button Hover Border Color', 'moose')
				),
				array(
					'name' => 'button_border_radius',
					'type' => 'textfield',
					'title' => esc_html__('Button Border Radius (px)', 'moose')
				)
			);
		}

		public function getParams() {
			return $this->params;
		}

		public function widget($args, $instance) {
			extract($args);
			extract($instance);

			//prepare variables
			$content = '';
			$params = '';

			//is instance empty?
			if (is_array($instance) && count($instance)) {
				//generate shortcode params
				foreach ($instance as $key => $value) {
					$params .= " $key = '$value' ";
				}
			}
			$params .= " date_place = 'by_post_info' ";

			echo '<div class="widget eltd-latest-posts-widget">';

			if (isset($title) && $title !== '') {
				echo '<h4>' . esc_html($title) . '</h4>';
			}

			//finally call the shortcode
			echo do_shortcode("[no_blog_list $params]"); // XSS OK

			echo '</div>'; //close div.eltd-latest-posts-widget
		}

		public function form($instance) {
			foreach ($this->params as $param_array) {
				$param_name = $param_array['name'];
				${$param_name} = isset($instance[$param_name]) ? esc_attr($instance[$param_name]) : '';
			}

			foreach ($this->params as $param) {
				switch ($param['type']) {
					case 'textfield':
						?>
						<p>
							<label for="<?php echo esc_attr($this->get_field_id($param['name'])); ?>"><?php echo
								esc_html($param['title']); ?></label>
							<input class="widefat" id="<?php echo esc_attr($this->get_field_id($param['name'])); ?>"
							       name="<?php echo esc_attr($this->get_field_name($param['name'])); ?>" type="text"
							       value="<?php echo esc_attr(${$param['name']}); ?>"/>
						</p>
						<?php
						break;
					case 'dropdown':
						?>
						<p>
							<label for="<?php echo esc_attr($this->get_field_id($param['name'])); ?>"><?php echo
								esc_html($param['title']); ?></label>
							<?php if (isset($param['options']) && is_array($param['options']) && count($param['options'])) { ?>
								<select class="widefat"
								        name="<?php echo esc_attr($this->get_field_name($param['name'])); ?>"
								        id="<?php echo esc_attr($this->get_field_id($param['name'])); ?>">
									<?php foreach ($param['options'] as $param_option_key => $param_option_val) {
										$option_selected = '';
										if (${$param['name']} == $param_option_key) {
											$option_selected = 'selected';
										}
										?>
										<option <?php echo esc_attr($option_selected); ?>
											value="<?php echo esc_attr($param_option_key); ?>"><?php echo esc_attr($param_option_val); ?></option>
									<?php } ?>
								</select>
							<?php } ?>
						</p>

						<?php
						break;
				}
			}
		}

		public function update($new_instance, $old_instance) {
			$instance = array();
			foreach ($this->params as $param) {
				$param_name = $param['name'];

				$instance[$param_name] = sanitize_text_field($new_instance[$param_name]);
			}

			return $instance;
		}
	}
}