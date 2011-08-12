<?php
defined('BASE') or exit('Access Denied!');

/*
|--------------------------------------------------------------------------
| Your ENVIRONMENT. Can be set to any of the following:
|--------------------------------------------------------------------------
| When your application goes to live server you need to set 'DEV' environment
| to 'LIVE' otherwise cookie and some other functionalities does not work.
|
|   o DEV  - DEVELOPMENT
|   o TEST - TEST
|   o QA   - QA
|   o LIVE - PRODUCTION
|
*/
$config['env']                  = 'DEV';

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your Obullo root. Typically this will be your base URL,
| WITH a trailing slash:
| Generally a  "/"  trailing slash enough. Not need to full url of your domain.
|
|    Base Url      "/"
|    Domain Root   "http://your-domain.com"
|
*/
$config['base_url']              = '/';
$config['domain_root']           = ($config['env'] == 'LIVE') ? 'http://your-domain.com' : 'http://localhost';
$config['ssl']                   = ($config['env'] == 'LIVE') ? TRUE : FALSE;

/*
|--------------------------------------------------------------------------
| Public URL (Static Files)
|--------------------------------------------------------------------------
|
| URL to your Static Files.
| http://static.example.com/
|
*/
$config['public_url']            = '/';

/*
|--------------------------------------------------------------------------
| Public Folder Name
|--------------------------------------------------------------------------
|
|    /public
|    /public/js
|    /public/css
|    /public/images
|  
*/
$config['public_folder']         = 'public';

/*
|--------------------------------------------------------------------------
| Obullo Error Handler Enable / Disable Displaying Errors
|--------------------------------------------------------------------------
|  
| Obullo use error_reporting function default as error_reporting(0), 
| however Obullo can catch all php errors and show them friendly.
|   
|   0 - Turn off all error reporting (0)
|   1 - All errors  = E_ALL;
|   OR string (Custom Regex)
|
|   String - Custom Regex Mode Examples:
|
|   Running errors
|       $config['error_reporting'] = 'E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR';
|   
|   Running errors + notices
|       $config['error_reporting'] = 'E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_NOTICE';
|   
|   All errors except notices, warnings, exceptions and database errors
|       $config['error_reporting'] = 'E_ALL ^ (E_NOTICE | E_WARNING | E_EXCEPTION | E_DATABASE)';
|       
|   All errors except notices 
|       $config['error_reporting'] = 'E_ALL ^ E_NOTICE';
*/
$config['error_reporting']       = 1;

/*
|--------------------------------------------------------------------------
| Enable / Disable Advanced Debugging
|--------------------------------------------------------------------------
|
| Enabling advanced debug mode will help you to easy development, if it is
| enabled Obullo will give you more details about application errors.
| For Object dump you will need 32M php memory.To dumping large objects
| increase your memory_limit from your php.ini file.
| 
| Deubug traces should be off which errors needs to continue of execution.
|
*/
$config['debug_backtrace']       = array('enabled' => 'E_ALL ^ (E_NOTICE | E_WARNING)', 'padding' => 5);

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| If you have enabled error logging, you can set an error threshold to 
| determine what gets logged. Threshold options are:
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|    0 = Disables logging, Error logging TURNED OFF
|    1 = Error Messages (including PHP errors)
|    2 = Debug Messages
|    3 = Informational Messages
|    4 = All Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
*/
$config['log_threshold']         = 2;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Paths
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/logs/ folder.  ( Use a full server path with trailing slash. )
| 
| Command Line Task's log files default path is
| applicat/logs/cmd/
|                  
*/
$config['log_path']              = '';

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
*/
$config['log_date_format']       = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are "local" or "gmt".  This pref tells the system whether to use
| your server's local time as the master "now" reference, or convert it to
| GMT.  See the "date helper" page of the user guide for information
| regarding date handling.
|
*/
$config['time_reference']        = 'local';

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
$config['index_page']            = "index.php";

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of "AUTO" works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'            Default - auto detects
| 'PATH_INFO'       Uses the PATH_INFO
| 'QUERY_STRING'    Uses the QUERY_STRING
| 'REQUEST_URI'     Uses the REQUEST_URI
| 'ORIG_PATH_INFO'  Uses the ORIG_PATH_INFO
|
*/
$config['uri_protocol']          = 'AUTO';

/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
|
| This option allows you to add a suffix to all URLs generated by Obullo.
| For more information please see the user guide:
|
| Chapters / General Topics / Obullo Urls
|
*/
$config['url_suffix']            = '';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which set of language files should be used. Make sure
| there is an available translation if you intend to use something other
| than english.
|
*/
$config['language']              = 'english';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
*/
$config['charset']               = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Class / Helper Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the classname/helpername prefix when extending
| native libraries / helpers. For more information please see the user guide.
|
*/
$config['subclass_prefix']       = 'MY_';
$config['subhelper_prefix']      = 'my_';

/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
|
| This lets you specify with a regular expression which characters are permitted
| within your URLs.  When someone tries to submit a URL with disallowed
| characters they will get a warning message.
|
| As a security measure you are STRONGLY encouraged to restrict URLs to
| as few characters as possible.  By default only these are allowed: a-z 0-9~%.:_-
|
| Leave blank to allow all characters -- but only if you are insane.
|
| DO NOT CHANGE THIS UNLESS YOU FULLY UNDERSTAND THE REPERCUSSIONS!!
|
*/
$config['permitted_uri_chars']   = 'a-z 0-9~%.:_-';

/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default Obullo uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string "words" that will
| invoke your controllers and its functions:
| example.com/index.php?d=directory&c=controller&m=function
|
| if subolder exist in your /controllers folder invoke this
| example.com/index.php?d=directory&s=subfolder&c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since Obullo is designed primarily to
| use segment based URLs.
|
*/
$config['enable_query_strings']  = TRUE;
$config['directory_trigger']     = 'd';   
$config['subfolder_trigger']     = 's';   
$config['controller_trigger']    = 'c';
$config['function_trigger']      = 'm';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Sessions helper with encryption
| enabled you MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key']        = "";

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
| 'sess_cookie_name'    = the name you want for the cookie
| 'sess_encrypt_cookie' = TRUE/FALSE (boolean).  Whether to encrypt the cookie
| 'sess_expiration'     = the number of SECONDS you want the session to last.
| 'sess_die_cookie'     = If set TRUE all sessions  will destroy when the browser closed.
|  by default sessions last 7200 seconds (two hours).  Set to zero for no expiration.
| 'time_to_update'      = how many seconds between Obullo refreshing Session Information
| 'sess_db_var'         = normally Obullo use standart '$this->db' variable for session database
|                         crud operations, you can change it like db2, db3 .. 
|
*/
$config['sess_cookie_name']      = 'ob_session';
$config['sess_expiration']       = 7200;
$config['sess_die_cookie']       = FALSE;
$config['sess_encrypt_cookie']   = FALSE;
$config['sess_driver']           = 'native';  // cookie | database
$config['sess_db_var']           = 'db';            
$config['sess_table_name']       = 'ob_sessions';
$config['sess_match_ip']         = FALSE;
$config['sess_match_useragent']  = TRUE;
$config['sess_time_to_update']   = 300;

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix' = Set a prefix if you need to avoid collisions
| 'cookie_domain' = Set to .your-domain.com for site-wide cookies
| 'cookie_path'   =  Typically will be a forward slash
|
*/
$config['cookie_prefix']         = "";
$config['cookie_domain']         = ($config['env'] == 'LIVE') ? '.your-domain.com' : '';
$config['cookie_path']           = "/";
$config['cookie_time']           = (7 * 24 * 60 * 60) + time();

// WARNING ! : For all cookie expiration operations time() function must be at the end.
// Otherwise some cookie and session die functions does not work !

/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled, Obullo
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags']    = FALSE;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
| Determines whether the XSS filter is always active when GET, POST or
| COOKIE data is encountered
|
*/
$config['global_xss_filtering']  = FALSE;
                            
/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy IP
| addresses from which Obullo should trust the HTTP_X_FORWARDED_FOR
| header in order to properly identify the visitor's IP address.
| Comma-delimited, e.g. '10.0.1.200,10.0.1.201'
|
*/
$config['proxy_ips']             = '';


/* End of file config.php */
/* Location: ./application/config/config.php */