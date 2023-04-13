<?php
include_once('header.php');
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.invoice-title h2, .invoice-title h3 {
    font-size:20px;
    display: inline-block;
}

.table > tbody > tr > .no-line {
    font-size:20px;
    border-top: none;
}

.table > thead > tr > .no-line {
    font-size:20px;
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    font-size:20px;
    border-top: 2px solid;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12" style="font-size:18px">
    		<div class="invoice-title">
    			<h1><strong>Invoice</strong></h1>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6" style="font-size:18px">
    				<address>
    				<strong>Main Branch:</strong><br>
                    F/F-4,Tarak Appartment,<br>
                    punitnagar, Ghodasar, <br>
    				Ahmedabad-380050<br><br>
    				<strong>Branch Name:</strong>
                    <?php echo $fetch->branch_name;?>	
    				</address>
    			</div>
    			<div class="col-xs-6 text-right" style="font-size:18px">
    				<address>
					<strong>Invoice No.:</strong>
                    <?php echo $fetch->invoice_id;?><br><br>
        			<strong>Shipped To:</strong><br>
					<?php echo $f->cust_name;?><br>
    				<?php echo $f->cust_add;?><br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6" style="font-size:18px">
    				<address>
    					<strong>Payment Method:</strong><br>
    					<?php echo $fetch->payment_type;?>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right" style="font-size:18px">
    				<address>
    					<strong>Order Date:</strong><br>
    					<?php echo $fetch->invoice_date?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default" style="font-size:18px">
    			<div class="panel-heading" >
    				<h3 class="panel-title" style="font-size:18px"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-stripped">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Parcel Quantity</strong></td>
        							<td class="text-right"><strong>Price</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td><?php echo $fetch->goods_type;?></td>
    								<td class="text-center"><?php echo $fetch->quantity;?></td>
    								<td class="text-right"><?php echo "₹".number_format($fetch->price);?></td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right"><?php echo "₹".number_format($fetch->price);?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Charges</strong></td>
    								<td class="no-line text-right"><?php echo "₹".number_format($fetch->charges);?></td>
    							</tr>
                                <?php
                                $total_price=$fetch->price+$fetch->charges;
                                ?>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
    								<td class="no-line text-right"><?php echo "₹".number_format($total_price);?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
<?php 
include_once('footer.php');
?>