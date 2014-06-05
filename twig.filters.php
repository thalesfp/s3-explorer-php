<?php

/**
 * Create a Twig filter for convert bytes to a 
 *
 * @param integer $bytes Total of bytes
 * @param integer $precision Precision of round function
 *
 * @return string The bytes converted 
*/
$filter1 = new Twig_SimpleFilter('formatBytes', function($bytes, $precision = 2) {
	$units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . ' ' . $units[$pow]; 
});

$filter2 = new Twig_SimpleFilter('selected', function($bucket) {
	if (isset($_POST["bucket"]) and $bucket == $_POST["bucket"])
		return "selected";
});

$filter3 = new Twig_SimpleFilter('formatDateTime', function($date) {
	$date = new DateTime($date);	
	return $date->format('Y-m-d H:i:s');
});


