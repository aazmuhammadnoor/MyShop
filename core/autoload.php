<?php 
	if(!function_exists('base_url'))
	{
		function base_url($url=null)
		{
			$url = str_replace('.', '/', $url);
			return $GLOBALS['app_url'].'/'.$url;
		}
	}

	if(!function_exists('asset'))
	{
		function asset($url=null)
		{
			return $GLOBALS['app_url'].'/asset/'.$url;
		}
	}

	if(!function_exists('use_file'))
	{
		function use_file($file)
		{
			$file = str_replace('.', '/', $file);
			include($file.'.php');
		}
	}

	if(!function_exists('media'))
	{
		function media($url=null)
		{
			return $GLOBALS['app_url'].'/media/'.$url;
		}
	}

?>