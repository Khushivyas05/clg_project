<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage city</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage city</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>city_id</th>
					    <th>state_id</th>
						<th>city_name</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($city_rate_arr as $c)
					{
					?>	
					  <tr>
					    <td><?php echo $c->city_id;?></td>
						<td><?php echo $c->state_id;?></td>
						<td><?php echo $c->city_name;?></td>
						<td><a href="editcity_id?edit_city_id=<?php echo $c->city_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_city_id=<?php echo $c->city_id?>" class="btn btn-danger">Delete</a></td>
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
