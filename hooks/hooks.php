<?php
	
return [

		'prepend_keys'=>['header','config','binding'],
		'append_keys'=>['footer'],
		//define Keys
		'config'=>dirname(__DIR__).'/config/autoloader.php',
		'binding'=>dirname(__DIR__).'/hooks/binding.php',
		'header'=>dirname(__DIR__).'/view/header.php',
		'session'=>'',
		'footer'=>dirname(__DIR__).'/view/footer.php',

];


