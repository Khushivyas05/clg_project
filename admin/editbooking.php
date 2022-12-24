<?php
include_once('header.php');
?>
<script>
function validate()
{
	var booking_id=document.forms["bookingform"]["booking_id"].value;
	if(booking_id=="" || booking_id==null)
	{
		alert("Please fill out Booking Id");
		return false;
	}
	
	var branch_name=document.forms["bookingform"]["branch_name"].value;
	if(branch_name=="" || branch_name==null)
	{
		alert("Please fill out Branch Name");
		return false;
	}
	
	var contact_no=document.forms["bookingform"]["contact_no"].value;
	if(contact_no=="" || contact_no==null)
	{
		alert("Please fill out contact number");
		return false;
	}
	
	var branch_location=document.forms["bookingform"]["branch_location"].value;
	if(branch_location=="" || branch_location==null)
	{
		alert("Please fill out Branch Location");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Booking</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="bookingform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Booking ID</label>
              <input type="text" name="booking_id" value="<?php echo $fetch->booking_id;?>" placeholder="booking_id">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
            <label class="control-label">Customer Name:</label>
            <select name="cust_id" class="form-control">
			<?php
			foreach($fetcharr as $f)
			{
			?>
			<option value="<?php echo $f->cust_id?>"><?php echo $f->cust_name?></option>
			<?php
			}
			?>
			</select>
            </div>
            <div class="clearfix"> </div>
            <label class="control-label">Vehicle number</label>
            <input type="text" name="cate_id" value="<?php echo $arr->vehicle_number;?>" placeholder="Vehicle number">
            <div class="vali-form">
            <div class="col-md-12 form-group1">
           
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Source</label>
              <input type="text" name="source" value="<?php echo $fetch->source;?>" placeholder="Source">
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-12 form-group1">
              <label class="control-label">Destination</label>
              <input type="text" name="destination" value="<?php echo $fetch->destination;?>" placeholder="Destination">
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-12 form-group1">
              <label class="control-label">Price</label>
              <input type="text" name="price" value="<?php echo $fetch->price;?>" placeholder="Price">
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-12 form-group1">
              <label class="control-label">Payment Type</label>
              <input type="text" name="payment_type" value="<?php echo $fetch->payment_type;?>" placeholder="Payment Type">
            </div>
            <div class="clearfix"> </div>
			
			
			
			
            <div class="clearfix"> </div>
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>