<?php
	
return [
	
		'prepend_keys'=>['header','config','binding'],
		'append_keys'=>['footer'],
		'disallow_keys'=>[
		'ajax'=>
			[
				'template_header',
				'binding',
				'template_footer',
			],
		],

		'config'=>dirname(__DIR__).'/config/autoloader.php',
		'binding'=>dirname(__DIR__).'/hooks/binding.php',
		'header'=>dirname(__DIR__).'/view/template_header.php',
		'session'=>'',
		'footer'=>dirname(__DIR__).'/view/template_footer.php',

];


