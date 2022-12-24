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
						window.location='manage_customer';
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
			unset($_SESSION['admin_details']);
			echo "<script>
			alert('Logout success')
			window.location='index'
			</script>";
			
			case '/manage_feedback':
			$manage_feedback_arr=$this->select_where_join('feedback','customer_details','feedback.cust_id=customer_details.cust_id');
			include_once('manage_feedback.php');
			break;
			
			case '/manage_city':
			$manage_city_arr=$this->select_where_join('city','state','city.state_id=state.state_id');
			include_once('manage_city.php');
			break;
			
			case '/manage_cityrate':
			$manage_cityrate_arr=$this->select_where_join('city_rate','city','city_rate.city_id=city.city_id');
			include_once('manage_cityrate.php');
			break;
			
			case '/manage_category':
			$manage_category_arr=$this->selectall('category');
			include_once('manage_category.php');
			break;

			case '/manage_emp':
			$manage_emp_arr=$this->select_where_join('employee_details','city','employee_details.city_id=city.city_id');
			include_once('manage_emp.php');
			break;

			case '/manage_state':
			$manage_state_arr=$this->selectall('state');
			include_once('manage_state.php');
			break;
	
			case '/manage_branch':
			$manage_branch_arr=$this->selectall('branch');
			include_once('manage_branch.php');
			break;
	
			case '/manage_wrate':
			$manage_wrate_arr=$this->selectall('w_rate');
			include_once('manage_wrate.php');
			break;

			case '/manage_customer':
			$manage_customer_arr=$this->select_where_join('customer_details','city','customer_details.city_id=city.city_id');
			include_once('manage_customer.php');
			break;

			case '/manage_feedback':
			$manage_feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;

			case '/manage_booking':
			$manage_booking_arr=$this->select_where_join('booking','customer_details','booking.cust_id=customer_details.cust_id','category','booking.cate_id=category.cate_id');
			include_once('manage_booking.php');
			break;

			case '/manage_fuel':
			include_once('manage_fuel.php');
			break;

			case '/manage_invoice':
			$manage_invoice_arr=$this->select_where_join('invoice','booking','invoice.booking_id=booking.booking_id');
			include_once('manage_invoice.php');
			break;

			case 'manage_parcel':
			$manage_parcel_arr=$this->selectall('parcel');
			include_once('manag_parcel.php');
			break;

			case '/manage_payment':
			$manage_payment_arr=$this->selectall('payment');
			include_once('manage_payment.php');
			break;

			case '/add_emp':
			$fetcharr=$this->selectall('city');
			if(isset($_REQUEST['submit']))
			{
				$city_id=$_REQUEST['city_id'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				$emp_name=$_REQUEST['emp_name'];
				$emp_add=$_REQUEST['emp_add'];
				$designation=$_REQUEST['designation'];
				$email=$_REQUEST['email'];
				$contact=$_REQUEST['contact'];
				$driving_licence=$_REQUEST['driving_licence'];
					
				$arr=array("city_id"=>$city_id,"username"=>$username,"password"=>$password,"emp_name"=>$emp_name,"emp_add"=>$emp_add,"designation"=>$designation,"email"=>$email,"contact"=>$contact,"driving_licence"=>$driving_licence);
					
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
			$fetcharr=$this->selectall('state');
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
							window.location='manage_city';
							</script>";
						}
					}
				}
			}	
			
			include_once('editcity.php');
			break;

			case'/editcityrate':
			$fetcharr=$this->selectall('city');
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
					$res=$this->update('city_rate',$arr,$where);
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
				$old_file=$fetch->img;
						
				if(isset($_REQUEST['submit']))
				{
					$cate_id=$_REQUEST['cate_id'];
					$model_name=$_REQUEST['model_name'];
					$company_name=$_REQUEST['company_name'];
					$vehicle_number=$_REQUEST['vehicle_number'];
					$truck_capacity=$_REQUEST['truck_capacity'];

							
					if($_FILES['img']['size']>0)
					{
						$img=$_FILES['img']['name'];
						$path='images/'.$img;
						$dup_file=$_FILES['img']['tmp_name'];
						move_uploaded_file($dup_file,$path);
								
						$arr=array("cate_id"=>$cate_id,"model_name"=>$model_name,"company_name"=>$company_name,"vehicle_number"=>$vehicle_number,"truck_capacity"=>$truck_capacity,"img"=>$img);
						$res=$this->update('category',$arr,$where);
						if($res)
						{
							unlink('images/'.$old_file);
							echo "<script>
							alert('Update success');
							window.location='manage_category';
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
			
			case '/add_emp':
			$fetcharr=$this->selectall('city');
            if(isset($_REQUEST['submit']))
			{
				$city_id=$_REQUEST['city_id'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
                $emp_name=$_REQUEST['emp_name'];
				$emp_add=$_REQUEST['emp_add'];
				$designation=$_REQUEST['designation'];
				$email=$_REQUEST['email'];
				$contact=$_REQUEST['contact'];
				$driving_licence=$_REQUEST['driving_licence'];
				
				$arr=array("city_id"=>$city_id,"username"=>$username,"password"=>$password,"emp_name"=>$emp_name,"emp_add"=>$emp_add,"designation"=>$designation,"email"=>$email,"contact"=>$contact,"driving_licence"=>$driving_licence);
				
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

			case '/add_city':
			$fetcharr=$this->selectall('state');
			if(isset($_REQUEST['submit']))
			{
				$state_id=$_REQUEST['state_id'];
				$city_name=$_REQUEST['city_name'];
				$arr=array("state_id"=>$state_id,"city_name"=>$city_name);
				$res=$this->insert('city',$arr);
				if($res)
				{
					echo "<script>alert('Data Inserted successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data is not inserted')</script>";
				}
			}
			include_once('add_city.php');
			break;

				
			case '/add_cityrate':
			$fetcharr=$this->selectall('city');
			if(isset($_REQUEST['submit']))
			{
				$city_id=$_REQUEST['city_id'];
				$rate=$_REQUEST['rate'];
				$arr=array("city_id"=>$city_id,"rate"=>$rate);
				$res=$this->insert('city_rate',$arr);
				if($res)
				{
					echo "<script>alert('Data Inserted successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data is not inserted')</script>";
				}
			}
			include_once('add_cityrate.php');
			break;

			case '/add_category':
			if(isset($_REQUEST['submit']))
			{
				$model_name=$_REQUEST['model_name'];
				$company_name=$_REQUEST['company_name'];
				$vehicle_number=$_REQUEST['vehicle_number'];
				$truck_capacity=$_REQUEST['truck_capacity'];

				$img=$_FILES['img']['name'];
				$path='images/'.$img;
				$dup_file=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_file,$path);

				$arr=array("model_name"=>$model_name,"company_name"=>$company_name,"vehicle_number"=>$vehicle_number,"truck_capacity"=>$truck_capacity,"img"=>$img);
				$res=$this->insert('category',$arr);
				if($res)
				{
					echo "<script>alert('Data Inserted successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data is not inserted')</script>";
				}
			}
			include_once('add_category.php');
			break;

			case '/add_branch':
			if(isset($_REQUEST['submit']))
			{
				$branch_name=$_REQUEST['branch_name'];
				$contact_no=$_REQUEST['contact_no'];
				$branch_location=$_REQUEST['branch_location'];
				$arr=array("branch_name"=>$branch_name,"contact_no"=>$contact_no,"branch_location"=>$branch_location);
				$res=$this->insert('branch',$arr);
				if($res)
				{
					echo "<script>alert('Data Inserted successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data is not inserted')</script>";
				}
			}
			include_once('add_branch.php');
			break;

			case '/add_state':
			if(isset($_REQUEST['submit']))
			{
				$state_name=$_REQUEST['state_name'];
				$arr=array("state_name"=>$state_name);
				$res=$this->insert('state',$arr);
				if($res)
				{
					echo "<script>alert('Data Inserted successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data is not inserted')</script>";
				}
			}
			include_once('add_state.php');
			break;

			case '/add_wrate':
			if(isset($_REQUEST['submit']))
			{
				$kg=$_REQUEST['kg'];
				$rate=10;
				$price=$kg*$rate;
				$arr=array("kg"=>$kg,"price"=>$price);
				$res=$this->insert('w_rate',$arr);
				if($res)
				{
					echo "<script>alert('Data Inserted successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data is not inserted')</script>";
				}
			}
			include_once('add_wrate.php');
			break;
			
			case '/editemp':
			$fetcharr=$this->selectall('city');
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
			
			case '/editcustomer':
			$fetcharr=$this->selectall('city');
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
			include_once('editfeedback.php');
			break;

			case '/editbranch':
			if(isset($_REQUEST['edit_branch_id']))
			{
				$branch_id=$_REQUEST['edit_branch_id'];
				$where=array("branch_id"=>$branch_id);
				$run=$this->select_where('branch',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$branch_id=$_REQUEST['branch_id'];
					$branch_name=$_REQUEST['branch_name'];
					$contact_no=$_REQUEST['contact_no'];
					$branch_location=$_REQUEST['branch_location'];
					$arr=array("branch_id"=>$branch_id,"branch_name"=>$branch_name,"contact_no"=>$contact_no,"branch_location"=>$branch_location);
					$res=$this->update('branch',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success');
						window.location='manage_branch';
						</script>";
					}
				}
			}
			include_once('editbranch.php');
			break;

			case '/editstate':
			if(isset($_REQUEST['edit_state_id']))
			{
				$state_id=$_REQUEST['edit_state_id'];
				$where=array("state_id"=>$state_id);
				$run=$this->select_where('state',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$state_id=$_REQUEST['state_id'];
					$state_name=$_REQUEST['state_name'];
					$arr=array("state_id"=>$state_id,"state_name"=>$state_name);
					$res=$this->update('state',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success');
						window.location='manage_state';
						</script>";
					}
				}
			}
			include_once('editstate.php');
			break;

			case '/editwrate':
			if(isset($_REQUEST['edit_w_id']))
			{
				$w_id=$_REQUEST['edit_w_id'];
				$where=array("w_id"=>$w_id);
				$run=$this->select_where('w_rate',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$w_id=$_REQUEST['w_id'];
					$kg=$_REQUEST['kg'];
					$price=$_REQUEST['price'];
					$arr=array("w_id"=>$w_id,"kg"=>$kg,"price"=>$price);
					$res=$this->update('w_rate',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success');
						window.location='manage_wrate';
						</script>";
					}
				}
			}
			include_once('editwrate.php');
			break;

			case '/delete':
			if(isset($_REQUEST['del_emp_id']))
			 {
				 $emp_id=$_REQUEST['del_emp_id'];
				 $where=array("emp_id"=>$emp_id);
				 $res=$this->delete_where('employee_details',$where);
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
				 $res=$this->delete_where('customer_details',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_customer';
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
				
			if(isset($_REQUEST['del_cr_id']))
			{
				$cr_id=$_REQUEST['del_cr_id'];
				$where=array("cr_id"=>$cr_id);
				$res=$this->delete_where('city_rate',$where);
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
					   unlink('images/'.$img);
					    echo "<script> 
						alert('Delete Success') 
						window.location='manage_category';
						</script>";
				    }
			}
			if(isset($_REQUEST['del_branch_id']))
			{
				$branch_id=$_REQUEST['del_branch_id'];
				$where=array("branch_id"=>$branch_id);
				$res=$this->delete_where('branch',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='manage_branch';
					</script>";
				}
			}
			if(isset($_REQUEST['del_state_id']))
			{
				$state_id=$_REQUEST['del_state_id'];
				$where=array("state_id"=>$state_id);
				$res=$this->delete_where('state',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='manage_state';
					</script>";
				}
			}
			if(isset($_REQUEST['del_w_id']))
			{
				$w_id=$_REQUEST['del_w_id'];
				$where=array("w_id"=>$w_id);
				$res=$this->delete_where('w_rate',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='manage_wrate';
					</script>";
				}
			}
			if(isset($_REQUEST['del_payment_id']))
			{
				$payment_id=$_REQUEST['del_payment_id'];
				$where=array("payment_id"=>$payment_id);
				$res=$this->delete_where('payment_id',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='payment_id';
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