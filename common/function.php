<?php
	function D($name) {
		static $res = array();
		if (empty($res[$name])) {
			$name = ucfirst($name);
			$classname = $name.'Model';
			include_once "./model/{$classname}.class.php";
			$model = new $classname();
			$res[$name] = $model;
		}
		return $res[$name];
	}