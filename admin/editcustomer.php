<?php
include_once('header.php');
?>
 <script>
  function validate()
  {
	  var cust_id=document.forms["clientform"]["cust_id"].value;
	   if(cust_id=="" || cust_id==null)
	   {
		   alert("please fill out the cust_id");
		   return false;
	   } 
	  var city_id=document.forms["clientform"]["city_id"].value;
	  if(city_id=="" || city_id==null)
	  {
		  alert("please fill out city_id");
		  return false;
	  }
	  var cust_name=document.forms["clientform"]["cust_name"].value;
	   if(cust_name=="" || cust_name==null)
	   {
		   alert("please fill out the cust_name");
		   return false;
	   } 
      var cust_add=document.forms["clientform"]["cust_add"].value;
      if(cust_add=="" || cust_add==null)
	  {
		  alert("please fill out the cust_add");
		  return false;
	  }
       var contact_no=document.forms["clientform"]["contact_no"].value;
	   if(contact_no=="" || contact_no==null)
	   {
		   alert("please fill out the contact no");
		   return false;
	   } 
	   var email=document.forms["clientform"]["email"].value;
	   if(email=="" || email==null)
	   {
		   alert("please fill out the email");
		   return false;
	   } 
	   var username=document.forms["clientform"]["username"].value;
	   if(username=="" || username==null)
	   {
		   alert("please fill out the username");
		   return false;
	   } 

  }
  </script>
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Customer</span>
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
			<label class="control-label">City Id</label>
              <input type="text" name="city_id" value="<?php echo $fetch->city_id;?>" placeholder="Username" >
            </div>

            <div class="col-md-12 form-group1">
              <label class="control-label">Customer Name</label>
              <input type="text" name="cust_name"  value="<?php echo $fetch->cust_name;?>" placeholder="Name" ><br>
            </div>
			<div class="clearfix"> </div>
			</div>

			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Address</label>
              <textarea class="form-control" name="cust_add" placeholder="Address" ><?php echo $fetch->cust_add;?></textarea>
              </div>

			<div class="col-md-12 form-group1">
              <label class="control-label">Contact No</label>
              <input type="text" name="contact_no" value="<?php echo $fetch->contact_no;?>" placeholder="User Name" ><br>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email id</label>
              <input type="text" name="email" value="<?php echo $fetch->email;?>" placeholder="Email id" >
            </div>
             <div class="clearfix"> </div>

             <div class="clearfix"> </div>
              
			  
             <div class="clearfix"> </div>
            
             <div class="clearfix"> </div>
            <div class="vali-form">
            
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Username</label>
              <input type="text" name="username" value="<?php echo $fetch->username;?>" placeholder="Contact Number" >
            </div>
            <div class="clearfix"> </div>
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
