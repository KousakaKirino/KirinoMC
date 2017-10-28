<?php
/**
 *
 *	Kirino Minecraft Server Manager
 *
 *	Powered by Kirinovo
 *
 *	https://www.kirino.cn/
 *
 *	module name: Router
 *
 *	module description: Kirinos System url router.
 *
 **/
 
class Router {
	
	public function location ($urlString) {
		
		$kirinos = new Kirinos();
		
		if (preg_match("#^([A-Za-z0-9]+)/([A-Za-z0-9]+)$#", $urlString)) {
			
			$urlsplit = explode("/", $urlString);
			$urlreq1 = $urlsplit[0];
			$urlreq2 = $urlsplit[1];
			define("RequestString", $urlreq2);
			$loader = new Loader();
			$loader->load($urlreq1);
			
		} elseif (empty($urlString)) {
			
			$kirinos->Loc302("?r=site/home");
			
		} else {
			
			$kirinos->Error(400);
			
		}
	}
	
	public function location2 ($urlString, $id) {
		
		$kirinos = new Kirinos();
		
		if ((preg_match("#^([A-Za-z0-9]+)/([A-Za-z0-9]+)$#", $urlString)) 
			&& (preg_match("/^[A-Za-z0-9]+$/", $id))) {
			
			$urlsplit = explode("/", $urlString);
			$urlreq1 = $urlsplit[0];
			$urlreq2 = $urlsplit[1];
			define("RequestString", $urlreq2);
			define("RequestId", $id);
			$loader = new Loader();
			$loader->load($urlreq1);
			
		} elseif (empty($urlString)) {
			
			$kirinos->Loc302("?r=site/home");
			
		} else {
			
			$kirinos->Error(400);
			
		}
	}
}
