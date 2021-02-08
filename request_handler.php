<?php
require_once __DIR__."/request.php";

Class Request{

public static function param($n=1){



	$request_uri = urldecode(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
	$uri=explode("/", $request_uri);
	$wep_app_index=array_search(WEB_APP, $uri);
	$size = count($uri);

	$remain = ($size - $wep_app_index);
	if($n>=$remain){
		echo "<h3>{$n}-parameter does not exist in url</h3>";
		echo "<pre style='white-space: pre-wrap; word-wrap: break-word;'>";
		debug_print_backtrace();
		echo "</pre>";
		exit;
	}
	$cur_path = $uri[$wep_app_index+$n];
	return $cur_path;
	

}

public static function get(){
$request_uri = urldecode(parse_url($_SERVER['PHP_SELF'],PHP_URL_PATH));
return basename(dirname($request_uri));
}

}














