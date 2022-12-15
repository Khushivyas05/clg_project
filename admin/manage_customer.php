<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Customer</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Customer</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>Cust_id</th>
						<th>City_id</th>
						<th>Cust_name</th>
						<th>Cust_address</th>
						<th>Contact_no</th>
						<th>Email</th>
						<th>Password</th>
						<th>Username</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php  
					foreach($manage_customer_arr as $mu)
					{
					?>
					  <tr>
					    <td><?php echo $mu->cust_id;?></td>
						<td><?php echo $mu->city_id;?></td>
						<td><?php echo $mu->cust_name;?></td>
						<td><?php echo $mu->cust_address;?></td>
						<td><?php echo $mu->contact_no;?></td>
						<td><?php echo $mu->email;?></td>
						<td><?php echo $mu->password;?></td>
						<td><?php echo $mu->username;?></td>
						<td><a href="editcustomer?edit_cust_id=<?php echo $mu->cust_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cust_id=<?php echo $mu->cust_id?>" class="btn btn-primary">Delete</a></td>
					  </tr>
					  <?php
					  }
					  ?>
					  
					  
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
	<!--//faq-->
	<?php
include_once('footer.php');
?>
