<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cr_id=document.forms["cityrateform"]["cr_id"].value;
	if(cr_id=="" || cr_id==null)
	{
		alert("Please fill out the cityrate id");
		return false;
	}
	
	var city_id=document.forms["cityrateform"]["city_id"].value;
	if(city_id=="" ||city_id==null)
	{
		alert("Please fill out the city id");
		return false;
	}
	var rate=document.forms["cityrateform"]["rate"].value;
	if(rate=="" ||rate==null)
	{
		alert("Please fill out the rate");
		return false;
	}
	
}

</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Cityrate</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="cityrateform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Cityrate Id</label>
              <input type="text" name="cr_id" placeholder="cr_id" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">City Id</label>
              <input type="text" name="city_id" placeholder="city_id" ></textarea>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Rate</label>
              <input type="text"  name="rate" placeholder="rate" >
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
