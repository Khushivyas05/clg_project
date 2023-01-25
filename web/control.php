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

            case '/truck':
            if(isset($_REQUEST['cate_id']))
            {
                $cate_id=$_REQUEST['cate_id'];
                $where=array("cate_id"=>$cate_id);
                $run=$this->select_where('category',$where);
                $fetch=$run->fetch_object();

            }
            include_once('truck.php');
            break;

            case '/category':
            $fetcharr=$this->selectall('category');
            include_once('category.php');
            break;
            
            case '/index':
            $fetcharr=$this->selectall('category');
            include_once('index.php');
            break;

            
            case '/booking':
            $fetcharr=$this->selectall('customer_details');
          
            if(isset($_REQUEST['submit'])) 
            {
                $cust_id=$_REQUEST['cust_id'];
                
                $source=$_REQUEST['source'];
                $destination=$_REQUEST['destination'];
                $book_date=$_REQUEST['book_date'];
                $price=$_REQUEST['price'];
                $payment_type=$_REQUEST['payment_type'];

                $arr=array("cust_id"=>$cust_id,"source"=>$source,"destination"=>$destination,"book_date"=>$book_date,"price"=>$price,"payment_type"=>$payment_type);
                $res=$this->insert('booking',$arr);
				if($res)
				{
					echo  "<script>alert('Register success')</script>";
				}
				else
				{
					echo "not success";
				}
            }
            include_once('booking.php');
            break;
            
            case '/trackorder':
            include_once('trackorder.php');
            break; 

            case '/cart':
            if(isset($_REQUEST['cate_id']))
            {
                $cate_id=$_REQUEST['cate_id'];
                $where=array("cate_id"=>$cate_id);
                $run=$this->select_where('category',$where);
                $fetch=$run->fetch_object();
            }
            include_once('cart.php');
            break;

            case '/signup':
            $fetcharr=$this->selectall('city');
            if(isset($_REQUEST['submit']))
            {
                $city_id=$_REQUEST['city_id'];
                $cust_name=$_REQUEST['cust_name'];
                $cust_add=$_REQUEST['cust_add'];
                $contact_no=$_REQUEST['contact_no'];
                $email=$_REQUEST['email'];
                $password=$_REQUEST['password'];
                $username=$_REQUEST['username'];

                $arr=array("city_id"=>$city_id,"cust_name"=>$cust_name,"cust_add"=>$cust_add,"contact_no"=>$contact_no,"email"=>$email,"password"=>$password,"username"=>$username);
                $res=$this->insert('customer_details',$arr);

                if($res)
                {
                    echo "<script>
					alert('Signup success');
					</script>";
                }
                else
                {
                    echo "<script>
					alert('Signup not success');
					</script>";
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
                    $_SESSION['username']=$username;
                    echo "<script> 
                    alert('Login Success') 
                    window.location='index';
                    </script>";
                }
                else
                {
                    echo "<script> 
                    alert('Login Failed') 
                    window.location='login';
                    </script>";
                }
				
            }
            include_once('login.php');
            break;   
            
            case '/logout':
            unset($_SESSION['username']);
            echo "<script>
                 alert('Logout Success');
                 window.location='index';
                 </script>";
            break;
            

            default:
            include_once('404.php');
            break;
            

        }
    }
    
}
$obj=new control;
?>
    
