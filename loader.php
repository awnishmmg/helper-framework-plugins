<?php

class Load{

	public static function model($file){

		include dirname(__DIR__)."/".__FUNCTION__."/{$file}_model.php";
	}

	public static function helper($file){
		
		include dirname(__DIR__)."/".__FUNCTION__."/{$file}_helper.php";
	}

	public static function library($file){
		
		include dirname(__DIR__)."/".__FUNCTION__."/{$file}.class.php";
	}

	public static function config($file){
		
		include dirname(__DIR__)."/".__FUNCTION__."/{$file}.php";
	}


}
