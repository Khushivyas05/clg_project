<?php
include_once('header.php');
?>
<script>
	11
function validate()
{
	var invoice_id=document.forms["invoiceform"]["invoice_id"].value;
	if(invoice_id=="" || invoice_id==null)
	{
		alert("Please fill out the invoice_id");
		return false;
	}  
	var booking_id=document.forms["invoiceform"]["booking_id"].value;
	if(booking_id=="" || booking_id==null)
	{
		alert("Please fill out the booking_id");
		return false;
	}  
	var branch_id=document.forms["invoiceform"]["branch_id"].value;
	if(branch_id=="" || branch_id==null)
	{
		alert("Please fill out the branch_id");
		return false;
	}
	var parcel_id=document.forms["invoiceform"]["parcel_id"].value;
	if(parcel_id=="" || parcel_id==null)
	{
		alert("Please fill out the parcel_id");
		return false;
	}  
	var invoice_date=document.forms["invoiceform"]["invoice_date"].value;
	if(invoice_date=="" || invoice_date==null)
	{
		alert("Please fill out the invoice_date");
		return false;
	}  
	
	var goods_type=document.forms["invoiceform"]["goods_type"].value;
	if(goods_type=="" || goods_type==null)
	{
		alert("Please fill out the goods_type");
		return false;
	}
	var charges=document.forms["invoiceform"]["charges"].value;
	if(charges=="" || charges==null)
	{
		alert("Please fill out the Date");
		return false;
	}
	var Source=document.forms["invoiceform"]["Source"].value;
	if(Source=="" || Source==null)
	{
		alert("Please fill out the Source");
		return false;
	}
	var Destination=document.forms["invoiceform"]["Destination"].value;
	if(Destination=="" || Destination==null)
	{
		alert("Please fill out the Destination");
		return false;
	}
	var payment_type=document.forms["invoiceform"]["payment_type"].value;
	if(payment_type=="" || payment_type==null)
	{
		alert("Please fill out the payment_type");
		return false;
	}
	var price=document.forms["invoiceform"]["price"].value;
	if(price=="" || price==null)
	{
		alert("Please fill out the price");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Invoice</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="invoiceform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Invoice id</label>
              <input type="text" placeholder="invoice_id" name="invoice_id" value="<?php echo $fetch->invoice_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">Book No.</label>
            <input type="text" placeholder="Booking No." name="booking_id" value="<?php echo $fetch->booking_id;?>" >
            </div>
			 <div class="clearfix"> </div>
			
            <div class="col-md-12 form-group1">
			<label class="control-label">Branch Name</label>
            <select name="branch_id" class="form-control">
			<?php
			foreach($fetcharr as $f)
			{
			?>
			<option value="<?php echo $f->branch_id?>"><?php echo $f->branch_name?></option>
			<?php
			}
			?>
			</select>
            </div>
			 <div class="clearfix"> </div>

			 <div class="col-md-12 form-group1">
              <label class="control-label">Parcel Id</label>
              <input type="text" placeholder="parcel_id" name="parcel_id" value="<?php echo $fetch->parcel_id;?>" >
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Invoice Date</label>
              <input type="date" placeholder="invoice_date"   name="invoice_date" value="<?php echo $fetch->invoice_date;?>"><br>
            </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">Goods Type</label>
              <input type="text" placeholder="goods_type" name="goods_type" value="<?php echo $fetch->goods_type;?>"><br>
            </div>
             <div class="clearfix"> </div>
            
			 <div class="col-md-12 form-group1">
              <label class="control-label">Charges</label>
              <input type="text" placeholder="charges" name="charges" value="<?php echo $fetch->charges;?>"><br>
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Source</label>
              <input type="text" placeholder="source" name="source" value="<?php echo $fetch->Source;?>"><br>
            </div>

            <div class="col-md-12 form-group1">
              <label class="control-label">Destination</label>
              <input type="text" placeholder="destination" name="destination" value="<?php echo $fetch->Destination;?>"><br>
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Payment Type</label>
              <?php
				if($fetch->payment_type=="Cash")
				{
				?>
				 Cash<input type="radio" name="payment_type" value="Cash" checked>
				 Card<input type="radio" name="payment_type" value="Card">
				<?php
				}
				elseif($fetch->payment_type=="Card")
				{
				?>
				 Cash<input type="radio" name="payment_type" value="Cash">
				 Card<input type="radio" name="payment_type" value="Card" checked>
				<?php
				}
				?>
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Price</label>
              <input type="text" placeholder="price" name="price" value="<?php echo $fetch->price;?>"><br>
            </div>

             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
<?php
include_once('footer.php');
?>
