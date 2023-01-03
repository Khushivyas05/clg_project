<?php
include_once('header.php');
?>
<script>
function validate()
{
	var fuel_id=document.forms["fuelform"]["fuel_id"].value;
	if(fuel_id=="" || fuel_id==null)
	{
		alert("Please fill out Fuel Id");
		return false;
	}
	
	var emp_id=document.forms["fuelform"]["emp_id"].value;
	if(emp_id=="" || emp_id==null)
	{
		alert("Please fill out Employee Name");
		return false;
	}
	
	var source=document.forms["fuelform"]["source"].value;
	if(source=="" || source==null)
	{
		alert("Please fill out source");
		return false;
	}
	
	var destination=document.forms["fuelform"]["destination"].value;
	if(destination=="" || destination==null)
	{
		alert("Please fill out destination");
		return false;
	}

	var fuel_amt=document.forms["fuelform"]["fuel_amt"].value;
	if(fuel_amt=="" || fuel_amt==null)
	{
		alert("Please fill out fuel amount");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Fuel</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="fuelform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Fuel ID</label>
              <input type="text" name="fuel_id" value="<?php echo $fetch->fuel_id;?>" placeholder="fuel_id">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Employee Name</label>
              <input type="text" name="emp_id" value="<?php echo $fetch->emp_id;?>" placeholder="Employee name">
            </div>
            <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-12 form-group1">
			<label class="control-label">Source</label>
            <input type="text" name="source" value="<?php echo $fetch->source;?>" placeholder="Source">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">Destination</label>
            <input type="text" name="destination" value="<?php echo $fetch->destination;?>" placeholder="Destination">
            </div>
            <div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">Fuel amount</label>
            <input type="text" name="fuel_amt" value="<?php echo $fetch->fuel_amt;?>" placeholder="Fuel amount">
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
<?php
include_once('footer.php');
?>