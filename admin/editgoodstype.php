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
				<span>Edit Goods type</span>
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
              <label class="control-label">Goods Type</label>
              <input type="text" placeholder="g_type"   name="g_type" value="<?php echo $fetch->g_type;?>"><br>
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
