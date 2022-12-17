<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage category</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage category</h2>

				  <table class="table">
					<thead>
					  <tr>
					    <th>cate_id</th>
						<th>model_name</th>
						<th>company_name</th>
						<th>vehicle_number</th>
						<th>truck_capacity</th>
						<th>img</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_category_arr as $c)
					{
					?>	
					
					  <tr>
					    <td><?php echo $c->cate_id;?></td>
						<td><?php echo $c->model_name;?></td>
						<td><?php echo $c->company_name;?></td>
						<td><?php echo $c->vehicle_number;?></td>
						<td><?php echo $c->truck_capacity;?></td>
						<td><img src="images<?php echo $c->img;?>" width="50px" height="40px"> </td>
						<td><a href="editcategory?edit_cate_id=<?php echo $c->cate_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_cate_id=<?php echo $c->cate_id ?>" class="btn btn-danger">Delete</a></td>
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
