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

            case '/signup.php':
            if(isset($_REQUEST['submit']))
            {
                $name=$_REQUEST['name'];
                $address=$_REQUEST['address'];
                $contact=$_REQUEST['contact'];
                $email=$_REQUEST['email'];
                $password=$_REQUEST['password'];
                $username=$_REQUEST['username'];

                $arr=array("name"=>$name,"address"=>$address,"contact"=>$contact,"email"=>$email,"password"=>$password,"username"=>$username);
                $res=$this->insert('contact',$arr);

                if($res)
                {
                    echo "<script>
					alert('Inquiry Success');
					</script>";
                }
                else
                {
                    echo "Inquiry not success";
                }
            }    
            include_once('signup.php');
            break;
            
            case '/login':
            if(isset($_REQUEST['submit']))
            {
                $username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				
                $where=array("username"=>$username,"password"=>$password);
				$run=$this->select_where('customer_details',$where);

                $res=$run->num_rows; 
				if($res==1)
                {
                    
				        $data=$run->fetch_object();
					    $status=$data->status;
					    if($status=="Unblock")
                        {
                            $_SESSION['username']=$username;
                            echo "<script> 
                            alert('Login Success') 
                            window.location='index';
                            </script>";
                        }
                        else
                        {
                            echo "<script> 
						    alert('Login Failed due to blocked') 
						    window.location='login';
						    </script>";
                        }

                } 
                else
                {
                    
					echo "<script> 
                    alert('Login Failed due wrong credentials') 
                    window.location='index';
                    </script>";
                }
				
            }
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
    
