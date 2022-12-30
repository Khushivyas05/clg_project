<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var emp_id=document.forms["empform"]["emp_id"].value;
	  if(emp_id=="" || emp_id==null)
	  {
		alert('please fill out the emp_id');
		return false;
	  }
	  var city_id=document.forms["empform"]["city_id"].value;
	  if(city_id=="" || city_id==null)
	  {
		alert('please fill out the city_id');
		return false;
	  }
	  var username=document.forms["empform"]["username"].value;
	  if(username=="" || username==null)
	  {
		alert('please fill out the username');
		return false;
	  }
	  var emp_name=document.forms["empform"]["emp_name"].value;
	  if(emp_name=="" || emp_name==null)
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
		   alert('please fill out the contact no');
		   return false;
	   }
      var phone=/^[0-9]{10,11}$/;
       if(!phone.test(contact))
	   {
		   alert('please proper phone no');
		   return false;
	   }
	   var driving_licence=document.forms["empform"]["driving_licence"].value;
	   if(driving_licence=="" || driving_licence==null)
	   {
		   alert('please fill out the driving_licence no');
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
			<label class="control-label">Designation:</label>
            Employee:<input type="radio" name="designation" value="Employee">
			Driver:<input type="radio" name="designation" value="Driver">
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
