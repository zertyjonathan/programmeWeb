<?php
//Author: Willeme ZEL PAPENDJ (willeme@adz-innovate.com)
// PHP DATABASE CONFIGURATION:

$core_config['db']['type'] = 'mysql';		// database engine
$core_config['db']['host'] = 'localhost';	// database host/server
$core_config['db']['port'] = '#DBPORT#';	// database port
$core_config['db']['user'] = 'root';	    // database username
$core_config['db']['pass'] = '';	        // database password
$core_config['db']['name'] = 'userdata';	    // database name
$core_config['db']['charset'] = 'utf8';	    // database name

// SMTP configuration
$core_config['smtp']['relm'] = ''; // yes, not realm, its relm
$core_config['smtp']['user'] = 'willemepapendj@gmail.com';
$core_config['smtp']['pass'] = '';
$core_config['smtp']['host'] = 'smtp.gmail.com';
$core_config['smtp']['port'] = '25';


// Do not change anything below this line unless you know what to do
// -----------------------------------------------------------------


// you can turn on or off PHP error reporting
// on production level you should turn off PHP error reporting (set to 0), by default its on
//error_reporting(0);
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_STRICT);

// logs directories
$apps_path['logs']		= 'E:\Willeme\xampp183\php\logs';

// log level: 0=disabled, 1=info, 2=warning, 3=debug, 4=verbose
// WARNING: log level 3 and 4 will also save sensitif information such as password for used gateway
$core_config['logstate']	= 2;

// log file
$core_config['logfile']		= 'reservation.log';

// WARNING: will log almost anything but passwords
$core_config['logaudit']	= true;

// log audit file
$core_config['logauditfile']	= 'audit.log';

// are we using http or https ? the default is using http instead https
$core_config['ishttps']	= false;

// webservices require username
$core_config['webservices_username']	= true;
?>