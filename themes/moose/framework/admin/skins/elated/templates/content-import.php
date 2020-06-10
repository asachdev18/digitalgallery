<div class="eltdf-tabs-content">
    <div class="tab-content">
        <div class="tab-pane fade in active" id="import">
            <div class="eltdf-tab-content">
                <h2 class="eltdf-page-title"><?php esc_html_e( 'Import', 'moose' ); ?></h2>
                <form method="post" class="eltd_ajax_form eltdf-import-page-holder">
                    <div class="eltdf-page-form">
                        <div class="eltdf-page-form-section-holder">
                            <h3 class="eltdf-page-section-title"><?php esc_html_e( 'Import Demo Content', 'moose' ); ?></h3>
                            <div class="eltdf-page-form-section">
                                <div class="eltdf-field-desc">
                                    <h4><?php esc_html_e( 'Import', 'moose' ); ?></h4>

                                    <p><?php esc_html_e( 'Choose demo content you want to import', 'moose' ); ?></p>
                                </div>
                                <!-- close div.eltdf-field-desc -->

                                <div class="eltdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select name="import_example" id="import_example" class="form-control eltdf-form-element dependence">
                                                    <option value="moose1"><?php esc_html_e( 'Moose 1', 'moose' ); ?></option>
                                                    <option value="moose2"><?php esc_html_e( 'Moose 2', 'moose' ); ?></option>
                                                    <option value="moose3"><?php esc_html_e( 'Moose 3', 'moose' ); ?></option>
                                                    <option value="moose4"><?php esc_html_e( 'Moose 4', 'moose' ); ?></option>
                                                    <option value="moose5"><?php esc_html_e( 'Moose 5', 'moose' ); ?></option>
                                                    <option value="moose6"><?php esc_html_e( 'Moose 6', 'moose' ); ?></option>
                                                    <option value="moose7"><?php esc_html_e( 'Moose 7', 'moose' ); ?></option>
                                                    <option value="moose8"><?php esc_html_e( 'Moose 8', 'moose' ); ?></option>
                                                    <option value="moose9"><?php esc_html_e( 'Moose 9', 'moose' ); ?></option>
                                                    <option value="moose10"><?php esc_html_e( 'Moose 10', 'moose' ); ?></option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.eltdf-section-content -->

                            </div>

                            <div class="eltdf-page-form-section">


                                <div class="eltdf-field-desc">
                                    <h4><?php esc_html_e( 'Import Type', 'moose' ); ?></h4>

                                    <p><?php esc_html_e( 'Enabling this option will switch to a Side Position (default is Top Position)', 'moose' ); ?></p>
                                </div>
                                <!-- close div.eltdf-field-desc -->



                                <div class="eltdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <select name="import_option" id="import_option" class="form-control eltdf-form-element">
                                                    <option value=""><?php esc_html_e( 'Please Select', 'moose' ); ?></option>
                                                    <option value="complete_content"><?php esc_html_e( 'All', 'moose' ); ?></option>
                                                    <option value="content"><?php esc_html_e( 'Content', 'moose' ); ?></option>
                                                    <option value="widgets"><?php esc_html_e( 'Widgets', 'moose' ); ?></option>
                                                    <option value="options"><?php esc_html_e( 'Options', 'moose' ); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.eltdf-section-content -->

                            </div>
                            <div class="eltdf-page-form-section">


                                <div class="eltdf-field-desc">
                                    <h4><?php esc_html_e( 'Import attachments', 'moose' ); ?></h4>

                                    <p>Do you want to import media files?</p>
                                </div>
                                <!-- close div.eltdf-field-desc -->
                                <div class="eltdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="field switch">
                                                    <label class="cb-enable dependence"><span><?php esc_html_e( 'Yes', 'moose' ); ?></span></label>
                                                    <label class="cb-disable selected dependence"><span><?php esc_html_e( 'No', 'moose' ); ?></span></label>
                                                    <input type="checkbox" id="import_attachments" class="checkbox" name="import_attachments" value="1">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.eltdf-section-content -->
                            </div>
                            <div class="eltdf-page-form-section">


                                <div class="eltdf-field-desc">
                                    <input type="submit" class="btn btn-primary btn-sm " value="<?php esc_html_e('Import', 'moose'); ?>" name="import" id="import_demo_data" />
                                </div>
                                <!-- close div.eltdf-field-desc -->
                                <div class="eltdf-section-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="import_load"><span><?php esc_html_e('The import process may take some time. Please be patient.', 'moose') ?> </span><br />
                                                    <div class="eltd-progress-bar-wrapper html5-progress-bar">
                                                        <div class="progress-bar-wrapper">
                                                            <progress id="progressbar" value="0" max="100"></progress>
                                                        </div>
                                                        <div class="progress-value"><?php esc_html_e( '0%', 'moose' ); ?></div>
                                                        <div class="progress-bar-message">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- close div.eltdf-section-content -->
                            </div>
                            <div class="eltdf-page-form-section eltdf-import-button-wrapper">

                                <div class="alert alert-warning">
                                    <strong><?php esc_html_e('Important notes:', 'moose') ?></strong>
                                    <ul>
                                        <li><?php esc_html_e('Please note that import process will take time needed to download all attachments from demo web site.', 'moose'); ?></li>
                                        <li> <?php esc_html_e('If you plan to use shop, please install WooCommerce before you run import.', 'moose')?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div><!-- close eltdf-tab-content -->
        </div>
    </div>
</div> <!-- close div.eltdf-tabs-content -->

<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            $(document).on('click', '#import_demo_data', function(e) {
                e.preventDefault();
                if (confirm('Are you sure, you want to import Demo Data now?')) {
                    $('.import_load').css('display','block');
                    var progressbar = $('#progressbar');
                    var import_opt = $( "#import_option" ).val();
                    var import_expl = $( "#import_example" ).val();
                    var p = 0;
                    if(import_opt == 'content'){
                        for(var i=1;i<10;i++){
                            var str;
                            if (i < 10) str = 'moose_content_0'+i+'.xml';
                            else str = 'moose_content_'+i+'.xml';
                            jQuery.ajax({
                                type: 'POST',
                                url: ajaxurl,
                                data: {
                                    action: 'eltd_dataImport',
                                    xml: str,
                                    example: import_expl,
                                    import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                },
                                success: function(data, textStatus, XMLHttpRequest){
                                    p+= 10;
                                    $('.progress-value').html((p) + '%');
                                    progressbar.val(p);
                                    if (p == 90) {
                                        str = 'moose_content_10.xml';
                                        jQuery.ajax({
                                            type: 'POST',
                                            url: ajaxurl,
                                            data: {
                                                action: 'eltd_dataImport',
                                                xml: str,
                                                example: import_expl,
                                                import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                            },
                                            success: function(data, textStatus, XMLHttpRequest){
                                                p+= 10;
                                                $('.progress-value').html((p) + '%');
                                                progressbar.val(p);
                                                $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'moose' ); ?></strong></div>');
                                            },
                                            error: function(MLHttpRequest, textStatus, errorThrown){
                                            }
                                        });
                                    }
                                },
                                error: function(MLHttpRequest, textStatus, errorThrown){
                                }
                            });
                        }
                    } else if(import_opt == 'widgets') {
                        jQuery.ajax({
                            type: 'POST',
                            url: ajaxurl,
                            data: {
                                action: 'eltd_widgetsImport',
                                example: import_expl
                            },
                            success: function(data, textStatus, XMLHttpRequest){
                                $('.progress-value').html((100) + '%');
                                progressbar.val(100);
                            },
                            error: function(MLHttpRequest, textStatus, errorThrown){
                            }
                        });
                        $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'moose' ); ?></strong></div>');
                    } else if(import_opt == 'options'){
                        jQuery.ajax({
                            type: 'POST',
                            url: ajaxurl,
                            data: {
                                action: 'eltd_optionsImport',
                                example: import_expl
                            },
                            success: function(data, textStatus, XMLHttpRequest){
                                $('.progress-value').html((100) + '%');
                                progressbar.val(100);
                            },
                            error: function(MLHttpRequest, textStatus, errorThrown){
                            }
                        });
                        $('.progress-bar-message').html('<div class="alert alert-success"><strong><?php esc_html_e( 'Import is completed', 'moose' ); ?></strong></div>');
                    }else if(import_opt == 'complete_content'){
                        for(var i=1;i<10;i++){
                            var str;
                            if (i < 10) str = 'moose_content_0'+i+'.xml';
                            else str = 'moose_content_'+i+'.xml';
                            jQuery.ajax({
                                type: 'POST',
                                url: ajaxurl,
                                data: {
                                    action: 'eltd_dataImport',
                                    xml: str,
                                    example: import_expl,
                                    import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                },
                                success: function(data, textStatus, XMLHttpRequest){
                                    p+= 10;
                                    $('.progress-value').html((p) + '%');
                                    progressbar.val(p);
                                    if (p == 90) {
                                        str = 'moose_content_10.xml';
                                        jQuery.ajax({
                                            type: 'POST',
                                            url: ajaxurl,
                                            data: {
                                                action: 'eltd_dataImport',
                                                xml: str,
                                                example: import_expl,
                                                import_attachments: ($("#import_attachments").is(':checked') ? 1 : 0)
                                            },
                                            success: function(data, textStatus, XMLHttpRequest){
                                                jQuery.ajax({
                                                    type: 'POST',
                                                    url: ajaxurl,
                                                    data: {
                                                        action: 'eltd_otherImport',
                                                        example: import_expl
                                                    },
                                                    success: function(data, textStatus, XMLHttpRequest){
                                                        //alert(data);
                                                        $('.progress-value').html((100) + '%');
                                                        progressbar.val(100);
                                                        $('.progress-bar-message').html('<div class="alert alert-success"><?php esc_html_e( 'Import is completed.', 'moose' ); ?></div>');
                                                    },
                                                    error: function(MLHttpRequest, textStatus, errorThrown){
                                                    }
                                                });
                                            },
                                            error: function(MLHttpRequest, textStatus, errorThrown){
                                            }
                                        });
                                    }
                                },
                                error: function(MLHttpRequest, textStatus, errorThrown){
                                }
                            });
                        }
                    }
                }
                return false;
            });
        });
    })(jQuery);

</script>