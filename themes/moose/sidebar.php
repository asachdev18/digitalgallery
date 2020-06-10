<?php
$moose_elated_options = moose_elated_return_global_options();
$moose_elated_page_id = moose_elated_get_page_id();
?>
<div class="column_inner">
    <aside class="sidebar">
		<?php if ( function_exists( 'dynamic_sidebar' ) && dynamic_sidebar( moose_elated_get_sidebar_name() ) ) : endif; ?>
    </aside>
</div>
