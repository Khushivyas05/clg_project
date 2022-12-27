<?php
g
include_once('header.php');
?>
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Manage payment</span>
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
						<th>payment_id</th>
						<th>cust_name</th>
						<th>invoice Date</th>
						<th>price</th>
                        <th>payment_type</th>
						<th>date</th>
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
						<td><?php echo $c->price;?></td>
                        <td><?php echo $c->payment_type;?></td>
						<td><?php echo $c->date;?></td>
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