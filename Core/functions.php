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

function login($user)
{
	$_SESSION['user'] = [
		'email' => $user['email']
	];

	session_regenerate_id(true);
}

function logout()
{
	$_SESSION = [];
	session_destroy();
	$prams = session_get_cookie_params();

	setcookie('PHPSESSID', '', time() - 3600, $prams['path'], $prams['domain'], $prams['secure'], $prams['httponly']);
}