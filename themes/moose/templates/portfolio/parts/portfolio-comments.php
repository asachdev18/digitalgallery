<?php
global $moose_elated_options;

//get portfolio comment value
$portfolio_hide_comments = "";
if(get_post_meta(get_the_ID(), "eltd_portfolio-hide-comments", true) == "yes"){
	$portfolio_hide_comments = "yes";
} elseif (isset($moose_elated_options['portfolio_hide_comments'])){
	$portfolio_hide_comments = $moose_elated_options['portfolio_hide_comments'];
}

if($portfolio_hide_comments != "yes"){
	comments_template('', true); 
}