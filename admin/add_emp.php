<?php
include_once('header.php');

?>
<script>
  function validate()
  {
	var username=document.forms["empform"]["username"].value;
	  if(username=="" || username==null)
	  {
		alert('please fill out the username');
		return false;
	  }
	  var password=document.forms["empform"]["password"].value;
	  if(password=="" || password==null)
	  {
		alert('please fill out the password');
		return false;
	  }
	  var emp_name=document.forms["empform"]["emp_name"].value;
	  if(emp_name=="" || emp_name==null)
	  {
		  alert("please fill out Name");
		  return false;
	  }  
	 /*var alpha=/^[A-Za-z]+$/;
	  if(!alpha.test(emp_name))
	  {
		  alert("please fill only character");
		  return false;
	  }
	  var emp_add=document.forms["empform"]["emp_add"].value;
	  if(emp_add=="" || emp_add==null)
	  {
		  alert("please fill out emp_add");
		  return false;
	  } 
	  var des = document.getElementsByName("designation");
    if (des[0].checked == true) 
	{
                   
    } 
	else if (des[1].checked == true) 
	{
                  
    } 
	else 
	{
		alert('! Please Select designation');  // alert msg
        return false;
    } 
	var email=document.forms["empform"]["email"].value;
	   if(email=="" || email==null)
	   {
		   alert("please fill out the email");
		   return false;
	   }  
	   var mail=/^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
	if(!mail.test(email))
	{
		alert('Please fill proper email id');  // alert msg
		return false;   //return false means msg show and again on same page with value not refresh page

	}
	var contact=document.forms["empform"]["contact"].value;
	   if(contact=="" || contact==null)
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
	   }	*/		   
  }
</script>
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Employee</span>
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
              <label class="control-label">Username</label>
              <input type="text" name="username" placeholder="Username" >
            </div>
            <div class="clearfix"> </div>
            </div>

			 <div class="vali-form vali-form1">
            <div class="col-md-12 form-group1">
              <label class="control-label">Password</label>
              <input type="password" name="password" placeholder="password" >
            </div>
            </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="emp_name" placeholder="Name" >
            </div>
			 <div class="clearfix"> </div>
           
            <br>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <textarea class="form-control" name="emp_add" placeholder="Address" ></textarea>
            </div>
             <div class="clearfix"> </div>

			<div class="col-md-12 form-group1 group-mail"><br>
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
			 
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Designation</label>
			  Employee:<input type="radio" name="designation" value="Employee">
			  Driver:<input type="radio" name="designation" value="Driver">
            </div>
			
			 <div class="clearfix"> </div>
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="email" placeholder="Email id" >
            </div>
		    </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Contact No</label>
              <input type="text" name="contact" placeholder="Contact No" >
            </div>
			
            <div class="vali-form">
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Driving Licence</label>
              <input type="text" name="driving_licence" placeholder="Driving Licence" >
            </div>
            <div class="clearfix"> </div>
           </div>
                   
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
