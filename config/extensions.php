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
|              module_name - extension_name  = 'value'
| $extension['module_name']['extension_name'] = '';
|
*/
$extensions['application']['e_notifier']['enabled']         = FALSE;
$extensions['application']['e_notifier']['lib_override']    = array('Exception');
$extensions['application']['e_notifier']['helper_override'] = array('error');

//-----------------------------------------------------------------

$extensions['welcome']['ext_name']['enabled']               = FALSE;
$extensions['welcome']['ext_name']['lib_override']          = array();
$extensions['welcome']['ext_name']['helper_override']       = array();


/* End of file config.php */
/* Location: ./application/extensions.php */