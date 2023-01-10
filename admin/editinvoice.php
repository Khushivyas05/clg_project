<?php
include_once('header.php');
?>
<script>
function validate()
{
	var feedback_id=document.forms["feedbackform"]["feedback_id"].value;
	if(feedback_id=="" || feedback_id==null)
	{
		alert("Please fill out the feedback_id");
		return false;
	}  
	var cust_id=document.forms["feedbackform"]["cust_id"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out the cust_id");
		return false;
	}
	
	var comment=document.forms["feedbackform"]["comment"].value;
	if(comment=="" || comment==null)
	{
		alert("Please fill out the comment");
		return false;
	}
	var date=document.forms["feedbackform"]["date"].value;
	if(date=="" || date==null)
	{
		alert("Please fill out the date");
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
			<label class="control-label">Book date</label>
            <input type="text" placeholder="booking date" name="booking_id" value="<?php echo $fetcharr->book_date;?>" >
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
              <input type="text" placeholder="source" name="source" value="<?php echo $fetcharr->source;?>"><br>
            </div>

            <div class="col-md-12 form-group1">
              <label class="control-label">Destination</label>
              <input type="text" placeholder="destination" name="destination" value="<?php echo $fetcharr->destination;?>"><br>
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Payment Type</label>
              <input type="text" placeholder="payment_type" name="payment_type" value="<?php echo $fetch->payment_type;?>"><br>
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
