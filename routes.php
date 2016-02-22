<?php

$app['router']->get('/', function () {
	 require("facade/index.php");
});
$app['router']->get('/url2', function () {
	$content = require "facade/index.php";
	return $content;
});