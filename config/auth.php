<?php
defined('BASE') or exit('Access Denied!');
/*
|--------------------------------------------------------------------------
| Auth Library Options
|--------------------------------------------------------------------------
|
| Configure auth library settings
|
*/
$auth['session_prefix']      = 'auth_';     // Session storage prefix
$auth['db_var']              = 'db';        // Database connection variable
$auth['tablename']           = 'users';     // The name of the database tablename
$auth['username_col']        = 'user_username';  // The name of the table field that contains the username.
$auth['password_col']        = 'user_password';  // The name of the table field that contains the password.
$auth['username_length']     = '60';        // The string length of the username.
$auth['password_length']     = '60';        // The string length of the password.
$auth['md5']                 = TRUE;        // Whether to use md5 hash ?
$auth['allow_login']         = TRUE;        // Whether to allow logins to be performed on this page.

$auth['post_username']       = 'username';  // The name of the form field that contains the username to authenticate.
$auth['post_password']       = 'password';  // The name of the form field that contains the password to authenticate.
$auth['advanced_security']   = TRUE;        // Whether to enable the advanced security features. 
$auth['query_binding']       = TRUE;        // Whether to enable the PDO query binding feature for security.
$auth['regenerate_sess_id']  = FALSE;       // Set to TRUE to regenerate the session id on every page load or leave as FALSE to regenerate only upon new login.