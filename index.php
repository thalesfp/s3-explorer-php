<?php

require 'vendor/autoload.php';
require 'S3.class.php';
require 'twig.filters.php';

$access_key = "";
$secret_key = "";

$s3 = new S3($access_key, $secret_key);

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$twig->addFilter($filter1);
$twig->addFilter($filter2);
$twig->addFilter($filter3);

$buckets = $s3->listBuckets();

if(isset($_POST["bucket"]))
	$selected_bucket = $_POST["bucket"];
else
	$selected_bucket = $buckets[0]["Name"];

$objects = $s3->listObjects($selected_bucket);

echo $twig->render('index.html', array("buckets" => $buckets, "objects" => $objects));