<?php
//Error Library

$success_open = '<div class="alert alert-success" role="alert">';
$success_close = '</div>'; 

$error_open = '<div class="alert alert-danger" role="alert">';
$error_close = '</div>'; 

$msg['301'] = "{$error_open} * Invalid Request {$error_close}";
$msg['302'] = "{$success_open} Registration Success {$success_close}";
$msg['303'] = "{$error_open} * Email already exist {$error_close}";

$msg['304'] = "{$success_open} Record Deleted {$success_close}";
$msg['305'] = "{$error_open} !! Oops Cant Delete {$error_close} ";

$msg['306'] = "{$success_open} Updated Successfully {$success_close}";

$msg['400'] ="{$error_open} !! Something Went Wrong {$error_close}";

$msg['307'] = "{$error_open} Invalid Email or Password {$error_close}";
$msg['308'] = "{$error_open} Account Disabled By Admin {$error_close}";











