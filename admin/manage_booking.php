<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage booking</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3" >
				  <h2>Manage booking</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th>Booking_id</th>
						<th>Customer Name</th>
						<th>Vehicle Number</th>
						<th>Source</th>
                        <th>Destination</th>
						<th>Booking date</th>
                        <th>Payment type</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_booking_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->booking_id;?></td>
						<td><?php echo $m->cust_name;?></td>
						<td><?php echo $m->vehicle_number;?></td>
						<td><?php echo $m->source;?></td>
                        <td><?php echo $m->destination;?></td>
						<td><?php echo $m->book_date;?></td>
                        <td><?php echo $m->payment_type;?></td>
						<td><a href="delete?del_booking_id=<?php echo $m->booking_id?>" class="btn btn-danger">Delete</a></td>
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
