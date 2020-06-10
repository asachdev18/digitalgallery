<?php
$moose_elated_options = moose_elated_return_global_options();

//init variables
$moose_elated_uncovering_footer = false;
$moose_elated_footer_classes_array = array();
$moose_elated_footer_classes	= '';
$moose_elated_footer_border_columns = 'yes';
$moose_elated_footer_top_border_color = '';
$moose_elated_footer_top_border_in_grid = '';
$moose_elated_footer_bottom_border_color = '';
$moose_elated_footer_bottom_border_bottom_color = '';
$moose_elated_footer_bottom_border_in_grid = '';

extract(moose_elated_get_footer_variables());

?>

<?php get_template_part('content-bottom-area'); ?>

    </div> <!-- close div.content_inner -->
</div>  <!-- close div.content -->

<?php
if(isset($moose_elated_options['paspartu']) && $moose_elated_options['paspartu'] == 'yes'){?>
        <?php if(moose_elated_is_side_header() && isset($moose_elated_options['vertical_menu_inside_paspartu']) && $moose_elated_options['vertical_menu_inside_paspartu'] == 'no') { ?>
			</div> <!-- paspartu_middle_inner close div -->
		<?php } ?>
		</div> <!-- paspartu_inner close div -->
		<?php if((isset($moose_elated_options['paspartu_on_bottom']) && $moose_elated_options['paspartu_on_bottom'] == 'yes') ||
        (moose_elated_is_side_header() && isset($moose_elated_options['vertical_menu_inside_paspartu']) && $moose_elated_options['vertical_menu_inside_paspartu'] == 'yes')){ ?>
        <div class="paspartu_bottom"></div>
    <?php }?>
    </div> <!-- paspartu_outer close div -->
<?php
}
?>

<?php if(moose_elated_space_around_content() && !moose_elated_include_footer_in_content()){ ?>
    </div></div> <!-- space_around_content close div -->
<?php } ?>

<footer <?php moose_elated_class_attribute($moose_elated_footer_classes); ?>>
	<div class="footer_inner clearfix">
		<?php

		$moose_elated_footer_top_flag = false;

		//check footer columns.If they are empty, disable footer top
		for ( $i = 1; $i <= 4; $i ++ ) {
			$footer_columns_id = 'footer_column_' . $i;
			if ( is_active_sidebar( $footer_columns_id ) ) {
				$moose_elated_footer_top_flag = true;
				break;
			}
		}


		if($display_footer_top && $moose_elated_footer_top_flag) {
			if($moose_elated_footer_top_border_color != ''){ ?>
				<?php if($moose_elated_footer_top_border_in_grid != '') { ?>
					<div class="footer_ingrid_border_holder_outer">
				<?php } ?>
						<div class="footer_top_border_holder <?php echo esc_attr($moose_elated_footer_top_border_in_grid); ?>" <?php moose_elated_inline_style($moose_elated_footer_top_border_color); ?>></div>
				<?php if($moose_elated_footer_top_border_in_grid != '') { ?>
					</div>
				<?php } ?>
			<?php } ?>
			<div class="footer_top_holder">
				<div class="footer_top<?php if(!$footer_in_grid) {echo " footer_top_full";} ?>">
					<?php if($footer_in_grid){ ?>
					<div class="container">
						<div class="container_inner">
							<?php } ?>
							<?php switch ($footer_top_columns) {
								case 6:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="eltd_column column1">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
											</div>
										</div>
										<div class="eltd_column column2">
											<div class="column_inner">
												<div class="two_columns_50_50 clearfix">
													<div class="eltd_column column1 footer_col2">
														<div class="column_inner">
															<?php if(is_active_sidebar('footer_column_2')) {
                                                                dynamic_sidebar( 'footer_column_2' );
                                                            } ?>
														</div>
													</div>
													<div class="eltd_column column2 footer_col3">
														<div class="column_inner">
															<?php if(is_active_sidebar('footer_column_3')) {
                                                                dynamic_sidebar( 'footer_column_3' );
                                                            } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php
									break;
								case 5:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="eltd_column column1">
											<div class="column_inner">
												<div class="two_columns_50_50 clearfix">
													<div class="eltd_column column1">
														<div class="column_inner">
															<?php if(is_active_sidebar('footer_column_1')) {
                                                                dynamic_sidebar( 'footer_column_1' );
                                                            } ?>
														</div>
													</div>
													<div class="eltd_column column2">
														<div class="column_inner">
															<?php if(is_active_sidebar('footer_column_2')) {
                                                                dynamic_sidebar( 'footer_column_2' );
                                                            } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="eltd_column column2 footer_col3">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_3')) {
                                                    dynamic_sidebar( 'footer_column_3' );
                                                } ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 4:
									?>
									<div class="four_columns clearfix">
										<div class="eltd_column column1">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
											</div>
										</div>
										<div class="eltd_column column2">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_2')) {
                                                    dynamic_sidebar( 'footer_column_2' );
                                                } ?>
											</div>
										</div>
										<div class="eltd_column column3">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_3')) {
                                                    dynamic_sidebar( 'footer_column_3' );
                                                } ?>
											</div>
										</div>
										<div class="eltd_column column4">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_4')) {
                                                    dynamic_sidebar( 'footer_column_4' );
                                                } ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 3:
									?>
									<div class="three_columns clearfix">
										<div class="eltd_column column1">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
											</div>
										</div>
										<div class="eltd_column column2">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_2')) {
                                                    dynamic_sidebar( 'footer_column_2' );
                                                } ?>
											</div>
										</div>
										<div class="eltd_column column3">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_3')) {
                                                    dynamic_sidebar( 'footer_column_3' );
                                                } ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 2:
									?>
									<div class="two_columns_50_50 clearfix">
										<div class="eltd_column column1">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
											</div>
										</div>
										<div class="eltd_column column2">
											<div class="column_inner">
												<?php if(is_active_sidebar('footer_column_2')) {
                                                    dynamic_sidebar( 'footer_column_2' );
                                                } ?>
											</div>
										</div>
									</div>
									<?php
									break;
								case 1:
                                    ?>
                                    <div class="clearfix">
                                        <div class="eltd_column column1">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_column_1')) {
                                                    dynamic_sidebar( 'footer_column_1' );
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
									break;
							}
							?>
							<?php if($footer_in_grid){ ?>
						</div>
					</div>
				<?php } ?>
				</div>

			</div>
		<?php } ?>
		<?php
		$moose_elated_display_footer_text = false;
		if (isset($moose_elated_options['footer_text'])) {
			if ($moose_elated_options['footer_text'] == "yes") $moose_elated_display_footer_text = true;
		}


		if($moose_elated_display_footer_text && (is_active_sidebar('footer_bottom_left') || is_active_sidebar('footer_text') || is_active_sidebar('footer_bottom_right'))): ?>
            <?php if($moose_elated_footer_bottom_border_color != ''){ ?>
				<?php if($moose_elated_footer_bottom_border_in_grid != '') { ?>
					<div class="footer_ingrid_border_holder_outer">
				<?php } ?>
                		<div class="footer_bottom_border_holder <?php echo esc_attr($moose_elated_footer_bottom_border_in_grid); ?>" <?php moose_elated_inline_style($moose_elated_footer_bottom_border_color); ?>></div>
				<?php if($moose_elated_footer_bottom_border_in_grid != '') { ?>
					</div>
				<?php } ?>
            <?php } ?>
			<div class="footer_bottom_holder">
                <div class="footer_bottom_holder_inner">
                    <?php if($footer_in_grid){ ?>
                    <div class="container">
                        <div class="container_inner">
                            <?php } ?>

                            <?php switch ($footer_bottom_columns) {
                                case 3:
                                    ?>
                                    <div class="three_columns clearfix">
                                        <div class="eltd_column column1">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_bottom_left')) {
                                                    dynamic_sidebar( 'footer_bottom_left' );
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="eltd_column column2">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_text')) {
                                                    dynamic_sidebar( 'footer_text' );
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="eltd_column column3">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_bottom_right')) {
                                                    dynamic_sidebar( 'footer_bottom_right' );
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    break;
                                case 2:
                                    ?>
                                    <div class="two_columns_50_50 clearfix">
                                        <div class="eltd_column column1">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_bottom_left')) {
                                                    dynamic_sidebar( 'footer_bottom_left' );
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="eltd_column column2">
                                            <div class="column_inner">
                                                <?php if(is_active_sidebar('footer_bottom_right')) {
                                                    dynamic_sidebar( 'footer_bottom_right' );
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    break;
                                case 1:
                                    ?>
                                    <div class="column_inner">
                                        <?php if(is_active_sidebar('footer_text')) {
                                            dynamic_sidebar( 'footer_text' );
                                        } ?>
                                    </div>
                                    <?php
                                    break;
                            }
                            ?>
                            <?php if($footer_in_grid){ ?>
                        </div>
                    </div>
                <?php } ?>
                </div>
			</div>
            <?php if($moose_elated_footer_bottom_border_bottom_color != ''){ ?>
				<div class="footer_bottom_border_bottom_holder <?php echo esc_attr($moose_elated_footer_top_border_in_grid); ?>" <?php moose_elated_inline_style($moose_elated_footer_bottom_border_bottom_color); ?>></div>
			<?php } ?>
		<?php endif; ?>


	</div>
</footer>
<?php if(moose_elated_space_around_content() && moose_elated_include_footer_in_content()){ ?>
    </div></div> <!-- space_around_content close div -->
<?php } ?>
</div> <!-- close div.wrapper_inner  -->
</div> <!-- close div.wrapper -->
<?php wp_footer(); ?>
</body>
</html>