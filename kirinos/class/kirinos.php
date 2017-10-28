<?php
/**
 *
 *	Kirino Minecraft Server Manager
 *
 *	Powered by Kirinovo
 *
 *	https://www.kirino.cn/
 *
 *	module name: Kirinos
 *
 *	module description: Kirinos Main class
 *
 **/
 
class Kirinos {
	
	public function Error ($exceptionType) {
		
		switch ($exceptionType) {
			case 0:
				echo "<b>Kirinos Error: </b>Class file not found.";
				break;
			case 400:
				echo "<b>Kirinos Error: </b>400 Bad request.";
				break;
		}
		
	}
	
	public function Loc302 ($url) {
		
		echo "<script>location='" . $url . "';</script>";
		exit;
		
	}
}
