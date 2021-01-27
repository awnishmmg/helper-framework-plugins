<?php

class Load{

	//Model Folder
	public static function model($file){

		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}_model.php";
		if(file_exists($path)):
			$value=basename($path,'_model.php');
			include $path;
		else:	
			die('<b> Such File does not exist </b>');
		endif;
	}

	// Helper Folder
	public static function helper($file){
		
		$path=include dirname(__DIR__)."/".__FUNCTION__."/{$file}_helper.php";
		if(file_exists($path)):
			$value=basename($path,'_helper.php');
			include $path;
		else:
			die('<b> Such File does not exist </b>');
		endif;
	}

	// Library Folder
	public static function library($file){
		
		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}.class.php";
		if(file_exists($path)):
				$value=basename($path,'.class.php');
				include $path;
		else:
				die('<b> Such File does not exist </b>');	
		endif;
	}

	//Config Folder
	public static function config($file){
		
		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}_config.php";
		if(file_exists($path)):
				$value=basename($path,'_config.php');
				include $path;
		else:
				die('<b> Such File does not exist </b>');
		endif;
	}

	//package Folder
	public static function package($file){
		
		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}_package.php";
		if(file_exists($path)):
				$value=basename($path,'_package.php');
				include $path;
		else:
				die('<b> Such File does not exist </b>');
		endif;
	}

	//Any General PHP File
	public static function php($file,$from){
		
		$path=dirname(__DIR__)."/".$from."/{$file}.php";
		if(file_exists($path)):
				$value=basename($path,'.php');
				include $path;
		else:
				die('<b> Such File does not exist </b>');
		endif;
	}


	//Any General PHP File with Folder Name
	public static function php_file($file){
		
		$path=dirname(__DIR__)."/".$from."/{$file}.php";
		if(file_exists($path)):
				$value=basename($path,'.php');
				include $path;
		else:
				die('<b> Such File does not exist </b>');
		endif;
	}

	//Any File with Root Folder and File name with Any Extension
	public static function file($file){
		
		$path=dirname(__DIR__)."/".$from."/{$file}";
		if(file_exists($path)):
				$value=basename($path);
				include $path;
		else:
				die('<b> Such File does not exist </b>');
		endif;
	}


}
