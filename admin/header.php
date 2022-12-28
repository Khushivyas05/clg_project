<!DOCTYPE HTML>
<html>
<head>
<title>Your Transport Solution</title>
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
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
            
                
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="manage_customer">Transport</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
					
			</section>
			<form class=" navbar-left-right">
              
            </form>
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		
		         </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="images/wo.jpg"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="profile"><i class="fa fa-user"></i>Profile</a></li>
						<li><a href="logout"><i class="fa fa-user"></i>Logout</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                 <?php
				  if(isset($_SESSION['admin_details']))
                  {
                    ?>
                   
					<li><a href="manage_customer" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Customer</a></li>
					<li><a href="manage_feedback" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Feedback </a></li>
					<li><a href="manage_booking" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Booking</a></li>
					<li><a href="manage_fuel" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Fuel</a></li>
					<li><a href="manage_invoice" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Invoice</a></li>
					<li><a href="manage_payment" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Payment</a></li>
					<li><a href="manage_parcel" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Parcel</a></li>
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Employee</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_emp" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add Employee</a></li>
                            
                            <li><a href="manage_emp" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Employee</a></li>

					   </ul>
                    </li>
					
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Branch</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_branch" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add Branch</a></li>
                            
                            <li><a href="manage_branch" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Branch</a></li>

					   </ul>
                    </li>
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Category</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_category" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add Category</a></li>
                            
                            <li><a href="manage_category" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Category</a></li>

					   </ul>
                    </li>
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">City</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_city" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add City</a></li>
                            
                            <li><a href="manage_city" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage City</a></li>

					   </ul>
                    </li>
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">City Rate</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_cityrate" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add Cityrate</a></li>
                            
                            <li><a href="manage_cityrate" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Cityrate</a></li>

					   </ul>
                    </li>
					
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">State</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_state" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add State</a></li>
                            
                            <li><a href="manage_state" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage State</a></li>
					   </ul>
                    </li>
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Weight rate</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_wrate" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add Weightrate</a></li>
                            
                            <li><a href="manage_wrate" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Weightrate</a></li>
					   </ul>
					  
                    </li>
                 <?php
                  }
                ?>
                </ul>
             </div>
                </div>
             
             <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                 <?php
				  if(isset($_SESSION['employee_details']))
                  {
                 ?>
                 
					<li><a href="manage_customer" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Customer</a></li>
				   <li><a href="manage_fuel" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Fuel</a></li>
                   <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Branch</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_branch" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add Branch</a></li>
                            
                            <li><a href="manage_branch" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Branch</a></li>

					   </ul>
                    </li>
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Category</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_category" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add Category</a></li>
                            
                            <li><a href="manage_category" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage Category</a></li>

					   </ul>
                    </li>
					<li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">City</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="add_city" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Add City</a></li>
                            
                            <li><a href="manage_city" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>Manage City</a></li>

					   </ul>
                    </li>
                  <?php
                  }
                ?>
             </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">