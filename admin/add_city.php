<?php
include_once('header.php');
?>
<script>
function validate()
{
	var city_id=document.forms["cityform"]["city_id"].value;
	if(city_id=="" || city_id==null)
	{
		alert("Please fill out the City Id");
		return false;
	}
	
	var state_id=document.forms["cityform"]["state_id"].value;
	if(state_id=="" ||state_id==null)
	{
		alert("Please fill out the State Id");
		return false;
	}
	var city_name=document.forms["cityform"]["city_name"].value;
	if(city_name=="" ||city_name==null)
	{
		alert("Please fill out the City Name");
		return false;
	}
	
}

</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
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
            <div class="col-md-12 form-group1">
              <label class="control-label">City Id</label>
              <input type="text" name="city_id" placeholder="city_id" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">State Id</label>
              <input type="text" name="state_id" placeholder="state_id" ></textarea>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">City Name</label>
              <input type="text"  name="city_name" placeholder="city_name" >
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