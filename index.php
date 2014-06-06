<?php

require 'vendor/autoload.php';
require 'S3.class.php';
require 'twig_filters.php';

$ini_array = parse_ini_file("config.ini");

if (array_key_exists("access_key", $ini_array) and array_key_exists("secret_key", $ini_array)) {
    $access_key = $ini_array["access_key"];
    $secret_key = $ini_array["secret_key"];
} else {
    die("Please set access_key and secret_key in config.ini file.");
}

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$twig->addFilter($filter_format_bytes);
$twig->addFilter($filter_table_selected);
$twig->addFilter($filter_format_datetime);

$s3 = new S3($access_key, $secret_key);

if (array_key_exists("bucket", $ini_array)) {
    $buckets = NULL;
    $selected_bucket = $ini_array["bucket"];
} else {
    $buckets = $s3->listBuckets();

    if(isset($_POST["bucket"]))
        $selected_bucket = $_POST["bucket"];
    else
        $selected_bucket = $buckets[0]["Name"];
}

$objects = $s3->listObjects($selected_bucket);
echo $twig->render('index.html', array("buckets" => $buckets, "objects" => $objects));