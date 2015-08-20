<?php

header("Access-Control-Allow-Origin: *");

/**
 * CORS非简单跨域请求第一次讯问是否支持跨域
 */
if($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Authorization, Accept, X-Requested-With, sessionhash");
    header("Access-Control-Max-Age", 3600);
    exit;
}

//REST模式
define('MODE_NAME', 'rest');
define('__EXT__', 'json');
define("CTS", time()); // Current Timestamp
define("DS", DIRECTORY_SEPARATOR);

define("ROOT_PATH", dirname(__FILE__));
define("ENTRY_PATH", ROOT_PATH."/server");

define("APP_NAME", "MILES");
define("APP_DEBUG", true);
define("APP_PATH", "./server/");

if(APP_DEBUG) {
    error_reporting(E_ALL^E_NOTICE^E_WARNING);
} else {
    error_reporting(0);
}
//add by xuye
if("/install" != $_REQUEST["s"] && !$_REQUEST["installing"] && (!is_file(ENTRY_PATH."/Data/install.lock") or !is_file(ENTRY_PATH."/Conf/config.php"))) {
    header("Location:install.html");
}
require './server/ThinkPHP/ThinkPHP.php';
