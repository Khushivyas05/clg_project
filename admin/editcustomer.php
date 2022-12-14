<?php
include_once('header.php');
?>
 <script>
  function validate()
  {
	  var cust_id=document.forms["clientform"]["cust_id"].value;
	   if(cust_id=="" || cust_id==null)
	   {
		   alert("please fill out the password");
		   return false;
	   } 
	  var name=document.forms["clientform"]["name"].value;
	  if(name=="" || name==null)
	  {
		  alert("please fill out name");
		  return false;
	  }
	  var user_name=document.forms["clientform"]["user_name"].value;
	   if(user_name=="" || user_name==null)
	   {
		   alert("please fill out the username");
		   return false;
	   } 
      var emailid=document.forms["clientform"]["emailid"].value;
      if(emailid=="" || emailid==null)
	  {
		  alert("please fill out the emailid");
		  return false;
	  }
       var contact_no=document.forms["clientform"]["contact_no"].value;
	   if(contact_no=="" || contact_no==null)
	   {
		   alert("please fill out the contact no");
		   return false;
	   } 
	   var address=document.forms["clientform"]["address"].value;
	   if(address=="" || address==null)
	   {
		   alert("please fill out the address");
		   return false;
	   } 
	   var a_no=document.forms["clientform"]["a_no"].value;
	   if(a_no=="" || a_no==null)
	   {
		   alert("please fill out the a_no");
		   return false;
	   }
	   var dl_no=document.forms["clientform"]["dl_no"].value;
	   if(dl_no=="" || dl_no==null)
	   {
		   alert("please fill out the dl_no");
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
  	    
        <form action="" name="clientform" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
			<div class="col-md-12 form-group1">
              <label class="control-label">Cust_id</label>
              <input type="text" name="cust_id"  value="<?php echo $fetch->cust_id;?>" placeholder="Name" ><br>
            </div>
            <div class="col-md-12 form-group1">
              <label class="control-label">Name</label>
              <input type="text" name="name"  value="<?php echo $fetch->name;?>" placeholder="Name" ><br>
            </div>
			<div class="clearfix"> </div>
			</div>
			<div class="col-md-12 form-group1">
              <label class="control-label">User Name</label>
              <input type="text" name="user_name" value="<?php echo $fetch->user_name;?>" placeholder="User Name" ><br>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="emailid" value="<?php echo $fetch->emailid;?>" placeholder="Email id" >
            </div>
             <div class="clearfix"> </div>

             <div class="clearfix"> </div>
              
			  <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <textarea class="form-control" name="address" placeholder="Address" ><?php echo $fetch->address;?></textarea>
              </div>
			
             <div class="clearfix"> </div>
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Contact Number</label>
              <input type="text" name="con_no" value="<?php echo $fetch->con_no;?>" placeholder="Contact Number" >
            </div>
            <div class="clearfix"> </div>
            </div>
			
             <div class="vali-form vali-form1">
             <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Aadhar card no</label>
              <input type="text" name="a_no" value="<?php echo $fetch->a_no;?>" placeholder="Aadhar card no" >
            </div>
		
			  <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Driving Licence no</label>
              <input type="text" name="dl_no" value="<?php echo $fetch->dl_no;?>" placeholder="Driving Licence no" >
            </div>
			<div class="clearfix"> </div>
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
