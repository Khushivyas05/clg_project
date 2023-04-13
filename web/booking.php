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
                 <li class="active">Booking</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<!-- contact -->
<section class="w3l-contacts-12" id="booking">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Booking</h3>
               <!-- <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>-->
              </div>
            <div class="row cont-main-top mt-5 pt-3">
               
                <!-- contact address -->
               
                <!-- //contact address -->
                 <!-- contact form -->
                 <div class="contacts12-main col-lg-12 pr-lg-5 pr-3">
                   
                    <form name="bookingform" action="" method="post" enctype="multipart/form-data" class="main-input">
                        <div class="top-inputs">
                        <input type="hidden" name="cust_id" placeholder="" value="<?php echo $_SESSION['cust_id'];?>" class="form-control" required="">
                        </div>

                        <div class="top-inputs">
                        <input type="hidden" name="cate_id" value="<?php echo $fetch->cate_id;?>" placeholder=""  class="form-control" required="">
                        </div>
                       
                        <div class="top-inputs">    
                         Source:
                         <select name="source" class="form-control">
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Indore">Indore</option>
                            <option value="Surat">Surat</option>
                            <option value="Bhopal">Bhopal</option>
                            <option value="Rajkot">Rajkot</option>
                        </select>
                        </div>

                        <div class="top-inputs">    
                         Destination:
                          <select name="destination" class="form-control">
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Indore">Indore</option>
                            <option value="Surat">Surat</option>
                            <option value="Bhopal">Bhopal</option>
                            <option value="Rajkot">Rajkot</option>
                        </select>
                       </div>

                       <div class="top-inputs">    
                         Goods type:
                         <select name="gt_id" class="form-control">
                        <?php
                        foreach($fetcharr as $f)
                        {
                        ?>
                        <option value="<?php echo $f->gt_id?>"><?php echo $f->g_type;?></option>
                        <?php
                        }
                        ?>
                        </select>
                       </div>

                        <div class="top-inputs">    
                         Date:<input type="date" name="book_date" placeholder="Date" class="form-control" required="">
                        </div>
                        
                        <div>    
                         Payment Type:
                         <div><input type="radio" name="payment_type" value="Cash" class="form-check-input" required="">Cash</div>
                         <div><input type="radio" name="payment_type" value="Card" class="form-check-input" required="">Card</div>
                        </div>
                        

                        <div class="text-right">
                            <button type="submit" name="submit" class="btn btn-theme2">Book Now</button>
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