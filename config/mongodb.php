<?php
defined('BASE') or exit('Access Denied!');

/*
|--------------------------------------------------------------------------
| Mongo Db Config 
|--------------------------------------------------------------------------
| Mongodb database api configuration file.
| 
| Prototype: 
|
|   $mongodb['key'] = value;
| 
*/

$mongodb['host']     = (ENV == 'LIVE') ? 'localhost' : 'localhost';
$mongodb['port']     = '27017';
$mongodb['database'] = '';
$mongodb['username'] = '';
$mongodb['password'] = '';