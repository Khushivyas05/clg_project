<?php
include_once('header.php');
?>
<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner sear-1">
        <div class="container">
            
            
        </div>
    </div>
</section>
<!-- //covers -->
 <!-- /forms -->
<section class="w3l-forms-6" id="subscribe">
        <div class="forms-main py-5">
            <div class="container py-md-3">
               <h4 class="text-center mb-5">Enter the Order no.</h4>
                    <div class="column">
                        <form action="trackorderans" class="form-6-gd" method="post" enctype="multipart/form-data">
                            <input type="text" name="booking_id" placeholder="Enter Invoice Number" required="" />
                            <button type="submit" name="submit" class="theme-button btn">Track Result</button>
                        </form>
                    </div>
                                    
            </div>
        </div>
    </section>
     <!-- //forms -->

<?php
include_once('footer.php');
?>



