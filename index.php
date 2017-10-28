<?php
/**
 *
 *	Kirino Minecraft Server Manager
 *
 *	Powered by Kirinovo
 *
 *	https://www.kirino.cn/
 *
 **/
 
define("ROOTDIR", str_replace("\\", "/", __DIR__));
include(ROOTDIR . "/kirinos/app/loader.php");
$Loader = new Loader();
$Loader->start();
