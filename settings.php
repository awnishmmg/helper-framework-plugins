<?php

//Save All the Setting
return [
	
		'constants'=>[

			'SYSTEM_PATH'=>'system',

			'APP_PATH'=>'http://localhost/myproject/way2mint/Knowlarity/web-app/',

			'API_PATH'=>'',

			'ADMIN_PATH'=>'http://localhost/myproject/way2mint/Knowlarity/web-app/admin/',
			
			'AJAX_PATH'=>'http://localhost/myproject/way2mint/Knowlarity/web-app/ajax/',
		],

		'database'=>[

			'dbname'=>'knowlarity_db',

			'host'=>'127.0.0.1',

			'db_driver'=>'sqli',

			'username'=>'root',

			'password'=>'',

		],

	'assets'=>[

		'js'=>[
				'jquery.js',
				'myscript.js',
		],

		'css'=>[
			'mystyle.css',
		],

	],

	'app_key'=>'secret_key',
	'app_password'=>'1234', 
];