<?php
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage invoice</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="blank-page" style="overflow:auto">
				
				<div class="container mt-3">
				  <h2>Manage invoice</h2>

				  <table class="table table-bordered table-striped">
					<thead>
					  <tr>
						<th>Invoice id</th>
						<th>Booking date</th>
                        <th>Branch Name</th>
						<th>Parcel Quantity</th>
                        <th>Invoice date</th>
                        <th>Goods Type</th>
                        <th>Charges</th>
                        <th>source</th>
                        <th>Destination</th>
                        <th>Payment Type</th>
                        <th>Price</th>
						<th>Edit</th>
						<th>Delete</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					foreach($manage_invoice_arr as $m)
					{
					?>
					  <tr>
						<td><?php echo $m->invoice_id;?></td>
						<td><?php echo $m->book_date;?></td>
                        <td><?php echo $m->branch_name;?></td>
						<td><?php echo $m->quantity;?></td>
                        <td><?php echo $m->invoice_date;?></td>
                        <td><?php echo $m->goods_type;?></td>
                        <td><?php echo $m->charges;?></td>
                        <td><?php echo $m->Source;?></td>
                        <td><?php echo $m->Destination;?></td>
                        <td><?php echo $m->payment_type;?></td>
                        <td><?php echo $m->price;?></td>
						<td><a href="editinvoice?edit_invoice_id=<?php echo $m->invoice_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_invoice_id=<?php echo $m->invoice_id;?>" class="btn btn-danger">Delete</a></td>
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
