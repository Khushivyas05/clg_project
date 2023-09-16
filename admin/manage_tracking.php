<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Tracking details</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3" >
				  <h2>Manage Tracking details</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th>Tracking id</th>
						<th>Booking Date</th>
						<th>Status</th>
						<th>Tracking details</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_track_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->track_id;?></td>
						<td><?php echo $m->book_date;?></td>
						<td><a href="status?status_track_id=<?php echo $m->track_id;?>" class="btn btn-primary"><?php echo $m->status;?></a></td>
						<td><?php echo $m->tracking_details;?></td>
						<td><a href="edittrack?edit_track_id=<?php echo $m->track_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_track_id=<?php echo $m->track_id;?>" class="btn btn-danger">Delete</a></td>
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
