<?php
include_once('header.php');
?>
<script>
function validate()
{
	var w_id=document.forms["wrateform"]["w_id"].value;
	if(w_id=="" || w_id==null)
	{
		alert("Please fill out weight Id");
		return false;
	}
	
	var kg=document.forms["wrateform"]["kg"].value;
	if(kg=="" || kg==null)
	{
		alert("Please fill out Kilogram");
		return false;
	}
	
	var price=document.forms["wrateform"]["price"].value;
	if(price=="" || price==null)
	{
		alert("Please fill out price");
		return false;
	}
	
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit Weight Rate</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="wrateform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Weight ID</label>
              <input type="text" name="w_id" value="<?php echo $fetch->w_id;?>" placeholder="weight_id">
            </div>
            <div class="clearfix"> </div>
            </div>
            
			<div class="col-md-12 form-group1">
              <label class="control-label">Kilogram</label>
              <input type="text" name="kg" value="<?php echo $fetch->kg;?>" placeholder="Kilogram">
            </div>
            <div class="clearfix"> </div>
			 
            <!--<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">Price</label>
              <input type="text" name="price" value="<?php echo $fetch->price;?>" placeholder="Price">
            </div>
            <div class="clearfix"> </div>
            </div>-->
			
			
            <div class="clearfix"> </div>
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" name="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
<?php
include_once('footer.php');
?>