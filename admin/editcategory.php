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
              <label class="control-label">feedback_id</label>
              <input type="text" placeholder="feedback_id" name="feedback_id" value="<?php echo $fetch->feedback_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Cust id</label>
              <input type="text" placeholder="cust_id" name="cust_id" value="<?php echo $fetch->cust_id;?>"<br>
            </div>
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">comment</label>
              <input type="text" placeholder="comment"   name="comment" value="<?php echo $fetch->comment;?>"><br>
            </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">Date</label>
              <input type="file" placeholder="date" name="date" value="<?php echo $fetch->date;?>"><br>
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
