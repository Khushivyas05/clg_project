<?php
include_once('header.php');
?>
<script>
function validate()
{
	var feedback_id=document.forms["feedbackform"]["feedback_id"].value;
	if(feedback_id=="" || feedback_id==null)
	{
		alert("Please fill out the feedback_id");
		return false;
	}  
	var cust_id=document.forms["feedbackform"]["cust_id"].value;
	if(cust_id=="" || cust_id==null)
	{
		alert("Please fill out the cust_id");
		return false;
	}
	
	var comment=document.forms["feedbackform"]["comment"].value;
	if(comment=="" || comment==null)
	{
		alert("Please fill out the comment");
		return false;
	}
	var date=document.forms["feedbackform"]["date"].value;
	if(date=="" || date==null)
	{
		alert("Please fill out the date");
		return false;
	}
	
}
</script>
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="manage_customer">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Edit feedback</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form name="feedbackform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate()">
         	<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">feedback_id</label>
              <input type="text" placeholder="feedback_id" name="feedback_id" value="<?php echo $fetch->feedback_id;?>" >
            </div>
            
            <div class="clearfix"> </div>
            </div>
			
			<div class="col-md-12 form-group1">
			<label class="control-label">Customer Name:</label>
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
			
			
			<div class="col-md-12 form-group1">
              <label class="control-label">comment</label>
              <input type="text" placeholder="comment"   name="comment" value="<?php echo $fetch->comment;?>"><br>
            </div>
			
						
			<div class="col-md-12 form-group1">
              <label class="control-label">Date</label>
              <input type="date" placeholder="date" name="date" value="<?php echo $fetch->date;?>"><br>
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
<?php
include_once('footer.php');
?>
