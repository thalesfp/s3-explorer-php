<?php

/**
 * Create a Twig filter to convert bytes to a human readable format
 *
 * @param integer $bytes Total of bytes
 * @param integer $precision Precision of round function
 *
 * @return string The bytes converted 
*/
$filter_format_bytes = new Twig_SimpleFilter('formatBytes', function($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 

    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . ' ' . $units[$pow]; 
});

/**
 * Create a Twig filter to return "selected" if a bucket was send via POST
 *
 * @param string $bucket A bucket name
 *
 * @return string "selected"
*/
$filter_table_selected = new Twig_SimpleFilter('selected', function($bucket) {
    if (isset($_POST["bucket"]) and $bucket == $_POST["bucket"])
        return "selected";
});

/**
 * Create a Twig filter to return a formatted datetime
 *
 * @param string $date A datetime object
 *
 * @return string A formated datetime
*/
$filter_format_datetime = new Twig_SimpleFilter('formatDateTime', function($datetime) {
    $formatted_datetime = new DateTime($datetime);    
    return $formatted_datetime->format('Y-m-d H:i:s');
});


