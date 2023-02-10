<?php
include_once('header.php');
?>
<script>
function validate()
{
	var parcel_id=document.forms["customerform"]["cust_name"].value;
	if(parcel_id=="" || parcel_id==null)
	{
		alert("Please fill out the cust_name");
		return false;
	}  
	var cust_id=document.forms["customerform"]["city_name"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out the cust_id");
		return false;
	}
	var gt_id=document.forms["customerform"]["cust_add"].value;
	if(gt_id=="" || gt_id==null)
	{
		alert("Please fill out the cust_add");
		return false;
	}
	
	var weight=document.forms["customerform"]["contact_no"].value;
	if(weight=="" || weight==null)
	{
		alert("Please fill out the contact_no");
		return false;
	}
	var quantity=document.forms["customerform"]["email"].value;
	if(quantity=="" || quantity==null)
	{
		alert("Please fill out the email");
		return false;
	}
	var quantity=document.forms["customerform"]["username"].value;
	if(quantity=="" || quantity==null)
	{
		alert("Please fill out the username");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="customerform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Customer Name</label>
              <input type="text" placeholder="cust_name" name="cust_name" value="<?php echo $fetch->cust_name;?>" >
            </div>

            
            <div class="clearfix"> </div>
            </div>
			
			
			 <div class="clearfix"> </div>

			 <div class="col-md-12 form-group1">
              <label class="control-label">City Name</label>
              <input type="text" placeholder="city_name" name="city_name" value="<?php echo $fetch->city_name;?>" >
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Customer Address</label>
              <input type="text" placeholder="cust_add" name="cust_add" value="<?php echo $fetch->cust_add;?>" >
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Contact No</label>
              <input type="text" placeholder="contact_no" name="contact_no" value="<?php echo $fetch->contact_no;?>" >
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Email</label>
              <input type="text" placeholder="email" name="email" value="<?php echo $fetch->email;?>" >
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">User Name</label>
              <input type="text" placeholder="username" name="username" value="<?php echo $fetch->username;?>" >
            </div>



			 <div class="clearfix"> </div>
            
			
	
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
