<?php
defined('BASE') or exit('Access Denied!');

/*
|--------------------------------------------------------------------------
| AVAILABLE EXTENSIONS
|--------------------------------------------------------------------------
| Obullo extensions similar as Obullo modules the main difference is
| when Obullo loaders see the if its extension all files loading from
| /extenstions/name folder. And if extension has a main library
| you can load it by loader::ext('sample');
|
*/
$extensions['sample']['enabled']         = FALSE;
$extensions['sample']['lib_override']    = '';
$extensions['sample']['helper_override'] = '';
$extensions['sample']['public_folder']   = 'public'; 




/* End of file extensions.php */
/* Location: ./application/config/extensions.php */