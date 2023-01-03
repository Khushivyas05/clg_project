<?php
include_once('header.php');
?>
<script>
function validate()
{
	var city_id=document.forms["cityform"]["city_id"].value;
	if(city_id=="" || city_id==null)
	{
		alert("Please fill out the city_id");
		return false;
	}  
	var state_id=document.forms["cityform"]["state_id"].value;
	if(state_id=="" || state_id==null)
	{
		alert("Please fill out the state_id");
		return false;
	}
	
	var city_name=document.forms["cityform"]["city_name"].value;
	if(city_name=="" || city_name==null)
	{
		alert("Please fill out the city_name");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit city</span>
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
              <label class="control-label">city id</label>
              <input type="text" placeholder="city_id" name="city_id" value="<?php echo $fetch->city_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">State:</label>
            <select name="state_id" class="form-control">
			<?php
			foreach($fetcharr as $f)
			{
			?>
			<option value="<?php echo $f->state_id?>"><?php echo $f->state_name?></option>
			<?php
			}
			?>
			</select>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">city name</label>
              <input type="text" placeholder="city_name"   name="city_name" value="<?php echo $fetch->city_name;?>"><br>
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
