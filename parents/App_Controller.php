<?php
defined('BASE') or exit('Access Denied!');
                                                     
Class App_Controller 
{   
    function __autoloader()
    {         
        loader::helper('ob/view');
        
        view_set_folder('view_layout', 'layouts', FALSE);  // you can set directory for view functions.
    } 
}

/* End of file App_controller.php */
/* Location: ./application/parents/App_controller.php */