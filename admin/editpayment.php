<?php
include_once('header.php');
?>
<script>
function validate()
{
	var payment_id=document.forms["paymentform"]["payment_id"].value;
	if(payment_id=="" || payment_id==null)
	{
		alert("Please fill out the payment id");
		return false;
	}  
	var cust_id=document.forms["paymentform"]["cust_id"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out the cust name");
		return false;
	}
	
	var invoice_id=document.forms["paymentform"]["invoice_id"].value;
	if(invoice_id=="" || invoice_id==null)
	{
		alert("Please fill out the invoice id");
		return false;
	}
	var price=document.forms["paymentform"]["price"].value;
	if(price=="" || price==null)
	{
		alert("Please fill out the price");
		return false;
	}
    var payment_type=document.forms["paymentform"]["payment_type"].value;
	if(payment_type=="" || payment_type==null)
	{
		alert("Please fill out the payment type");
		return false;
	}
    var date=document.forms["paymentform"]["date"].value;
	if(date=="" || date==null)
	{
		alert("Please fill out the date ");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit payment</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="paymentform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">payment_id</label>
              <input type="text" placeholder="payment_id" name="payment_id" value="<?php echo $fetch->payment_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">cust name</label>
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
			
			<div class="col-md-12 form-group1">
            <label class="control-label">invoice_id</label>
            <input type="text" placeholder="Date" name="invoice_id" value="<?php echo $fetch->invoice_id;?>"><br>
            </div>
            <div class="clearfix"> </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">price</label>
              <input type="text" placeholder="price" name="price" value="<?php echo $fetch->price;?>"><br>
            </div>
            			
			<div class="col-md-12 form-group1">
              <label class="control-label">payment_type</label>
              <input type="text" placeholder="payment_type" name="payment_type" value="<?php echo $fetch->payment_type;?>"><br>
            </div>

            <div class="col-md-12 form-group1">
              <label class="control-label">date</label>
              <input type="date" placeholder="date" name="date" value="<?php echo $fetch->date;?>"><br>
            </div>
             <div class="clearfix"> </div>
   
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
