<?php
include_once('header.php');
?>
<script>
function validate()
{
	var parcel_id=document.forms["parcelform"]["parcel_id"].value;
	if(parcel_id=="" || parcel_id==null)
	{
		alert("Please fill out the feedback_id");
		return false;
	}  
	var cust_id=document.forms["parcelform"]["cust_id"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out the cust_id");
		return false;
	}
	
	var weight=document.forms["parcelform"]["weight"].value;
	if(weight=="" || weight==null)
	{
		alert("Please fill out the weight");
		return false;
	}
	var type=document.forms["parcelform"]["type"].value;
	if(type=="" || type==null)
	{
		alert("Please fill out the type");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit parcel</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="parcelform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Parcel_id</label>
              <input type="text" placeholder="parcel_id" name="parcel_id" value="<?php echo $fetch->parcel_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			
            <div class="col-md-12 form-group1">
			<label class="control-label">Customer Name</label>
            <select name="cust_id" class="form-control">
			<?php
			foreach($fetcharr as $f)
			{
			?>
			<option value="<?php echo $f->cust_id?>"><?php echo $f->cust_name?></option>
			<?php
			}
			?>
			</select>
            </div>
			 <div class="clearfix"> </div>
            
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">Weight</label>
              <input type="text" placeholder="weight"   name="weight" value="<?php echo $fetch->weight;?>"><br>
            </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">Type</label>
              <input type="text" placeholder="type" name="type" value="<?php echo $fetch->type;?>"><br>
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
