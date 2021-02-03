<?php
//for file_size
function display_filesize($filesize){
   
    if(is_numeric($filesize)){
    $decr = 1024; $step = 0;
    $prefix = array('Byte','KB','MB','GB','TB','PB');
       
    while(($filesize / $decr) > 0.9){
        $filesize = $filesize / $decr;
        $step++;
    }
    return round($filesize,2).' '.$prefix[$step];
    } else {

    return 'NaN';
    }
   
}

//sanitisation
function sanitise($arg){
$arg = strip_tags($arg);
$arg = htmlentities($arg);
$arg = htmlspecialchars($arg);
$arg = trim($arg);
return $arg;
}

//For Showing Error
function show_flash($action='')
{ 
	global $msg;
	$keyname = @$_REQUEST['msg'];
	$error=@$msg[$keyname];
	$request_action = @$_REQUEST['action'];
	
	if($action==$request_action and !empty($action)){
		echo "<span style='color:red' id='spn-error'>$error</span>";//Main Varible		
		echo "<script>";
		echo "setTimeout(function(){
		document.getElementById('spn-error').style='display:none;';
		},5000);";
		echo "</script>";
	}//action compare
	if($action=='' and $request_action==NULL){	
		echo "<span style='color:red' id='spn-error'>$error</span>";//Main Varible
		echo "<script>";
		echo "setTimeout(function(){
		document.getElementById('spn-error').style='display:none;';
		},5000);";
		echo "</script>";
	}
	
}

function redirect_to($arg){
	header("location:".APP_PATH."{$arg}");
	exit;
}


function redirecting_to($arg,$time){
	header("refresh:{$time};url=".APP_PATH."{$arg}");
	exit;
}


function base_url($arg=''){
	if(empty($arg)){
		return APP_PATH;
	}
	return APP_PATH.$arg;
}


//Super Global Varibles
function post($keyname=''){
	if(empty($keyname)){
		return $_POST;
	}
	return $_POST[$keyname];
}


function get($keyname=''){

	if(empty($keyname)){
		return $_GET;
	}
	return $_GET[$keyname];

}

function request($keyname=''){
	if(empty($keyname)){
		return $_REQUEST;
	}
	return $_REQUEST[$keyname];
}

function method(){
	return $_SERVER['REQUEST_METHOD'];
}


//set the key in settings 
// in settings.php inside config 'salt_hash' 
// and default algorithm you prefer like md5,sha,crypt,password_hash
// in key 'pass_encrypt' => 'md5' etc,
// and then call pass_encrypt function
function pass_encrypt($argument){
	global $settings;
	$hash=md5($settings['salt_hash']);
	return call_user_func_array($settings['pass_encrypt'],[$argument.$hash]);
}


function set_flash($keyname,$value){
	$_REQUEST[$keyname] = $value;
}




?>
