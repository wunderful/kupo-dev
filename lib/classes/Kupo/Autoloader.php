<?php

namespace Kupo;

defined('ABSPATH') or die('Access Denied');

class Autoloader {

	static public function loader($class_name)
	{
		$filename = KUPO_CLASSES . '/' . str_replace('\\', '/', $class_name) . ".php";

		if(file_exists($filename)):

			include($filename);

			if(class_exists($class_name))
				return TRUE;

		endif;

		return FALSE;
	}
}

spl_autoload_register('\Kupo\Autoloader::loader');