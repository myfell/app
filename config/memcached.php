<?php
defined('BASE') or exit('Access Denied!');

/*
|--------------------------------------------------------------------------
| Memcached Config 
|--------------------------------------------------------------------------
| Default 
| Memcache api configuration file
| 
| Prototype: 
|
|   $memcached['key'] = value;
| 
*/

$memcached['host'] = (ENV == 'LIVE') ? 'localhost' : 'localhost';
$memcached['port'] = '11211';