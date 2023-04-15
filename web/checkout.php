<?php
include_once('header.php');
?>
<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner ecomerce-1">
        <div class="container">
            
            <ul class="breadcrumbs-custom-path">
               
                <li><a href="index">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<section class="w3l-products-6-main">
  <div class="product-inner">
    <div class="container pt-2">
      <div class="checkout-right">
        <h3 class="head"><b>Booking details</b><h3>
        <div class="table-responsive">
        <form name="checkoutform" action="" method="post" enctype="multipart/form-data" class="main-input">
          <table class="timetable_sub">
            <thead>
              <tr>
                <th>Truck Image</th>
                <th>Name</th>
                <th>Address</th>
                <th>Source</th>
                <th>Destination</th>
                <th>Price</th>
                <th>Goods type</th>
                <th>Booking date</th>
                <th>Payment type</th>
              </tr>
            </thead>
            <tbody>
             <tr class="rem1">
              <td class="invert product-name">
              <input type="hidden" name="cate_id" value="<?php echo $fetch1->cate_id;?>"></input>
              <img src="../admin/pictures/<?php echo $fetch1->img;?>" width="80px" height="80px">  
            </td>

                <td class="invert product-name">
                <input type="hidden" name="cust_id" value="<?php echo $fetch->cust_id;?>"><?php echo $fetch->cust_name;?></input>
                </td>

                <td class="invert product-name">
              <?php echo $fetch->cust_add;?>
                </td>

                <td class="invert product-name">
              <input type="hidden" name="source" value="<?php echo $source;?>"><?php echo $source;?></input>
                </td>

                <td class="invert product-name">
                <input type="hidden" name="destination" value="<?php echo $destination;?>"><?php echo $destination;?></input>
                </td>

                <td class="invert product-name">
                  <?php echo $fetch2->rate;?>
                </td>

                <td class="invert product-name">
                <input type="hidden" name="gt_id" value="<?php echo $fetch3->gt_id;?>"><?php echo $fetch3->g_type;?></input>
                </td>

                <td class="invert product-name">
                <input type="hidden" name="book_date" value="<?php echo $book_date;?>"><?php echo $book_date;?></input>
                </td>
               
                <td class="invert product-name">
                <input type="hidden" name="payment_type" value="<?php echo $payment_type;?>"><?php echo $payment_type;?></input>
                </td>

              </tr>
             
             

            </tbody>
          </table>
          </div>
          </div>
          <strong>Note:</strong>  Hamali charges will be added at delivery time.
      <div class="checkout-left">
        <div class="address_form_hny">
          <div class="checkout-right-basket">

          <button type="submit" name="submit" class="btn btn-theme3">Confirm Booking</button>
</form>
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
 

