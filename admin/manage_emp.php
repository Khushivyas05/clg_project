<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Employee</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Employee</h2>

				  <table class="table">
					<thead>
					
					  <tr>
					    <th>Emp_id</th>
                        <th>city_id</th>						 
						<th>Username</th>
						<th>Emp_name</th>
						<th>Emp_add</th>
						<th>Designation</th>
						<th>Email</th>
						<th>Contact_no</th>
						<th>Driving Licence</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					   foreach($manage_emp_arr as $m)
					   {
					?>
					  <tr>
					    <td><?php echo $m->emp_id;?></td>
						<td><?php echo $m->city_id;?></td>
						<td><?php echo $m->username;?></td>
						<td><?php echo $m->emp_name;?></td>
						<td><?php echo $m->emp_add;?></td>
						<td><?php echo $m->designation;?></td>
						<td><?php echo $m->email;?></td>
						<td><?php echo $m->contact;?></td>
						<td><?php echo $m->driving_licence;?></td>
						<td><a href="editemp?edit_emp_id=<?php echo $m->emp_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_emp_id=<?php echo $m->emp_id;?>"class="btn btn-danger">Delete</a></td>
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
