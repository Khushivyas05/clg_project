<?php
include_once('model.php');

class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				
				
				$where=array("username"=>$username,"password"=>$password);
				$run=$this->select_where('admin_details',$where);
				
				$res=$run->num_rows; 
				if($res==1) 
				{
					
					$_SESSION['admin_details']=$username;
					
					echo "<script> 
						alert('Login Success') 
						window.location='dashboard';
						</script>";
					
				}
				else
				{
					echo "<script> 
						alert('Login Failed due wrong credebntial') 
						window.location='index';
						</script>";
				}
			}
			include_once('index.php');
			break;
			
			case '/admin_logout':
			unset($_SESSION['admin']);
			echo "<script>
			alert('Logout success')
			window.location='index'
			</script>";
			
			case '/profile':
			$where=array("user_name"=>$_SESSION['admin']);
			$run=$this->select_where('admin',$where);
			$fetch=$run->fetch_object();
			include_once('profile.php');
			break;
			
			case '/404':
			include_once('404.php');
			break;
			
			
			
			case '/manage_emp':
			$manage_emp_arr=$this->selectall('employee_details');
			include_once('manage_emp.php');
			break;
			
			
			case '/add_emp':
            if(isset($_REQUEST['submit']))
			{
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
                $emp_name=$_REQUEST['emp_name'];
				$emp_add=$_REQUEST['emp_add'];
				$designation=$_REQUEST['designation'];
				$email=$_REQUEST['email'];
				$contact=$_REQUEST['contact'];
				$driving_licence=$_REQUEST['driving_licence'];
				
				$arr=array("username"=>$username,"password"=>$password,"emp_name"=>$emp_name,"emp_add"=>$emp_add,"designation"=>$designation,"email"=>$email,"contact"=>$contact,"driving_licence"=>$driving_licence);
				
				$res=$this->insert('employee_details',$arr);
				if($res)
				{
					echo  "<script>alert('Register success')</script>";
				}
				else
				{
					echo "not success";
				}
			}
			include_once('add_emp.php');
			break;
			
			case '/editemp':
			if(isset($_REQUEST['edit_emp_id']))
			{
				$emp_id=$_REQUEST['edit_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$run=$this->select_where('employee_details',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$e_id=$_REQUEST['e_id'];
					$e_name=$_REQUEST['e_name'];
					$user_name=$_REQUEST['user_name'];
					$emailid=$_REQUEST['emailid'];
					$address=$_REQUEST['address'];
					$contact_no=$_REQUEST['contact_no'];
					
					$arr=array("e_id"=>$e_id,"e_name"=>$e_name,"user_name"=>$user_name,"emailid"=>$emailid,"address"=>$address,"contact_no"=>$contact_no);
					$res=$this->update('employee_details',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success')
						window.location='manage_emp';
						</script>";
					}
				}
			}
			include_once('editemp.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/manage_customer':
			$manage_user_arr=$this->selectall('customer_details');
			include_once('manage_customer.php');
			break;
			
			case '/editcustomer':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer_details',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$cust_id=$_REQUEST['cust_id'];
					$cust_name=$_REQUEST['cust_name'];
					$cust_add=$_REQUEST['cust_add'];
					$contact_no=$_REQUEST['contact_no'];
					$email=$_REQUEST['email'];
					$username=$_REQUEST['username'];
					
					$arr=array("cust_id"=>$cust_id,"cust_name"=>$cust_name,"cust_add"=>$cust_add,"contact_no"=>$contact_no,"email"=>$email,"username"=>$username);
					$res=$this->update('customer_details',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success');
						window.location='manage_customer';
						</script>";
					}
				}
			}
			include_once('editcustomer.php');
			break;
			
			
			
			case '/manage_feedback':
			$manage_feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			
			case '/edit_feedback':
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
					$arr=array("feedback_id"=>$feedback_id,"cust_id"=>$cust_id,"comment"=>$comment);
					$res=$this->update('feedback',$arr,$where);
					if($res)
					{
					    echo "<script>
						alert('update success');
						window.location='manage_feedback';
						</script>";
					}
				}
			}
			include_once('edit_feedback.php');
			break;
			
			
			case '/delete':
			if(isset($_REQUEST['del_employee_id']))
			{
				$e_id=$_REQUEST['del_employee_id'];
				$where=array("e_id"=>$e_id);
				$res=$this->delete_where('employee',$where);
				if($res)
				{
					echo "<script>
					  alert('Delete success')
					  window.location='manage_emp';
					  </script>";
				}
			 }
			 
			 if(isset($_REQUEST['del_client_id']))
			 {
				 $client_id=$_REQUEST['del_client_id'];
				 $where=array("client_id"=>$client_id);
				 $res=$this->delete_where('client',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_client';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_cust_id']))
			 {
				 $cust_id=$_REQUEST['del_cust_id'];
				 $where=array("cust_id"=>$cust_id);
				 $res=$this->delete_where('customer',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_user';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_cont_id']))
			 {
				 $cont_id=$_REQUEST['del_cont_id'];
				 $where=array("cont_id"=>$contact_id);
				 $res=$this->delete_where('contact',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_contact';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_feed_id']))
			 {
				 $feedback_id=$_REQUEST['del_feed_id'];
				 $where=array("feedback_id"=>$feedback_id);
				 $res=$this->delete_where('feedback',$where);
				 if($res)
				 {
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_feedback';
					  </script>";
				 }
			 }
			  if(isset($_REQUEST['del_booking_id']))
			 {
				 $booking_id=$_REQUEST['del_booking_id_id'];
				 $where=array("booking_id"=>$booking_id);
				 $res=$this->delete_where('booking',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_booking';
					  </script>";
				 }
			 }
			  if(isset($_REQUEST['del_p_id']))
			 {
				 $p_id=$_REQUEST['del_p_id'];
				 $where=array("p_id"=>$p_id);
				 $res=$this->delete_where('payment',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_payment';
					  </script>";
				 }
			 }
			 if(isset($_REQUEST['del_car_id']))
			 {
				 $car_id=$_REQUEST['del_car_id'];
				 $where=array("car_id"=>$car_id);
				 
				 $run=$this->select_where('car',$where);
				 $fetch=$run->fetch_object();
				 $img=$fetch->img;
				 
				 $res=$this->delete_where('car',$where);
				 if($res)
				 {
					  unlink('../web/picture/car/'.$img);
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_car';
					  </script>";
				 }
			 }
			  if(isset($_REQUEST['del_cate_id']))
			 {
				 $cate_id=$_REQUEST['del_cate_id'];
				 $where=array("cate_id"=>$cate_id);
				 $run=$this->select_where('category',$where);
				 $fetch=$run->fetch_object();
				 $cate_img=$fetch->cate_img;
				 
				 $res=$this->delete_where('category',$where);
				 if($res)
				 {
					 unlink('../web/picture/cartype/'.$cate_img);
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_cartype';
					  </script>";
				 }
			 }
			break;
			
			
			
			default :
			include_once('404.php');
			break;
		}	
	}
}
$obj=new control;
?>