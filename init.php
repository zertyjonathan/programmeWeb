<?php
//Author: Willeme ZEL PAPENDJ (willemepapendj@gmail.com)

// ini_set( 'display_errors', 'Off' );

include "config.php";

// security, checked by essential files under subdir
define('_SECURE_', 1);

// generate a unique Process ID
define('_PID_', uniqid('PID'));

$core_config['daemon_process'] = $DAEMON_PROCESS;

if (!$core_config['daemon_process']) {
	if (trim($SERVER_PROTOCOL)=="HTTP/1.1") {
		header ("Cache-Control: no-cache, must-revalidate");
	} else {
		header ("Pragma: no-cache");
	}
	@session_start();
	ob_start();
}


// DB config defines
define('_DB_TYPE_', $core_config['db']['type']);
define('_DB_HOST_', $core_config['db']['host']);
define('_DB_PORT_', $core_config['db']['port']);
define('_DB_USER_', $core_config['db']['user']);
define('_DB_PASS_', $core_config['db']['pass']);
define('_DB_NAME_', $core_config['db']['name']);
define('_DB_CHAR_', $core_config['db']['charset']);

$c_script_filename = __FILE__;
$c_php_self = $_SERVER['PHP_SELF'];
$c_http_host = $_SERVER['HTTP_HOST'];

// base application directory
$apps_path['base']        = dirname($c_script_filename);

// base application http path
$http_path['base']        = ( $core_config['ishttps'] ? "https://" : "http://" ).$c_http_host.( dirname($c_php_self)=='/' ? '/' : dirname($c_php_self) );

// libraries directory
$apps_path['libs']	= $apps_path['base'].'/lib';
$http_path['libs']	= $http_path['base'].'/lib';

//API directories
$apps_path['api']	= $apps_path['base'].'/api';
$http_path['api']	= $http_path['base'].'/api';

// core plugins directories
$apps_path['incs']	= $apps_path['base'].'/inc';
$http_path['incs']	= $http_path['base'].'/inc';

$apps_path['commons']	= $apps_path['base'].'/commons';
$http_path['commons']	= $http_path['base'].'/commons';

// set defines
define('_APPS_PATH_BASE_', $apps_path['base']);
define('_HTTP_PATH_BASE_', $http_path['base']);

define('_APPS_PATH_LIBS_', $apps_path['libs']);
define('_HTTP_PATH_LIBS_', $http_path['libs']);

define('_APPS_PATH_INCS_', $apps_path['incs']);
define('_HTTP_PATH_INCS_', $http_path['incs']);

define('_APPS_PATH_API_', $apps_path['api']);
define('_HTTP_PATH_API_', $http_path['api']);
define('_SERVER_URI_',$_SERVER['REQUEST_URI']);


// insert to global config
$core_config['apps_path'] = $apps_path;
$core_config['http_path'] = $http_path;


$_REQUEST = array_merge($_GET, $_POST);

$servername = "localhost";
$database = "ebone";
$username = "root";
$password = "root";
$charset = "utf8mb4";

// try {

// 	$dsn = "mysql:host="._DB_HOST_.";dbname="._DB_NAME_.";charset="._DB_CHAR_;
// 	$pdo = new PDO($dsn, _DB_USER_, _DB_PASS_);
// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// }
// catch (PDOException $e)
// {
// 	die("Connection failed:". $e->getMessage());
// }
 
?>