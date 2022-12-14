<?php
include_once('header.php');
?>
<script>
function validate()
{
	var state_id=document.forms["stateform"]["state_id"].value;
	if(state_id=="" || state_id==null)
	{
		alert("Please fill out State Id");
		return false;
	}
	
	var state_name=document.forms["stateform"]["state_name"].value;
	if(state_name=="" || state_name==null)
	{
		alert("Please fill out state Name");
		return false;
	}
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit State</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="stateform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">State ID</label>
              <input type="text" name="state_id" value="<?php echo $fetch->state_id;?>" placeholder="state_id">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">State Name</label>
              <input type="text" name="state_name" value="<?php echo $fetch->state_name;?>" placeholder="branch name">
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
 </div>

</div>
<?php
include_once('footer.php');
?>