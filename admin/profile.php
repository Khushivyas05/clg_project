<?php
if(isset($_SESSION['admin_details']))
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
			<div class="col-md-8 profile-text">
				<h6>Id:<?php echo $fetch->admin_id;?> </h6>
				<table>
				<tr><td>Username</td>  
				<td>:</td>  
				<td><?php echo $fetch->username;?></td>
				</tr>
				<tr>
				<td>Email</td>
				<td> :</td>
				<td><a href="info@gmail.com">info@lorem.com</a></td>
				</tr>
				<tr>
				<td>Skills</td>
				<td> :</td>
				<td> HTML, CSS,Jqury, Bootstrap</td>
				</tr>
				<tr>
				<td>Country </td>
				<td>:</td>
				<td> United Arab Emirates</td>
				</tr>
				</table>
			</div>
			
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Followers</p>
				<a href="#" class="pro"><i class="fa fa-plus-circle"></i>Follow</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>348</h4>
				<p>Following</p>
				<a href="#" class="pro1"><i class="fa fa-user"></i>View Profile</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Snippets</p>
				<a href="#"><i class="fa fa-cog"></i>Options</a>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-btn">

                <button type="button" href="#" class="btn bg-red">Save changes</button>
           <div class="clearfix"></div>
			</div>
			 
			
		</div>
	</div>
	<!--//gallery-->
<?php
include_once('footer.php');
?>
