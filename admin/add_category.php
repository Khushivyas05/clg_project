<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cate_id=document.forms["categoryform"]["cate_id"].value;
	if(cate_id=="" || cate_id==null)
	{
		alert("Please fill out the Category Id");
		return false;
	}
	
	var model_name=document.forms["categoryform"]["model_name"].value;
	if(model_name=="" ||model_name==null)
	{
		alert("Please fill out the Model Name");
		return false;
	}
	var company_name=document.forms["categoryform"]["company_name"].value;
	if(company_name=="" ||company_name==null)
	{
		alert("Please fill out the Company Name");
		return false;
	}
    var vehicle_number=document.forms["categoryform"]["vehicle_number"].value;
	if(vehicle_number=="" ||vehicle_number==null)
	{
		alert("Please fill out the  Vehicle Number");
		return false;
	}
    var truck_capacity=document.forms["categoryform"]["truck_capacity"].value;
	if(truck_capacity=="" ||truck_capacity==null)
	{
		alert("Please fill out the   Truck Capacity");
		return false;
	}
    var img=document.forms["categoryform"]["img"].value;
	if(img=="" ||img==null)
	{
		alert("Please fill out the   img ");
		return false;
	}
    
	
}

</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add Capacity</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="categoryform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Category Id</label>
              <input type="text" name="cate_id" placeholder="cate_id" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Model Name</label>
              <input type="text" name="model_name" placeholder="model_name" ></textarea>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Company Name</label>
              <input type="text"  name="company_name" placeholder="company_name" >
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Vehicle Number</label>
              <input type="text"  name="vehicle_number" placeholder="vehicle_number" >
            </div>

            <div class="col-md-12 form-group1">
              <label class="control-label">Truck capacity </label>
              <input type="text"  name="truck_capacity" placeholder="truck_capacity" >
            </div>
			
            <div class="col-md-12 form-group1">
              <label class="control-label">Img  </label>
              <input type="file"  name="img" placeholder="img" >
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