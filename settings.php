<?php
define('DOCUMENT_ROOT',dirname(__DIR__));
//Save All the Setting
return [
	
		'constants'=>[

			//Note System Path is for File System or File Handling Stuff
			'SYSTEM_PATH'=>DOCUMENT_ROOT,

			'APP_PATH'=>'http://localhost/myproject/way2mint/compaint-Application/web-app/',

			'API_PATH'=>'',

			'ADMIN_PATH'=>'http://localhost/myproject/way2mint/compaint-Application/web-app/admin/',
			'AJAX_PATH'=>'http://localhost/myproject/way2mint/compaint-Application/web-app/ajax/',

			//File Uploading Setting
			'FILE_UPLOAD_PATH'=>dirname(__DIR__).'/uploads/',
			'FILE_MAX_SIZE' =>'5',

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

	'pass_encrypt' => 'md5',
	'salt_hash' => '!!test^&*#2002@',
];



