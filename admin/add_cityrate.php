<?php
include_once('header.php');
?>
<script>
function validate()
{
	var city_id=document.forms["cityrateform"]["city_id"].value;
	if(city_id=="" ||city_id==null)
	{
		alert("Please fill out the city id");
		return false;
	}
	var source=document.forms["cityrateform"]["source"].value;
	if(source=="" ||source==null)
	{
		alert("Please fill out the source");
		return false;
	}
	var destination=document.forms["cityrateform"]["destination"].value;
	if(radestinationte=="" ||destination==null)
	{
		alert("Please fill out the destination");
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
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>ADD Cityrate</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="cityrateform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Source</label>
              <input type="text"  name="source" placeholder="source" >
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Destination</label>
              <input type="text"  name="destination" placeholder="destination" >
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
<?php
include_once('footer.php');
?>
