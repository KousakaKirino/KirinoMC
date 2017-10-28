<?php
/**
 *
 *	Kirino Minecraft Server Manager
 *
 *	Powered by Kirinovo
 *
 *	https://www.kirino.cn/
 *
 *	module name: Loader
 *
 *	module description: Kirinos Class loader
 *
 **/
 
class Loader {
	
	public function load($className) {
		if(($className) && (file_exists(ROOTDIR 
			. "/kirinos/class/" . $className . ".php"))) {
			//Load class
			include(ROOTDIR 
			. "/kirinos/class/" . $className . ".php");
		} else {
			//throw class not found Exception
			$error = new Kirinos();
			$error->Error($this::classException());
		}
	}
	
	public function loadroot($className) {
		if(($className) && (file_exists($className . ".php"))) {
			//Load class
			include($className . ".php");
		} else {
			//throw class not found Exception
			$error = new Kirinos();
			$error->Error($this::classException());
		}
	}
	
	public function start() {
		//Start Kirinos System
		$this::load("kirinos");
		
		//Load router module
		$this::load("router");
		$Router = new Router();
		if ($_GET["id"]) {
			$Router->location2($_GET["r"], $_GET["id"]);
		} else {
			$Router->location($_GET["r"]);
		}
	}
	
	private function classException() {
		return 0;
	}
}
