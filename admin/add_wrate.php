<?php
include_once('header.php');
?>
<script>
function validate()
{
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
				<span>Add Weight Rate</span>
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
              <label class="control-label">Kilogram</label>
              <input type="number" name="kg" placeholder="Kilogram">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Price</label>
              <input type="number" name="price" placeholder="price">
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