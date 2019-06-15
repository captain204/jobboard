<?php

function get_categories_h(){

	$CI = get_instance();
	$categories = $CI->Jobs_model->get_categories();
	return $categories;

}

function get_recent_h(){

	$CI = get_instance();
	$recent = $CI->Jobs_model->get_recent();
	return $recent;
}

?>
