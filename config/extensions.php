<?php
defined('BASE') or exit('Access Denied!');

/*
|--------------------------------------------------------------------------
| AVAILABLE EXTENSIONS
|--------------------------------------------------------------------------
| Obullo extensions similar as Obullo modules the main difference is
| when Obullo loaders see the if its extension all files loading from
| /extenstions/name folder. And if extension has a main library
| you can load it calling loader::ext('sample'); function.
|
| Congiguration Example
|
| module_name -  option  =>  value
| $extension['modulename']['option'] = '';
|
*/
$extensions['application']['sample']['enabled']         = TRUE;
$extensions['application']['sample']['lib_override']    = array();
$extensions['application']['sample']['helper_override'] = array();

//-----------------------------------------------------------------

$extensions['application']['sample2']['enabled']         = TRUE;
$extensions['application']['sample2']['lib_override']    = array();
$extensions['application']['sample2']['helper_override'] = array();


$extensions['welcome']['error_mail']['enabled']         = TRUE;
$extensions['welcome']['error_mail']['lib_override']    = array('Exception');
$extensions['welcome']['error_mail']['helper_override'] = array('error');


/* End of file config.php */
/* Location: ./application/extensions.php */