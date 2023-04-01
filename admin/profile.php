<?php
if(isset($_SESSION['admin_details']))
{
	
}
elseif(isset($_SESSION['employee_details']))
{
	
}
else
{
	echo "<script>
	window.location='manage_customer';
	</script>";
}
include_once('header.php');
?>
 
 	<!--banner-->	
		    <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
				<div class="col-md-4 profile-bottom-img">
					<img src="images/pr.jpg" alt="">
				</div>
				
				<?php
				if(isset($_SESSION['admin_details']))
				{
				?>
				<h6>Id:<?php echo $fetch->admin_id;?> </h6>
				<table>
				<tr><td>Username</td>  
				<td>:</td>  
				<td><?php echo $fetch->username;?></td>
				</tr>
				</table>
				<?php
				}
				if(isset($_SESSION['employee_details']))
				{
				?>
				<table>
				<tr><td>Username</td>  
				<td>:</td>  
				<td><?php echo $fetch->username;?></td>
				</tr>
				<tr><td>Name</td>  
				<td>:</td>  
				<td><?php echo $fetch->emp_name;?></td>
				</tr>
				<tr><td>Address</td>  
				<td>:</td>  
				<td><?php echo $fetch->emp_add;?></td>
				</tr>
				<tr><td>Designation</td>  
				<td>:</td>  
				<td><?php echo $fetch->designation;?></td>
				</tr>
				<tr><td>Email</td>  
				<td>:</td>  
				<td><?php echo $fetch->email;?></td>
				</tr>
				<tr><td>Contact</td>  
				<td>:</td>  
				<td><?php echo $fetch->contact;?></td>
				</tr>
				<tr><td>Driving licence No.</td>  
				<td>:</td>  
				<td><?php echo $fetch->driving_licence;?></td>
				</tr>
				</table>
				<?php
				}
				?>
			</div>
			
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
				
			</div>
			<div class="col-md-4 profile-fo">
				
			</div>
			<div class="col-md-4 profile-fo">
				
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-btn">

           <div class="clearfix"></div>
			</div>
			 
			
		</div>
	</div>
	<!--//gallery-->
<?php
include_once('footer.php');
?>
