<?php
include_once('header.php');
?>
<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner ecomerce-1">
        <div class="container">
            
            <ul class="breadcrumbs-custom-path">
               
                <li><a href="index">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                <li class="active">Price List</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<section class="w3l-products-6-main">
  <div class="product-inner">
    <div class="container pt-2">
      <div class="checkout-right">
        <h3 class="head"><b>Price List</b><h3>
        <div class="table-responsive">
          <table class="timetable_sub">
            <thead>
              <tr>
                <th>Source</th>
                <th>Destination</th>
                <th>Rate</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($fetcharr as $f)
              {
              ?>
             <tr class="rem1">
              <td class="invert product-name">
              <?php echo $f->source;?>
                </td>
                <td class="invert product-name">
                <?php echo $f->destination;?>
                </td>
                <td class="invert product-name">
                  <?php echo $f->rate;?>
                </td>
               <?php
               }
               ?>

              </tr>
            
            </tbody>
          </table>
          </div>
          </div>
          <strong>Note:</strong>Prices may vary as charges will be added at delivery time.
        
      

      <div class="checkout-left">
        <div class="address_form_hny">
          <div class="checkout-right-basket">
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
</section>
<?php
include_once('footer.php');
?>
 
 



