<?php 
	
	$database = '';
	$user = '';
	$password = '';
	$server = '';
	$app_url = 'http://localhost/myshop';

	if($database != '' || $database != null)
	{
		mysql_connect($server,$user,$password) or die(mysql_error());
		mysql_select_db($database) or die(mysql_error());
	}

	require_once('autoload.php');

?>