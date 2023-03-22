<?php
include_once('header.php');
?>
<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner sear-1">
        <div class="container">
            
            
        </div>cc
    </div>
</section>
<!-- //covers -->
 <!-- /forms -->
<section class="w3l-forms-6" id="subscribe">
        <div class="forms-main py-5">
            <div class="container py-md-3">
               <h4 class="text-center mb-5">Enter the Invoice No.</h4>
                    <div class="column">
                        <form action="trackorderans" class="form-6-gd" method="post" enctype="multipart/form-data">
                            <input type="text" name="invoice_id" placeholder="Enter Invoice Number" required="" />
                            <button type="submit" name="submit" class="theme-button btn">Track Result</button>
                        </form>
                    </div>

        <!--<table class="timetable_sub">
            <thead>
              <tr>
                <th>Invoice Date</th>
                <th>Status</th>
                <th>Tracking details</th>
              </tr>
            </thead>
            <tbody>
              <tr class="rem1">
              <td class="invert product-name">
                  <?php //echo $fetch->invoice_id;?>
                </td>
                <td class="invert product-name">
                <?php //echo $fetch->status;?>
                </td>
                <td class="invert product-name">
                  <?php //echo $fetch->tracking_details;?>
                </td>
            </tr>
            </tbody>
        </table>-->
                
            </div>
        </div>
    </section>
     <!-- //forms -->

<?php
include_once('footer.php');
?>



