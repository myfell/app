<?php
defined('BASE') or exit('Access Denied!');
/**
|--------------------------------------------------------------------------
| User Front Controller for Bootstrap.php file.
|--------------------------------------------------------------------------
| User can create own Front Controller who want replace
| system methods by overriding to Bootstrap.php library.
|
| @see User Guide: Chapters / General Topics / Control Your Application Boot
|
*/

/**
|--------------------------------------------------------------------------
| Set default time zone identifer for date function.
|--------------------------------------------------------------------------
| 
| Set the default timezone identifier. ( Set server time )
| @see  http://www.php.net/manual/en/timezones.php
| 
*/
date_default_timezone_set('GMT');

/**
|--------------------------------------------------------------------------
| Native PHP Error Handler (Default Off) 
|--------------------------------------------------------------------------
| For security reasons its default off.
| Default Obullo error handle active also you don't want to use Obullo
| development error handler you can turn off it easily from 
| application/config.php file.
|
*/                                   
error_reporting(E_ALL | E_STRICT); 
error_reporting(0);

/**
|--------------------------------------------------------------------------
| Disable Deprecated Zend Mode
|--------------------------------------------------------------------------
|
| Enable compatibility mode with Zend Engine 1 (PHP 4). It affects the cloning, 
| casting (objects with no properties cast to FALSE or 0), and comparing of objects. 
| In this mode, objects are passed by value instead of reference by default.
| 
| This feature has been DEPRECATED and REMOVED as of PHP 5.3.0. 
| It should be '0'. 
| 
*/
ini_set('zend.ze1_compatibility_mode', 0); 

// Put your functions here ..
 

// END Bootstrap.php File

/* End of file Bootstrap.php */
/* Location: ./application/core/Bootstrap.php */