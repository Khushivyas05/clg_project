<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var e_id=document.forms["empform"]["e_id"].value;
	  if(e_id=="" || e_id==null)
	  {
		  alert("please fill out e_id");
		  return false;
	  }
	  var e_name=document.forms["empform"]["e_name"].value;
	  if(e_name=="" || e_name==null)
	  {
		  alert("please fill out e_name");
		  return false;
	  }
	  var user_name=document.forms["empform"]["user_name"].value;
	   if(user_name=="" || user_name==null)
	   {
		   alert("please fill out the username");
		   return false;
	   }  
	   var emailid=document.forms["empform"]["emailid"].value;
	   if(emailid=="" || emailid==null)
	   {
		   alert("please fill out the emailid");
		   return false;
	   } 
	   var address=document.forms["empform"]["address"].value;
	   if(address=="" || address==null)
	   {
		   alert("please fill out the address");
		   return false;
	   } 
	   var contact_no=document.forms["empform"]["contact_no"].value;
	   if(contact_no=="" || contact_no==null)
	   {
		   alert("please fill out the contact no");
		   return false;
	   }	   
  }
</script>
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Employee</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form action="" name="empform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">Emp_id</label>
              <input type="text" name="emp_id" value="<?php echo $fetch->emp_id;?>" placeholder="Name" >
            </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">City:</label>
            <select name="city_id" class="form-control">
			<?php
			foreach($fetcharr as $f)
			{
			?>
			<option value="<?php echo $f->city_id?>"><?php echo $f->city_name?></option>
			<?php
			}
			?>
			</select>
            </div>
			 <div class="clearfix"> </div>
           
			<div class="col-md-12 form-group1">
              <label class="control-label">Username</label>
              <input type="text" name="username" value="<?php echo $fetch->username;?>" placeholder="Username" >
            </div>
			 <div class="clearfix"> </div>
           
             <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="emp_name" value="<?php echo $fetch->emp_name;?>" placeholder="Name" >
            </div>
            <div class="clearfix"> </div>
            </div>

			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <textarea class="form-control" name="emp_add" placeholder="Address" ><?php echo $fetch->emp_add;?></textarea>
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Designation</label>
              <input type="text" name="designation" value="<?php echo $fetch->designation;?>" placeholder="Name" >
            </div>

            <br>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="email" value="<?php echo $fetch->email;?>" placeholder="Email id" >
            </div>
			
             <div class="clearfix"> </div>
			 
			 <div class="clearfix"> </div>
			 
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Contact Number</label>
              <input type="text" name="contact" value="<?php echo $fetch->contact;?>" placeholder="Contact Number" >
            </div>
            <div class="clearfix"> </div>
			<div class="col-md-12 form-group1 form-last">
              <label class="control-label">Driving Licence</label>
              <input type="text" name="driving_licence" value="<?php echo $fetch->driving_licence;?>" placeholder="Contact Number" >
            </div>
           </div>
            <br>
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
