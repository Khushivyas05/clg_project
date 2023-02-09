<?php
include_once('header.php');
?>
 dd
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage GoodsType</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage GoodsType</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
					    <th>GoodsType Id</th>
						<th>Goods Type</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_goodstype_arr as $c)
					{
					?>	
					  <tr>
					    <td><?php echo $c->gt_id;?></td>
						<td><?php echo $c->g_type;?></td>
						<td><a href="editgoodstype?edit_gt_id=<?php echo $c->gt_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_gt_id=<?php echo $c->gt_id?>" class="btn btn-danger">Delete</a></td>
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
