<?php
$html = "";

$html = "<div class='ms-left'>";
$html .= do_shortcode($content);
$html .= '</div>';

echo moose_elated_get_module_part($html);

