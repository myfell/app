<?php
defined('BASE') or exit('Access Denied!');

/*
|--------------------------------------------------------------------------
| AVAILABLE EXTENSIONS
|--------------------------------------------------------------------------
| Obullo extensions similar as Obullo modules the main difference is
| when Obullo loaders see the if its extension all files loading from
| /modules/extension_name folder. And if extension has a main library
| you can call it using loader::ext('sample');.
|
| Prototype:
|
| $extensions['module_name']['extension_name']['enabled']         = TRUE;
| $extensions['module_name']['extension_name']['lib_override']    = array( .. , .. );
| $extensions['module_name']['extension_name']['helper_override'] = array( .. , .. );
|
*/
$extensions['application']['e_notifier']['enabled']         = FALSE;
$extensions['application']['e_notifier']['lib_override']    = array('Exception');
$extensions['application']['e_notifier']['helper_override'] = array('error');


/* End of file config.php */
/* Location: ./application/config/extensions.php */