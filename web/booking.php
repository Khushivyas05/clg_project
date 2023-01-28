<?php
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
                   
                    <form action="" method="post" class="main-input">
                        <div class="top-inputs">
                        Customer Name:
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
                        <div class="top-inputs">    
                         Model Name:<input type="text" name="cate_id" placeholder="model name" value="<?php echo $fetch->model_name;?>" class="form-control" required="">
                        </div>
                        <div class="top-inputs">    
                         Source:<input type="text" name="source" placeholder="Source" class="form-control" required="">
                        </div>
                        <div class="top-inputs">    
                         Destination:<input type="text" name="destination" placeholder="Destination" class="form-control" required="">
                        </div>
                        <div class="top-inputs">    
                         Date:<input type="date" name="book_date" placeholder="Date" class="form-control" required="">
                        </div>
                        <div class="top-inputs">    
                         Price:<input type="text" name="price" placeholder="Price" class="form-control" required="">
                        </div>
                        <div class="top-inputs">    
                         Payment Type:<input type="text" name="payment_type" placeholder="Payment Type" class="form-control" required="">
                        </div>
                        
                        <div class="text-right">
                            <button type="submit" name="submit" class="btn btn-theme2">Submit Now</button>
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





 
