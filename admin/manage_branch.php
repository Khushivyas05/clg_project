<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage branch</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage branch</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th>Branch_id</th>
						<th>Name</th>
						<th>Contact no</th>
						<th>Location</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_branch_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->branch_id;?></td>
						<td><?php echo $m->branch_name;?></td>
						<td><?php echo $m->contact_no;?></td>
						<td><?php echo $m->branch_location;?></td>
						<td><a href="editbranch?edit_branch_id=<?php echo $m->branch_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_branch_id=<?php echo $m->branch_id;?>" class="btn btn-danger">Delete</a></td>
					  </tr>
					 <?php
					}
					 ?> 
					</tbody>
				  </table>
				</div>
				
	        </div>
	</div>
	
<?php
include_once('footer.php');
?>
