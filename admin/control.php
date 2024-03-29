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
				$ch=$_REQUEST['choice'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				
				$where=array("username"=>$username,"password"=>$password);
				if($ch=="admin")
				{
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
							alert('Login Failed due wrong credentials') 
							window.location='index';
							</script>";
					}
				}
				else
				{
					$run=$this->select_where('employee_details',$where);
					$fetch=$run->fetch_object();
					$res=$run->num_rows; 
					if($res==1) 
					{
						
						$_SESSION['employee_details']=$username;
						$_SESSION['emp_name']=$fetch->emp_name;
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
			}
			include_once('index.php');
			break;

			case '/profile':
			if(isset($_SESSION['admin_details']))
			{
				$where=array("username"=>$_SESSION['admin_details']);
				$run=$this->select_where('admin_details',$where);
				$fetch=$run->fetch_object();
			}
			elseif(isset($_SESSION['employee_details']))
			{
				$where=array("username"=>$_SESSION['employee_details']);
				$run=$this->select_where('employee_details',$where);
				$fetch=$run->fetch_object();
			}
			include_once('profile.php');
			break;

			case '/logout':	
			if(isset($_SESSION['admin_details']))
			{
				unset($_SESSION['admin_details']);
				echo "<script>
			          alert('Logout success')
					  window.location='index'
					 </script>";
			}
			elseif(isset($_SESSION['employee_details']))
			{
				unset($_SESSION['employee_details']);
				echo "<script>
				alert('Logout success')
				window.location='index'
				</script>";
			}
			
			case '/manage_feedback':
			$manage_feedback_arr=$this->select_where_join('feedback','customer_details','feedback.cust_id=customer_details.cust_id');
			include_once('manage_feedback.php');
			break;
			
			case '/manage_city':
			$manage_city_arr=$this->select_where_join('city','state','city.state_id=state.state_id');
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

			case '/manage_customer':
			$manage_customer_arr=$this->select_where_join('customer_details','city','customer_details.city_id=city.city_id');
			include_once('manage_customer.php');
			break;

			case '/manage_feedback':
			$manage_feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;

			case '/manage_booking':
			$manage_booking_arr=$this->select_where_join3('booking','customer_details','booking.cust_id=customer_details.cust_id','category','booking.cate_id=category.cate_id','goods_type','booking.gt_id=goods_type.gt_id');
			include_once('manage_booking.php');
			break;

			case '/manage_invoice':
			$manage_invoice_arr=$this->select_where_join3('invoice','booking','invoice.booking_id=booking.booking_id','branch','invoice.branch_id=branch.branch_id','parcel','invoice.parcel_id=parcel.parcel_id');
			include_once('manage_invoice.php');
			break;

			case '/manage_parcel':
			$manage_parcel_arr=$this->select_where_join1('parcel','customer_details','parcel.cust_id=customer_details.cust_id','goods_type','parcel.gt_id=goods_type.gt_id');
			include_once('manage_parcel.php');
			break;

			case '/manage_payment':
			$manage_payment_arr=$this->select_where_join3('payment','customer_details','payment.cust_id=customer_details.cust_id','invoice','payment.invoice_id=invoice.invoice_id','booking','payment.booking_id=booking.booking_id');
			include_once('manage_payment.php');
			break;

			case '/manage_goodstype':
			$manage_goodstype_arr=$this->selectall('goods_type');	
			include_once('manage_goodstype.php');
			break;	

			case '/manage_tracking':
			$manage_track_arr=$this->select_where_join('tracking','booking','tracking.booking_id=booking.booking_id');
			include_once('manage_tracking.php');
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

			case '/add_goodstype':
			if(isset($_REQUEST['submit']))
			{
				$g_type=$_REQUEST['g_type'];
				$arr=array("g_type"=>$g_type);
				$res=$this->insert('goods_type',$arr);
				if($res)
				{
					echo "<script>alert('Data Inserted successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data is not inserted')</script>";
				}
			}	
			include_once('add_goodstype.php');
			break;

			case '/add_invoice':
			$fetcharr=$this->selectall('branch');
			$arr=$this->selectall('parcel');
			if(isset($_REQUEST['submit']))
			{
				$booking_id=$_REQUEST['booking_id'];
				$branch_id=$_REQUEST['branch_id'];
				$parcel_id=$_REQUEST['parcel_id'];
				$invoice_date=$_REQUEST['invoice_date'];
				$charges=$_REQUEST['charges'];
					
				$arr=array("booking_id"=>$booking_id,"branch_id"=>$branch_id,"parcel_id"=>$parcel_id,"invoice_date"=>$invoice_date,"charges"=>$charges);
					
				$res=$this->insert('invoice',$arr);
				if($res)
				{
					echo  "<script>alert('Invoice Created')</script>";
				}
				else
				{
					echo "not success";
				}
			}
			include_once('add_invoice.php');
			break;

			case '/editparcel':
			$fetcharr=$this->selectall('customer_details');
			$arr=$this->selectall('goods_type');
			if(isset($_REQUEST['edit_parcel_id']))
			{
				$parcel_id=$_REQUEST['edit_parcel_id'];
				$where=array("parcel_id"=>$parcel_id);
				$run=$this->select_where('parcel',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$parcel_id=$_REQUEST['parcel_id'];
					$cust_id=$_REQUEST['cust_id'];
					$gt_id=$_REQUEST['gt_id'];
					$weight=$_REQUEST['weight'];
					$quantity=$_REQUEST['quantity'];
					$arr=array("parcel_id"=>$parcel_id,"cust_id"=>$cust_id,"gt_id"=>$gt_id,"weight"=>$weight,"quantity"=>$quantity);
					$res=$this->update('parcel',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_parcel';
						</script>";
					}
				}
			}	
			
			include_once('editparcel.php');
			break;

			case'/editinvoice':
			$fetcharr=$this->selectall('branch');
			if(isset($_REQUEST['edit_invoice_id']))
			{
				$invoice_id=$_REQUEST['edit_invoice_id'];
				$where=array("invoice_id"=>$invoice_id);
				$run=$this->select_where('invoice',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$invoice_id=$_REQUEST['invoice_id'];
					$booking_id=$_REQUEST['booking_id'];
					$branch_id=$_REQUEST['branch_id'];
					$parcel_id=$_REQUEST['parcel_id'];
					$invoice_date=$_REQUEST['invoice_date'];
					$goods_type=$_REQUEST['goods_type'];
					$charges=$_REQUEST['charges'];
					$source=$_REQUEST['source'];
					$destination=$_REQUEST['destination'];
					$payment_type=$_REQUEST['payment_type'];
					$price=$_REQUEST['price'];
					$arr=array("invoice_id"=>$invoice_id,"booking_id"=>$booking_id,"branch_id"=>$branch_id,"parcel_id"=>$parcel_id,"invoice_date"=>$invoice_date,"goods_type"=>$goods_type,"charges"=>$charges,"source"=>$source,"destination"=>$destination,"payment_type"=>$payment_type,"price"=>$price);
					$res=$this->update('invoice',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_invoice';
						</script>";
					}
				}
			}	
			include_once('editinvoice.php');
			break;
			
			case'/editfeedback':
			$fetcharr=$this->selectall('customer_details');
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

			case'/edittrack':
			if(isset($_REQUEST['edit_track_id']))
			{
				$track_id=$_REQUEST['edit_track_id'];
				$where=array("track_id"=>$track_id);
				$run=$this->select_where('tracking',$where);
				$fetch=$run->fetch_object();
					
				if(isset($_REQUEST['submit']))
				{
					$track_id=$_REQUEST['track_id'];
					$booking_id=$_REQUEST['booking_id'];
					$tracking_details=$_REQUEST['tracking_details'];
					$arr=array("track_id"=>$track_id,"booking_id"=>$booking_id,"tracking_details"=>$tracking_details);
					$res=$this->update('tracking',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_tracking';
						</script>";
					}
				}
			}
			include_once('edittrack.php');
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
					$source=$_REQUEST['source'];
					$destination=$_REQUEST['destination'];
					$rate=$_REQUEST['rate'];
					$arr=array("cr_id"=>$cr_id,"source"=>$source,"destination"=>$destination,"rate"=>$rate);
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
						$path='pictures/'.$img;
						$dup_file=$_FILES['img']['tmp_name'];
						move_uploaded_file($dup_file,$path);
								
						$arr=array("cate_id"=>$cate_id,"model_name"=>$model_name,"company_name"=>$company_name,"vehicle_number"=>$vehicle_number,"truck_capacity"=>$truck_capacity,"img"=>$img);
						$res=$this->update('category',$arr,$where);
						if($res)
						{
							unlink('pictures/'.$old_file);
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
            
			case '/add_tracking':
			if(isset($_REQUEST['submit']))
			{
				$booking_id=$_REQUEST['booking_id'];
				$status=$_REQUEST['status'];
				$tracking_details=$_REQUEST['tracking_details'];
				$arr=array("booking_id"=>$booking_id,"status"=>$status,"tracking_details"=>$tracking_details);
				$res=$this->insert('tracking',$arr);
				if($res)
				{
					echo "<script>alert('Data Inserted successfully')</script>";
				}
				else
				{
					echo "<script>alert('Data is not inserted')</script>";
				}
			}
			include_once('add_tracking.php');
			break;
				
			case '/add_cityrate':
			if(isset($_REQUEST['submit']))
			{
				$source=$_REQUEST['source'];
				$destination=$_REQUEST['destination'];
				$rate=$_REQUEST['rate'];
				$arr=array("source"=>$source,"destination"=>$destination,"rate"=>$rate);
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
				$path='pictures/'.$img;
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

            case '/add_parcel':
				$fetcharr=$this->selectall('customer_details');
				$arr=$this->selectall('goods_type');
				if(isset($_REQUEST['submit']))
				{
					$cust_id=$_REQUEST['cust_id'];
					$gt_id=$_REQUEST['gt_id'];
					$weight=$_REQUEST['weight'];
					$quantity=$_REQUEST['quantity'];
					
					$arr=array("cust_id"=>$cust_id,"gt_id"=>$gt_id,"weight"=>$weight,"quantity"=>$quantity);
					$res=$this->insert('parcel',$arr);
					if($res)
					{
						echo "<script>alert('Data Inserted successfully')</script>";
					}
					else
					{
						echo "<script>alert('Data is not inserted')</script>";
					}
				}
				include_once('add_parcel.php');
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
					$city_id=$_REQUEST['city_id'];
					$emp_name=$_REQUEST['emp_name'];
					$emp_add=$_REQUEST['emp_add'];
					$username=$_REQUEST['username'];
					$designation=$_REQUEST['designation'];
				    $email=$_REQUEST['email'];
				    $contact=$_REQUEST['contact'];
				    $driving_licence=$_REQUEST['driving_licence'];
					
					$arr=array("emp_id"=>$emp_id,"city_id"=>$city_id,"emp_name"=>$emp_name,"emp_add"=>$emp_add,"username"=>$username,"designation"=>$designation,"email"=>$email,"contact"=>$contact,"driving_licence"=>$driving_licence);
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
					$city_id=$_REQUEST['city_id'];
					$cust_name=$_REQUEST['cust_name'];
					$cust_add=$_REQUEST['cust_add'];
					$contact_no=$_REQUEST['contact_no'];
					$email=$_REQUEST['email'];
					$username=$_REQUEST['username'];
					
					$arr=array("cust_id"=>$cust_id,"city_id"=>$city_id,"cust_name"=>$cust_name,"cust_add"=>$cust_add,"contact_no"=>$contact_no,"email"=>$email,"username"=>$username);
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

			case '/editgoodstype':
				if(isset($_REQUEST['edit_gt_id']))
				{
					$gt_id=$_REQUEST['edit_gt_id'];
					$where=array("gt_id"=>$gt_id);
					$run=$this->select_where('goods_type',$where);
					$fetch=$run->fetch_object();
					if(isset($_REQUEST['submit']))
					{
						$gt_id=$_REQUEST['gt_id'];
						$g_type=$_REQUEST['g_type'];
						$arr=array("gt_id"=>$gt_id,"g_type"=>$g_type);
						$res=$this->update('goods_type',$arr,$where);
						if($res)
						{
							echo "<script>
							alert('update success');
							window.location='manage_goodstype';
							</script>";
						}
					}
				}
				include_once('editgoodstype.php');
				break;

			
			case '/editpayment':
			$fetcharr=$this->selectall('customer_details');
			if(isset($_REQUEST['edit_payment_id']))
			{
				$payment_id=$_REQUEST['edit_payment_id'];
				$where=array("payment_id"=>$payment_id);
				$run=$this->select_where('payment',$where);
				$fetch=$run->fetch_object();
				if(isset($_REQUEST['submit']))
				{
					$payment_id=$_REQUEST['payment_id'];
					$cust_id=$_REQUEST['cust_id'];
					$invoice_id=$_REQUEST['invoice_id'];
					$Price=$_REQUEST['Price'];
					$payment_type=$_REQUEST['payment_type'];
					$date=$_REQUEST['date'];
					$arr=array("payment_id"=>$payment_id,"cust_id"=>$cust_id,"invoice_id"=>$invoice_id,"Price"=>$Price,"payment_type"=>$payment_type,"date"=>$date);
					$res=$this->update('payment',$arr,$where);
					if($res)
					{
						echo "<script>
						alert('update success');
						window.location='manage_payment';
						</script>";
					}
				}
			}
			include_once('editpayment.php');
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

			 if(isset($_REQUEST['del_invoice_id']))
			 {
				 $invoice_id=$_REQUEST['del_invoice_id'];
				 $where=array("invoice_id"=>$invoice_id);
				 $res=$this->delete_where('invoice',$where);
				 if($res)
				 {
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_invoice';
					  </script>";
				 }
			 }

			 if(isset($_REQUEST['del_parcel_id']))
			 {
				 $parcel_id=$_REQUEST['del_parcel_id'];
				 $where=array("parcel_id"=>$parcel_id);
				 $res=$this->delete_where('parcel',$where);
				 if($res)
				 {
					  echo "<script>
					  alert('Delete success')
					  window.location='manage_parcel';
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
			if(isset($_REQUEST['del_payment_id']))
			{
				$payment_id=$_REQUEST['del_payment_id'];
				$where=array("payment_id"=>$payment_id);
				$res=$this->delete_where('payment',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='manage_payment';
					</script>";
				}
			}
			if(isset($_REQUEST['del_booking_id']))
			{
				$booking_id=$_REQUEST['del_booking_id'];
				$where=array("booking_id"=>$booking_id);
				$res=$this->delete_where('booking',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='manage_booking';
					</script>";
				}
			}
			if(isset($_REQUEST['del_track_id']))
			{
				$track_id=$_REQUEST['del_track_id'];
				$where=array("track_id"=>$track_id);
				$res=$this->delete_where('tracking',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='manage_tracking';
					</script>";
				}
			}

			if(isset($_REQUEST['del_gt_id']))
			 {
				 $gt_id=$_REQUEST['del_gt_id'];
				 $where=array("gt_id"=>$gt_id);
				 $res=$this->delete_where('goods_type',$where);
				 if($res)
				 {
					echo "<script>
					  alert('Delete success')
					  window.location='manage_goodstype';
					  </script>";
				 }
			 }
			
			break;

            case '/status':
			if(isset($_REQUEST['status_payment_id']))
			{
				$payment_id=$_REQUEST['status_payment_id'];
				$where=array("payment_id"=>$payment_id);
				$run=$this->select_where('payment',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				if($status=='Paid')
				{
					$arr=array("status"=>"Unpaid");
					$res=$this->update('payment',$arr,$where);
					if($res)
					{
						echo "<script> 
							alert('Unpaid Success') 
							window.location='manage_payment';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Paid");
					$res=$this->update('payment',$arr,$where);
					if($res)
					{
						echo "<script> 
							alert('Paid Success') 
							window.location='manage_payment';
							</script>";
					}
				}
			}
			
			if(isset($_REQUEST['status_track_id']))
			{
				$track_id=$_REQUEST['status_track_id'];
				$where=array("track_id"=>$track_id);
				$run=$this->select_where('tracking',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				if($status=='Delivered')
				{
					$arr=array("status"=>"Not Delivered");
					$res=$this->update('tracking',$arr,$where);
					if($res)
					{
						echo "<script> 
							alert('Not Delivered Success') 
							window.location='manage_tracking';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Delivered");
					$res=$this->update('tracking',$arr,$where);
					if($res)
					{
						echo "<script> 
							alert('Delivered Success') 
							window.location='manage_tracking';
							</script>";
					}
				}
			}
			
     		default :
			include_once('404.php');
			break;
		}	
	}
}

$obj=new control;
?>