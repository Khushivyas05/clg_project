<?php
include_once('header.php');
?>
<script>
function validate()
{
    var track_id=document.forms["trackingform"]["track_id"].value;
	if(track_id=="" || track_id==null)
	{
		alert("Please fill out the trackid");
		return false;
	}
	
	var invoice_id=document.forms["trackingform"]["invoice_id"].value;
	if(invoice_id=="" || invoice_id==null)
	{
		alert("Please fill out the invoice_id");
		return false;
	}
    var tracking_details=document.forms["trackingform"]["tracking_details"].value;
	if(tracking_details=="" || tracking_details==null)
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
				<span>Edit tracking</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="trackingform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Track Id</label>
              <input type="text" placeholder="track_id" name="track_id" value="<?php echo $fetch->track_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>		
			<div class="col-md-12 form-group1">
              <label class="control-label">Invoice Id</label>
              <input type="text" placeholder="invoice_id"   name="invoice_id" value="<?php echo $fetch->invoice_id;?>"><br>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Tracking Details</label>
              <input type="text" placeholder="tracking_details"   name="tracking_details" value="<?php echo $fetch->tracking_details;?>"><br>
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
