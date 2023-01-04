<?php
include_once('header.php');
?>
<script>
function validate()
{
	var branch_id=document.forms["branchform"]["branch_id"].value;
	if(branch_id=="" || branch_id==null)
	{
		alert("Please fill out Branch Id");
		return false;
	}
	
	var branch_name=document.forms["branchform"]["branch_name"].value;
	if(branch_name=="" || branch_name==null)
	{
		alert("Please fill out Branch Name");
		return false;
	}
	
	var contact_no=document.forms["branchform"]["contact_no"].value;
	if(contact_no=="" || contact_no==null)
	{
		alert("Please fill out contact number");
		return false;
	}
	
	var branch_location=document.forms["branchform"]["branch_location"].value;
	if(branch_location=="" || branch_location==null)
	{
		alert("Please fill out Branch Location");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Branch</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="branchform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Branch ID</label>
              <input type="text" name="branch_id" value="<?php echo $fetch->branch_id;?>" placeholder="branch_id">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Branch Name</label>
              <input type="text" name="branch_name" value="<?php echo $fetch->branch_name;?>" placeholder="branch name">
            </div>
            <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Contact Number</label>
              <input type="text" name="contact_no" value="<?php echo $fetch->contact_no;?>" placeholder="Contact Number">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Branch Location</label>
              <input type="text" name="branch_location" value="<?php echo $fetch->branch_location;?>" placeholder="branch location">
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