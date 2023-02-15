<?php
include_once('header.php');
?>
<script>
function validate()
{
	
    var invoice_date=document.forms["invoiceform"]["invoice_date"].value;
	if(invoice_date=="" ||invoice_date==null)
	{
		alert("Please fill out the invoice_date");
		return false;
	}
    var goods_type=document.forms["invoiceform"]["goods_type"].value;
	if(goods_type=="" ||goods_type==null)
	{
		alert("Please fill out the goods_type");
		return false;
	}
    var charges=document.forms["invoiceform"]["charges"].value;
	if(charges=="" ||invoice_date==null)
	{
		alert("Please fill out the charges");
		return false;
	}
    var Sourse=document.forms["invoiceform"]["Sourse"].value;
	if(Sourse=="" ||Sourse==null)
	{
		alert("Please fill out the Sourse");
		return false;
	}
    var Destination=document.forms["invoiceform"]["Destination"].value;
	if(Destination=="" ||Destination==null)
	{
		alert("Please fill out the Destination");
		return false;
	}
    var payment_type=document.forms["invoiceform"]["payment_type"].value;
	if(payment_type=="" ||payment_type==null)
	{
		alert("Please fill out the payment_type");
		return false;
	}
    var price=document.forms["invoiceform"]["price"].value;
	if(price=="" ||price==null)
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
				<span>Add City</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="cityform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="clearfix"> </div>
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Invoice Date</label>
              <input type="date"  name="invoice_date" placeholder="invoice_date" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Goods Type</label>
              <input type="text"  name="goods_type" placeholder="goods_type" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Charges</label>
              <input type="text"  name="charges" placeholder="charges" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Sourse</label>
              <input type="text"  name="Sourse" placeholder="Sourse" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Destination</label>
              <input type="text"  name="Destination" placeholder="Destination" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Payment Type</label>
              <input type="text"  name="payment_type" placeholder="payment_type" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Price</label>
              <input type="text"  name="price" placeholder="price" >
            </div>
			
			
             <div class="clearfix"> </div>
   
             <div class="clearfix"> </div>
          
             <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>

          <div class="clearfix"> </div>
        </form>
    
 	<!---->
<?php
include_once('footer.php');
?>