<?php
include_once('header.php');
?>
<script>
function validate()
{
	var state_id=document.forms["trackingform"]["track_id"].value;
	if(state_id=="" ||state_id==null)
	{
		alert("Please fill out the State Id");
		return false;
	}
	var invoice_id=document.forms["trackingform"]["invoice_id"].value;
	if(invoice_id=="" ||invoice_id==null)
	{
		alert("Please fill out the City invoice_id");
		return false;
	}
    var status=document.forms["trackingform"]["status"].value;
	if(status=="" ||status==null)
	{
		alert("Please fill out the status");
		return false;
	}
    var tracking_details=document.forms["trackingform"]["tracking_details"].value;
	if(tracking_details=="" ||tracking_details==null)
	{
		alert("Please fill out the tracking_details");
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
  	    
       <form name="trackingform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="clearfix"> </div>
            </div>
		
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Tracking Id</label>
              <input type="text"  name="track_id" placeholder="Tracking Id " >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Invoice Id</label>
              <input type="text"  name="invoice_id" placeholder="Invoice Id" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">status</label>
              <input type="text"  name="status" placeholder="status" >
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label">Tracking Details</label>
              <input type="text"  name="tracking_details" placeholder="Tracking Details" >
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