<?php
include_once('header.php');
?>
hh
<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner ecomerce-1">
        <div class="container">
            
            <ul class="breadcrumbs-custom-path">
               
                <li><a href="index">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                <li class="active">Invoice</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<section class="w3l-products-6-main">
  <div class="product-inner">
    <div class="container pt-2">
      <div class="checkout-right">
        <h3 class="head"><b>INVOICE</b><h3>
        <div class="table-responsive">
          <table class="timetable_sub">
            <thead>
              <tr>
                <th>Invoice ID</th>
                <th>Booking Date</th>
                <th>Branch Name</th>
                <th>Invoice Date</th>
                <th>Goods Type</th>
                <th>Charges</th>
                <th>Source</th>
                <th>Destination</th>
                <th>Payment Type</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach($invoice_arr as $i)
              {
              ?>
              <tr class="rem1">
              <td class="invert product-name">
                  <?php echo $i->invoice_id;?>
                </td>
                <td class="invert product-name">
                  <?php echo $i->book_date;?>
                </td>
                <td class="invert product-name">
                  <?php echo $i->branch_name;?>
                </td>
                <td class="invert product-name">
                <?php echo $i->invoice_date;?>
                </td>
                <td class="invert product-name">
                  <?php echo $i->goods_type;?>
                </td>
                <td class="invert product-name">
                  <?php echo $i->charges;?>
                </td>
                <td class="invert product-name">
                  <?php echo $i->Source;?>
                </td>
                <td class="invert product-name">
                  <?php echo $i->Destination;?>
                </td>
                <td class="invert product-name">
                  <?php echo $i->payment_type;?>
                </td>
                <td class="invert product-name">
                  <?php echo $i->price;?>
                </td>
                <?php
                }
                ?>
                <!--<td class="invert">
                  <div class="quantity">
                    <div class="quantity-select d-flex">
                      <input type="number" value="1" min="1">
                    </div>
                  </div>
                </td>
                <td class="invert price">$ 36.80 </td>-->

              </tr>
             <!-- <tr class="rem2">
                <td class="invert-image">
                  <a href="ecommerce-single.html">
                    <img src="assets/images/s4.jpg" alt=" " class="img-responsive">
                  </a>
                </td>
                <td class=" invert product-name"><a href="ecommerce-single.html">
                  Packaging, Shipping Packaging Box (Pack of 25 Brown)
                  </a>


                </td>
                <td class="invert">
                  <div class="quantity">
                    <div class="quantity-select d-flex">
                      <input type="number" value="1" min="1">
                    </div>
                  </div>
                </td>
                <td class="invert price">$ 139.45 </td>

              </tr>
              <tr class="rem3">
                <td class="invert-image">
                  <a href="ecommerce-single.html">
                    <img src="assets/images/s2.jpg" alt=" " class="img-responsive">
                  </a>
                </td>
                <td class="invert product-name"><a href="ecommerce-single.html">
                  Corrugated Cardboard Packaging Box (Pack of 25 Brown)
                  </a>

                </td>
                <td class="invert">
                  <div class="quantity">
                    <div class="quantity-select d-flex">
                      <input type="number" value="1" min="1">
                    </div>
                  </div>
                </td>
                <td class="invert price">$ 14.90</td>

              </tr>-->

             

            </tbody>
          </table>
        </div>
      </div>

      <div class="checkout-left">
        <div class="address_form_hny">
          <div class="checkout-right-basket">
            <!--<a href="" class="btn btn-secondary btn-theme">
              <div class="anim"></div><span>Edit Profile</span>
            </a>
            <a href="" class="btn btn-theme3">
            </a>-->
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
 