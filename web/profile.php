<?php
include_once('header.php');
?>
<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner ecomerce-1">
        <div class="container">
            
            <ul class="breadcrumbs-custom-path">
               
                <li><a href="index">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                <li class="active">Profile</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<section class="w3l-products-6-main">
  <div class="product-inner">
    <div class="container pt-2">
      <div class="checkout-right">
        <h3 class="head"><b>CUSTOMER PROFILE</b><h3>
        <div class="table-responsive">
          <table class="timetable_sub">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>City Name</th>
                <th>Customer Address</th>
                <th>Contact No</th>
                <th>Email</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              <tr class="rem1">
              <td class="invert product-name">
                  <?php echo $fetch->cust_name;?>
                </td>
                <td class="invert product-name">
                <?php echo $fetch->city_name;?>
                </td>
                <td class="invert product-name">
                  <?php echo $fetch->cust_add;?>
                </td>
                <td class="invert product-name">
                  <?php echo $fetch->contact_no;?>
                </td>
                <td class="invert product-name">
                  <?php echo $fetch->email;?>
                </td>
                <td class="invert product-name">
                  <?php echo $fetch->username;?>
                </td>
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
            <a href="feedback" class="btn btn-secondary btn-theme">
              <div class="anim"></div><span>Add Feedback</span>
            </a>
            <a href="order" class="btn btn-secondary btn-theme">
              <div class="anim"></div><span>Your Order</span>
            </a>
           <a href="editprofile?edit_cust_id=<?php echo $fetch->cust_id;?>" class="btn btn-theme3">
            Edit Profile
            </a>
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
 
 



