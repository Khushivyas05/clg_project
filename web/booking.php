<?php
include_once('header.php');
?>
<script>
function validate()
{
	var booking_id=document.forms["clientform"]["booking_id"].value;
	if(booking_id=="" || booking_id==null)
	{
		alert("Please fill out Booking Id");
		return false;
	}
	
	var branch_name=document.forms["clientform"]["branch_name"].value;
	if(branch_name=="" || branch_name==null)
	{
		alert("Please fill out Branch Name");
		return false;
	}
	
	var contact_no=document.forms["bookingform"]["contact_no"].value;
	if(contact_no=="" || contact_no==null)
	{
		alert("Please fill out contact number");
		return false;
	}
	
	var branch_location=document.forms["bookingform"]["branch_location"].value;
	if(branch_location=="" || branch_location==null)
	{
		alert("Please fill out Branch Location");
		return false;
	}
	
}
</script>

 
