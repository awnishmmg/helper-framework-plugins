<?php
$hooks = include 'hooks.php';

foreach ($hooks as $key => $value) {
	if(in_array($key, $hooks[basename(__FILE__,'.php').'_keys'])){
		include $value;
	}
}