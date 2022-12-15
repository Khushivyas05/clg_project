<?php
 include_once('../admin/model.php');

class control extends model
{
	function __construct()
	{
		model::__construct();
		session_start();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			$fetcharr=$this->selectall('category');
			include_once('index.php');
			break;
			
			case '/manage_feedback':
			$feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			
			
			case '/manage_city':
			$city_arr=$this->selectall('city');
			include_once('manage_city.php');
			break;
			
			
			case '/manage_cityrate':
			$city_rate_arr=$this->selectall('city_rate');
			include_once('manage_cityrate.php');
			break;
			
			
			case '/manage_category':
			$cartegory_arr=$this->selectall('category');
			include_once('manage_category.php');
			break;
			
			case'/editfeedback':
			if(isset($_REQUEST['edit_feedback_id']))
			{
				$feedback_id=$_REQUEST['edit_feedback_id'];
				$where=array("feedback_id"=>$feedback_id);
				$run=$this->select_where('feedback',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$feedback_id=$_REQUEST['feedback_id'];
					$cust_id=$_REQUEST['cust_id'];
					$comment=$_REQUEST['comment'];
					$date=$_REQUEST['date'];
	             	$arr=array("feedback_id"=>$feedback_id,"cust_id"=>$cust_id,"comment"=>$comment,"date"=>$date);
					$res=$this->update('feedback',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_feedback';
							</script>";
						}
					}
				}	
			
			include_once('editfeedback.php');
			break;
			
			
			case'/editcity':
			if(isset($_REQUEST['edit_city_id']))
			{
				$city_id=$_REQUEST['edit_city_id'];
				$where=array("city_id"=>$city_id);
				$run=$this->select_where('city',$where);
			    $fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$city_id=$_REQUEST['city_id'];
					$state_id=$_REQUEST['state_id'];
					$city_name=$_REQUEST['city_name'];
	             	$arr=array("city_id"=>$city_id,"state_id"=>$state_id,"city_name"=>$city_name);
					$res=$this->update('city',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_city';
							</script>";
						}
					}
				}	
			
			include_once('editcity.php');
			break;
			
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$emailid=$_REQUEST['emailid'];
				$cont_no=$_REQUEST['cont_no'];
				$message=$_REQUEST['message'];
				$arr=array("name"=>$name,"emailid"=>$emailid,"cont_no"=>$cont_no,"message"=>$message);
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script> alert('Inquiry Success') </script>";				
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('contact.php');
			break;
			
			
			case '/carsform':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$des=$_REQUEST['des'];
				$capacity=$_REQUEST['capacity'];
				$mileage=$_REQUEST['mileage'];
				$price=$_REQUEST['price'];
				$type=$_REQUEST['type'];
				$fuel_type=$_REQUEST['fuel_type'];
				
			}
			include_once('carsform.php');
			break;
			
			case '/booking':
			include_once('booking.php');
			break;
			
			case '/bookingform':
			include_once('bookingform.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['submit']))
			{
				
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("user_name"=>$user_name,"pass"=>$pass);
				$run=$this->select_where('customer',$where);
				
				$res=$run->num_rows; 
				if($res==1) 
				{
					$data=$run->fetch_object();
					$status=$data->status;
					if($status=="Unblock")
					{	
					  $_SESSION['user_name']=$user_name;
					
					  echo "<script> 
						alert('Login Success') 
						window.location='index';
						</script>";
					}
					else 
					{	
				      echo  "<script>
					  alert('Status block')
					  window.location='login';
					  </script>";	
					}
				}
                else
				{
					echo "<script> 
					alert('Login Failed due wrong credential') 
					window.location='index';
					</script>";
				}
			}
			include_once('login.php');
			break;
			
			case '/logout':
			unset($_SESSION['user_name']);
			echo "<script>
			alert('Logout success')
			window.location='index'
			</script>";
			
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$user_name=$_REQUEST['user_name'];
				$emailid=$_REQUEST['emailid'];
				$con_no=$_REQUEST['con_no'];
				$address=$_REQUEST['address'];
				$a_no=$_REQUEST['a_no'];
				$dl_no=$_REQUEST['dl_no'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$arr=array("name"=>$name,"user_name"=>$user_name,"emailid"=>$emailid,"pass"=>$pass,"con_no"=>$con_no,"address"=>$address,"a_no"=>$a_no,"dl_no"=>$dl_no);
				
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					
					echo "<script> 
					alert('signup success') 
					window.location='index';
					</script>";
				}
				else
				{
					echo "not success";
				}
			}
			include_once('signup.php');
			break;
			
			case '/myprofile':
			$where=array("user_name"=>$_SESSION['user_name']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('myprofile.php');
			break;
			
			case '/editprofile':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$user_name=$_REQUEST['user_name'];
					$emailid=$_REQUEST['emailid'];
					$con_no=$_REQUEST['con_no'];
					$address=$_REQUEST['address'];
					
					$arr=array("name"=>$name,"user_name"=>$user_name,"emailid"=>$emailid,"con_no"=>$con_no,"address"=>$address);
			        $res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success')
						window.location='myprofile'
						</script>";
					}
					
				}
			}
			include_once('editprofile.php');
			break;
			
			case '/show':
			if(isset($_REQUEST['car_id']))
			{
				$car_id=$_REQUEST['car_id'];
				$where=array("car_id"=>$car_id);
				$run=$this->select_where('car',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$cate_name=$_REQUEST['cate_name'];
					$des=$_REQUEST['des'];
					$arr=array("cate_name"=>$cate_name,"des"=>$des);
					$res=$this->selectall('car',$arr,$where);
					if($res)
					{
						echo "<script>Welcome</script>";
					}
				}
				
			}
			include_once('cars.php');
			break;
			
			default :
			include_once('blog.php');
			break;
		}
		
	}
}
$obj=new control;
?>