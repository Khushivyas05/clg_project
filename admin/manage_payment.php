<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage Payment</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3" >
				  <h2>Manage payment</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th>Payment_id</th>
						<th>Customer Name</th>
						<th>Invoice Date</th>
						<th>Booking Date</th>
						<th>Price</th>
                        <th>Payment_type</th>
						<th>Date</th>
						<th>Status</th>
						<th>Edit</th>
						<th>Delete</th>
                       </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_payment_arr as $c)
					{
					?>
					  <tr>
						<td><?php echo $c->payment_id;?></td>
						<td><?php echo $c->cust_name;?></td>
						<td><?php echo $c->invoice_date;?></td>
						<td><?php echo $c->book_date?></td>
						<td><?php echo $c->price+$c->charges;?></td>
                        <td><?php echo $c->payment_type;?></td>
						<td><?php echo $c->date;?></td>
						<td><a href="status?status_payment_id=<?php echo $c->payment_id;?>" class="btn btn-primary"><?php echo $c->status;?></a></td>
						<td><a href="editpayment?edit_payment_id=<?php echo $c->payment_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_payment_id=<?php echo $c->payment_id;?>" class="btn btn-danger">Delete</a></td>
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