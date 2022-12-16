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
			include_once('index.php');
			break;
			
			case '/manage_feedback':
			$manage_feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			
			
			case '/manage_city':
			$manage_city_arr=$this->selectall('city');
			include_once('manage_city.php');
			break;
			
			
			case '/manage_cityrate':
			$manage_cityrate_arr=$this->selectall('city_rate');
			include_once('manage_cityrate.php');
			break;
			
			
			case '/manage_category':
			$manage_category_arr=$this->selectall('category');
			include_once('manage_category.php');
			break;
			
			/*case'/editfeedback':
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
							window.location='manage_feedback.php';
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
					{
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_city.php';
							</script>";
						}
					}
				}	
			
			include_once('editcity.php');
			break;

			case'/editcityrate':
				if(isset($_REQUEST['edit_cr_id']))
				{
					$cr_id=$_REQUEST['edit_cr_id'];
					$where=array("cr_id"=>$cr_id);
					$run=$this->select_where('city_rate',$where);
					$fetch=$run->fetch_object();
					
					if(isset($_REQUEST['submit']))
					{
						$cr_id=$_REQUEST['cr_id'];
						$city_id=$_REQUEST['city_id'];
						$rate=$_REQUEST['rate'];
						$arr=array("cr_id"=>$cr_id,"city_id"=>$city_id,"rate"=>$rate);
						$res=$this->update('city',$arr,$where);
							if($res)
							{
								echo "<script> 
								alert('Update Success'); 
								window.location='manage_cityrate';
								</script>";
							}
						}
					}	
				
				include_once('editcityrate.php');
				break;

				case '/editcategory':
					if(isset($_REQUEST['edit_cate_id']))
					{
						$cate_id=$_REQUEST['edit_cate_id'];
						$where=array("cate_id"=>$cate_id);
						$run=$this->select_where('category',$where);
						$fetch=$run->fetch_object();
						$old_file=$fetch->cate_img;
						
						if(isset($_REQUEST['submit']))
						{
							$cat_id=$_REQUEST['cate_id'];
							$model_name=$_REQUEST['model_name'];
							$company_name=$_REQUEST['company_name'];
							$vehicle_number=$_REQUEST['vehicle_number'];
							$truck_capacity=$_REQUEST['truck_capacity'];
							$img=$_REQUEST['img'];

							
							if($_FILES['img']['size']>0)
							{
								$cat_img=$_FILES['cat_img']['name'];
								$path='images'.$cat_img;
								$dup_file=$_FILES['img']['tmp_name'];
								move_uploaded_file($dup_file,$path);
								
								$arr=array("cate_id"=>$cate_id,"model_name"=>$model_name,"company_name"=>$company_name,"vehicle_number"=>$vehicle_number,"truck_capacity"=>$truck_capacity,"img"=>$img);
								$res=$this->update('category',$arr,$where);
								if($res)
								{
									unlink('images'.$old_file);
									echo "<script>
									alert('Update success');
									window.location='manage_cartype';
									</script>";
								}
							}
							else
							{
								$arr=array("cate_id"=>$cate_id,"model_name"=>$model_name,"company_name"=>$company_name,"vehicle_number"=>$vehicle_number,"truck_capacity"=>$truck_capacity,"img"=>$img);
								$res=$this->update('category',$arr,$where);
								if($res)
								{
									echo "<script>
									alert('Update success');
									window.location='manage_category';
									</script>";
								}
							}
						}
					}
					include_once('editcategory.php');
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
			break;*/
			
			case '/404':
			include_once('404.php');
			break;
			
			
			
			case '/manage_emp':
			$manage_emp_arr=$this->selectall('employee_details');
			include_once('manage_emp.php');
			break;
			
			
			/*case '/add_emp':
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
					$emp_id=$_REQUEST['emp_id'];
					$emp_name=$_REQUEST['emp_name'];
					$emp_add=$_REQUEST['emp_add'];
					$username=$_REQUEST['username'];
					$password=$_REQUEST['password'];
					$designation=$_REQUEST['designation'];
				    $email=$_REQUEST['email'];
				    $contact=$_REQUEST['contact'];
				    $driving_licence=$_REQUEST['driving_licence'];
					
					$arr=array("emp_id"=>$emp_id,"emp_name"=>$emp_name,"emp_add"=>$emp_add,"username"=>$username,"password"=>$password,"designation"=>$designation,"email"=>$email,"contact"=>$contact,"driving_licence"=>$driving_licence);
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
			break;*/
			
			case '/manage_customer':
			$manage_customer_arr=$this->selectall('customer_details');
			include_once('manage_customer.php');
			break;
			
			/*case '/editcustomer':
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
			break;*/
			
			
			
			case '/manage_feedback':
			$manage_feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			
			/*case '/edit_feedback':
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
			break;*/

			case '/manage_state':
			$manage_state_arr=$this->selectall('state');
			include_once('manage_state.php');
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
			 if(isset($_REQUEST['del_feedback_id']))
			 {
				 $feedback_id=$_REQUEST['del_feedback_id'];
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
			 
			  
				if(isset($_REQUEST['del_feedback_id']))
				{
					$feedback_id=$_REQUEST['del_feedback_id'];
					$where=array("feedback_id"=>$feedback_id);
					$res=$this->delete_where('feedback',$where);
					if($res) 
					{
						echo "<script> 
							alert('Delete Success') 
							window.location='manage_feedback';
							</script>";
					}
				}
				
				if(isset($_REQUEST['del_city_id']))
				{
					$city_id=$_REQUEST['del_city_id'];
					$where=array("city_id"=>$city_id);
					$res=$this->delete_where('city',$where);
					if($res) 
					{
						echo "<script> 
							alert('Delete Success') 
							window.location='manage_city';
							</script>";
					}
				}
				
				if(isset($_REQUEST['del_cityrate_id']))
				{
					$cityrate_id=$_REQUEST['del_cityrate_id'];
					$where=array("cityrate_id"=>$cityrate_id);
					$res=$this->delete_where('cityrate',$where);
					if($res) 
					{
						echo "<script> 
							alert('Delete Success') 
							window.location='manage_cityrate';
							</script>";
					}
				}
				
				if(isset($_REQUEST['del_cate_id']))
			    {
				    $cate_id=$_REQUEST['del_cate_id'];
				    $where=array("cate_id"=>$cate_id);
				
				    $run=$this->select_where('category',$where);
				    $fetch=$run->fetch_object();
				    $img=$fetch->img;
				
				    $res=$this->delete_where('category',$where);
				    if($res) 
				    {
					   unlink('images'.$img);
					    echo "<script> 
						alert('Delete Success') 
						window.location='manage_category';
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