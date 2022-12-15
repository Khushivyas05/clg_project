<?php
include_once('header.php');
?>
<script>
function validate()
{
	var cate_id=document.forms["categoryform"]["cate_id"].value;
	if(cate_id=="" || cate_id==null)
	{
		alert("Please fill out the feedback_id");
		return false;
	}  
	var model_name=document.forms["categoryform"]["model_name"].value;
	if(model_name=="" || model_name==null)
	{
		alert("Please fill out the model_name");
		return false;
	}
	
	var company_name=document.forms["categoryform"]["company_name"].value;
	if(company_name=="" || company_name==null)
	{
		alert("Please fill out the company_name");
		return false;
	}
	var vehicle_number=document.forms["categoryform"]["vehicle_number"].value;
	if(vehicle_number=="" || vehicle_number==null)
	{
		alert("Please fill out the vehicle_number");
		return false;
	}
	var truck_capacity=document.forms["categoryform"]["truck_capacity"].value;
	if(truck_capacity=="" || truck_capacity==null)
	{
		alert("Please fill out the truck_capacity");
		return false;
	}
	var img=document.forms["categoryform"]["img"].value;
	if(img=="" || img==null)
	{
		alert("Please fill out the img");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Add category</span>
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
              <label class="control-label">cate_id</label>
              <input type="text" placeholder="cate_id" name="cate_id" value="<?php echo $fetch->cate_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label"> model name</label>
              <input type="text" placeholder="model_name" name="model_name" value="<?php echo $fetch->model_name;?>"<br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">company name</label>
              <input type="text" placeholder="company_name"   name="company_name" value="<?php echo $fetch->company_name;?>"><br>
            </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">vehicle number</label>
              <input type="file" placeholder="vehicle_number" name="vehicle_number" value="<?php echo $fetch->vehicle_number;?>"><br>
            </div>
						
			<div class="col-md-12 form-group1">
              <label class="control-label">truck capacity</label>
              <input type="file" placeholder="truck_capacity" name="truck_capacity" value="<?php echo $fetch->truck_capacity;?>"><br>
            </div>
			<div class="col-md-12 form-group1">
              <label class="control-label"> img</label>
              <input type="file" placeholder="img" name="img" value="<?php echo $fetch->img;?>"><br>
            </div>
             <div class="clearfix"> </div>
   
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
<?php
include_once('footer.php');
?>
