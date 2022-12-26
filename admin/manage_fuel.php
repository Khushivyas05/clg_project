<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Fuel</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3" >
				  <h2>Manage Fuel</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th>Fuel_id</th>
						<th>Employee Name</th>
						<th>Source</th>
						<th>Destination</th>
                        <th>Amount</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_fuel_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->fuel_id;?></td>
						<td><?php echo $m->emp_name;?></td>
						<td><?php echo $m->source;?></td>
						<td><?php echo $m->destination;?></td>
                        <td><?php echo $m->fuel_amt;?></td>
						<td><a href="editfuel?edit_fuel_id=<?php echo $m->fuel_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_fuel_id=<?php echo $m->fuel_id;?>" class="btn btn-danger">Delete</a></td>
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
