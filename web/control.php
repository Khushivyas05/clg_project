<?php
include_once('../admin/model.php');
class control extends model
{
    function __construct()
    {
        session_start();
        model:: __construct();
        $path=$_SERVER['PATH_INFO'];

        switch($path)
        {
            case '/about':
            include_once('about.php');
            break;

            case '/contact':
            include_once('contact.php');
            break;
            
            case '/index':
            include_once('index.php');
            break;
            
            case '/trackorder':
            include_once('trackorder.php');
            break; 

            case '/signup':
            include_once('signup.php');
            break;
            
            case '/login':
            include_once('login.php');
            break;    

            default:
            include_once('404.php');
            break;
            

        }
    }
    
}
$obj=new control;
?>
    
