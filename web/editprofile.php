<?php
if(isset($_SESSION['username']))
{

}
else
{
    echo "<script>
          window.location='index';
         </script>";
}
include_once('header.php');
?>
<!-- inner banner -->

<section class="w3l-inner-banner-main">
    <div class="about-inner sear-1">
        <div class="container">
            
            <ul class="breadcrumbs-custom-path">
               
                <li><a href="index">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                 <li class="active">Edit Profile</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<!-- contact -->
<section class="w3l-contacts-12" id="profile">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">EDIT PROFILE</h3>
               <!-- <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>-->
              </div>
            <div class="row cont-main-top mt-5 pt-3">
               
                <!-- contact address -->
               
                <!-- //contact address -->
                 <!-- contact form -->
                 <div class="contacts12-main col-lg-12 pr-lg-5 pr-3">
                   
                    <form name="profileform" action="" method="post" enctype="multipart/form-data" class="main-input">
                       
                       <div class="top-inputs">
                        Customer Name: <input type="text" name="cust_name" placeholder="Customer Name"  class="form-control" value="<?php echo $fetch->cust_name;?>" required="">
                        </div>

						<div class="top-inputs">
                        City Name: 
						<select name="city_id" class="form-control">
						<?php
						foreach($fetcharr as $f)
						{
						?>
						<option value="<?php echo $f->city_id?>"><?php echo $f->city_name?></option>
						<?php
						}
						?>
						</select>
                        </div>

						<div class="top-inputs">    
                        Customer Address<input type="text" name="cust_add" placeholder="Customer Address" class="form-control" value="<?php echo $fetch->cust_add;?>"  required="">
                        </div>

						<div class="top-inputs">    
                         Contact No:<input type="text" name="contact_no" placeholder="Contact No" class="form-control" value="<?php echo $fetch->contact_no;?>" required="">
                        </div>

						
						<div class="top-inputs">    
                         Email:<input type="text" name="email" placeholder="email" class="form-control" value="<?php echo $fetch->email;?>" required="">
                        </div>

						
						<div class="top-inputs">    
                         User Name:<input type="text" name="username" placeholder="username" class="form-control" value="<?php echo $fetch->username;?>" required="">
                        </div>

						
					
                        <!--<div class="top-inputs">    
                         Destination:<input type="text" name="destination" placeholder="Destination" class="form-control" required="">
                          <select name="destination" class="form-control">
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Indore">Indore</option>
                            <option value="Surat">Surat</option>
                            <option value="Bhopal">Bhopal</option>
                            <option value="Rajkot">Rajkot</option>
                        </select>
                       </div>
                        <div class="top-inputs">    
                         Date:<input type="date" name="book_date" placeholder="Date" class="form-control" required="">
                        </div>
                        <div class="top-inputs">    
                         Payment Type:
                         <input type="radio" name="payment_type" value="Cash" class="form-control" required="">Cash
                         <input type="radio" name="payment_type" value="Card" class="form-control" required="">Card
                       </div>-->

                        <div class="text-right">
                            <button type="submit" name="submit" class="btn btn-theme2">Edit Profile</button>
                        </div>
                    </form>
                </div>
                
                </div>
            </div>
        </div>
     
    </div>
</section>


<?php
include_once('footer.php');
?>