<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Parcel</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage Parcel</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
					    <th>Parcel id</th>
					    <th>Customer Name</th>
						<th>Type</th>
						<th>Weight</th>
						<th>Quantity</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_parcel_arr as $c)
					{
					?>	
					  <tr>
					    <td><?php echo $c->parcel_id;?></td>
						<td><?php echo $c->cust_name;?></td>
						<td><?php echo $c->g_type;?></td>
						<td><?php echo $c->weight;?></td>
						<td><?php echo $c->quantity;?></td>
						<td><a href="editparcel?edit_parcel_id=<?php echo $c->parcel_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_parcel_id=<?php echo $c->parcel_id?>" class="btn btn-danger">Delete</a></td>
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
