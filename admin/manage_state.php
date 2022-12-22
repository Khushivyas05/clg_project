<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage State</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage State</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th>State_id</th>
						<th>State Name</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_state_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->state_id;?></td>
						<td><?php echo $m->state_name;?></td>
						<td><a href="editstate?edit_state_id=<?php echo $m->state_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_state_id=<?php echo $m->state_id;?>" class="btn btn-danger">Delete</a></td>
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
