<?php
defined('BASE') or exit('Access Denied!');
                                                     
Class App_controller 
{   
    function __autoloader()
    {         
        loader::base_helper('view');
        
        // view_set_folder('css', '/myfolder/sub');
        // view_set_folder('js', '/myfolder');
    } 
}

/* End of file App_controller.php */
/* Location: ./application/parents/App_controller.php */