<?php
	namespace App;
	include 'Ajax.php';

	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		header('HTTP/1.1 500 Internal Server');
		header('Content-Type: application/json; charset=UTF-8');
		die(json_encode(array('message' => 'Wrong Method', 'code' => 500)));
	}

	$paginate = $_POST['paginate'];

	$Ajax = new Ajax();
	$response = $Ajax->getImages($paginate);

	header('Content-Type: application/json; charset=UTF-8');
	print $response;