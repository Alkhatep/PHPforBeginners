<?php
use Core\Response;

function dd($value){

	echo "<pre>";
	var_dump($value);
	echo "</pre>";

	die();
}

function urlIS($value){
	return $_SERVER['REQUEST_URI'] === $value;
}

function abort($status = 404)
{
	http_response_code($status);
	require base_path("views/{$status}.php");
	die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
	if (! $condition) {
		abort($status);
	}
}

function base_path($path) {
	return BASE_PATH . $path;
}

function view($path, $atributes = []) {
	extract($atributes);
	
	require base_path('views/' . $path);
}

function redirect($path)
{
	header("location: {$path}");
	exit();
}