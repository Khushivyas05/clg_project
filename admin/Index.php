<?php
if(isset($_SESSION['admin_details']))
{
	echo "<script>
	window.location='manage_customer';
	</script>";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>

<script>
   function validate()
   {
	   var username=document.forms['indexform']['username'].value;
	   if(username=="" || username==null)
	   {
		   alert('please fill out the username');
		   return false;
	   }
	   
	   var password=document.forms['indexform']['password'].value;
	   if(password=="" || password==null)
	   {
		   alert('please fill out the password');
		   return false;
	   }
   }
   </script>
</head>
<body>
	<div class="login">
		<h1><a href="index">Your Transport Solution </a></h1>
		<h1><a href="index">Login  </a></h1>
		<div class="login-bottom">
			<h2>Login</h2>
			<form name="indexform" action="" method="post" onsubmit="return validate()">
			<div class="col-md-12">
			<select name="choice" class="form-control">
					<option >Select</option>
						<option value="admin">Admin</option>
						<option value="employee">Employee</option>
                   </select>
				   <br>
				   <div class="clearfix"> </div>
				<div class="login-mail">
					<input type="text" name="username" placeholder="Username" >
					<i class="fa fa-user"></i>
				</div>
				<div class="login-mail">
					<input type="password" name="password" placeholder="Password" >
					<i class="fa fa-lock"></i>
				</div>
            
			</div>
			<div class="login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" name="submit" value="Login">
					</label>
			</div>
			
			<div class="clearfix"> </div>
			</form>
		</div>
	</div>
</body>
<?php
include_once('footer.php');
?>
