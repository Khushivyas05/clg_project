<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Weight rate</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page">
				
				<div class="container mt-3">
				  <h2>Manage Weight rate</h2>

				  <table class="table">
					<thead>
					  <tr>
						<th>w_id</th>
						<th>kg</th>
						<th>price</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_wrate_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->w_id;?></td>
						<td><?php echo $m->kg;?></td>
						<td><?php echo $m->price;?></td>
						<td><a href="editcontact?edit_w_id=<?php echo $m->w_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_w_id=<?php echo $m->w_id;?>" class="btn btn-danger">Delete</a></td>
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
