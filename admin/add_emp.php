<?php
include_once('header.php');
?>
 
<script>
  function validate()
  {
	  var username=document.forms["empform"]["username"].value;
	  if(username=="" || username==null)
	  {
		  alert("please fill out username");
		  return false;
	  }
	  var pass=document.forms["empform"]["password"].value;
	   if(password=="" || password==null)
	   {
		   alert("please fill out the password");
		   return false;
	   } 
	  
	  var emp_name=document.forms["empform"]["emp_name"].value;
	   if(emp_name=="" || emp_name==null)
	   {
		   alert("please fill out the emp_name");
		   return false;
	   }  
	   var alpha=/^[A-Za-z]+$/;
	  if(!alpha.test(emp_name))
	  {
		  alert("please fill only character");
		  return false;
	  }
	   var emp_add=document.forms["empform"]["emp_add"].value;
	   if(emp_add=="" || emp_add==null)
	   {
		   alert("please fill out the emp_add");
		   return false;
	   } 
	   var designation=document.forms["empform"]["designation"].value;
	   if(designation=="" || designation==null)
	   {
		   alert("please fill out the designation");
		   return false;
	   } 
	  
	   var emailid=document.forms["empform"]["emailid"].value;
	   if(emailid=="" || emailid==null)
	   {
		   alert("please fill out the emailid");
		   return false;
	   } 
       var mail=/^[a-zA-Z0-9_]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/;
       if(!mail.test(emailid))
	   {
		   alert("please proper email id");
		   return false;
	   }
	   
	  
	   var contact_no=document.forms["empform"]["contact_no"].value;
	   if(contact_no=="" || contact_no==null)
	   {
		   alert("please fill out the contact no");
		   return false;
	   }
      var phone=/^[0-9]{10,11}$/;
       if(!phone.test(contact_no))
	   {
		   alert("please proper phone no");
		   return false;
	   }		   
	   
  }
</script>
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Validation</span>
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
              <input type="text" name="username" placeholder="Name" >
            </div>
            <div class="clearfix"> </div>
            </div>
			 <div class="vali-form vali-form1">
            <div class="col-md-12 form-group1">
              <label class="control-label">Password</label>
              <input type="password" name="password" placeholder="Create a password" >
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Emp_name</label>
              <input type="text" name="emp_name" placeholder="emp_name" >
            </div>
			 <div class="clearfix"> </div>
           
            <br>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Emp_add</label>
              <textarea class="form-control" name="emp_add" placeholder="Emp_add" ></textarea>
            </div>
             <div class="clearfix"> </div>
			 
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Designation</label>
              <input type="text" name="designation" placeholder="Designation" >
            </div>
			
			 <div class="clearfix"> </div>
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="email" placeholder="Email id" >
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
            
            <div class="clearfix"> </div>
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
