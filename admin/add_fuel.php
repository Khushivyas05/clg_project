<?php
include_once('header.php');
?>
<script>
function validate()
{
	var emp_id=document.forms["fuelform"]["emp_id"].value;
	if(emp_id=="" ||emp_id==null)
	{
		alert("Please fill out the emp Id");
		return false;
	}
	var source=document.forms["fuelform"]["source"].value;
	if(source=="" ||source==null)
	{
		alert("Please fill out the source ");
		return false;
	}
	var destination=document.forms["fuelform"]["destination"].value;
	if(destination=="" ||destination==null)
	{
		alert("Please fill out the destination ");
		return false;
	}
	var fuel_amt=document.forms["fuelform"]["fuel_amt"].value;
	if(fuel_amt=="" ||fuel_amt==null)
	{
		alert("Please fill out the fuel_amt ");
		return false;
	}
	
}

</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
			
                <a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add fule</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="fuelform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">Employee Name:</label>
            <select name="emp_id" class="form-control">
			<?php
			foreach($fetcharr as $f)
			{
			?>
			<option value="<?php echo $f->emp_id?>"><?php echo $f->emp_name?></option>
			<?php
			}
			?>
			</select>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">source</label>
              <input type="text"  name="source" placeholder="source" >
            </div>

            
			<div class="col-md-12 form-group1">
              <label class="control-label">destination</label>
              <input type="text"  name="destination" placeholder="destination" >
            </div>

            
			<div class="col-md-12 form-group1">
              <label class="control-label">fuel amt</label>
              <input type="text"  name="fuel_amt" placeholder="fuel_amt" >
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
 </div>

</div>
<?php
include_once('footer.php');
?>