<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage cityrate</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage cityrate</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>cityrate_id</th>
					    <th>city_id</th>
						<th>rate</th>
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
					    <td><?php echo $c->cr_id;?></td>
						<td><?php echo $c->city_id;?></td>
						<td><?php echo $c->rate;?></td>
						<td><a href="Editcity_rate_id?edit_cr_id=<?php echo $c->cr_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_city_rate_id=<?php echo $c->cr_id?>" class="btn btn-danger">Delete</a></td>
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
