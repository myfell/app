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
| module_name -  extension_name  =>  value
| $extension['module_name']['extension_name'] = '';
|
*/
$extensions['application']['sample'] = array(
                                            'enabled' => FALSE,
                                            'lib_override'    => array(),
                                            'helper_override' => array()
                                            );

//-----------------------------------------------------------------

$extensions['welcome']['error_mail'] = array(
                                            'enabled' => FALSE,
                                            'lib_override'    => array('Exception'),
                                            'helper_override' => array('error')
                                            );

/* End of file config.php */
/* Location: ./application/extensions.php */