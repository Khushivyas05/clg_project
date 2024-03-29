<?php
include_once('header.php');
?>
<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner ecomerce-1">
        <div class="container">
            
            <ul class="breadcrumbs-custom-path">
               
                <li><a href="index">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<section class="w3l-products-6-main">
  <div class="product-inner">
    <div class="container pt-2">
      <div class="checkout-right">
        <div class="table-responsive">
          <table class="timetable_sub">
            <thead>
              <tr>
                <th>Truck</th>
                <th>Model Name</th>
                <th>Company Name</th>
                <th>Capacity</th>
                <th>Total Price</th>
              </tr>
            </thead>
            <tbody>
              <tr class="rem1">
                <td class="invert-image">
                  <a href="truck?cate_id=<?php echo $fetch->cate_id;?>">
                    <img src="assets/images/<?php echo $fetch->img;?>" alt=" " class="img-responsive">
                  </a>
                </td>
                <td class="invert product-name"><a href="truck?cate_id=<?php echo $fetch->cate_id;?>">
                  <?php echo $fetch->model_name;?></a>
                </td>
                <td class="invert product-name"><a href="truck?cate_id=<?php echo $fetch->cate_id;?>">
                  <?php echo $fetch->company_name;?></a>
                </td>
                <td class="invert product-name"><a href="truck?cate_id=<?php echo $fetch->cate_id;?>">
                  <?php echo $fetch->truck_capacity;?></a>
                </td>
                <td class="invert product-name">
                  <?php echo $arr->total_price;?>
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


              <tr>
                <td></td>
                <td></td>
                <td class="invert price total-price">
                  <h5 class="price">Price (3 Items):</h5>
                  <h5 class="price">Delivery :</h5>
                  <h6 class="totla-pay">Total Payable :</h6>
                </td>
                <td class="invert price total-price">
                  <h5 class="price">$191.15</h5>
                  <h5 class="price">$15.50</h5>
                  <h6 class="totla-pay">$206.65</h6>
                </td>
              </tr>-->
              </tr>

            </tbody>
          </table>
        </div>
      </div>

      <div class="checkout-left">
        <div class="address_form_hny">
          <div class="checkout-right-basket">
            <a href="category" class="btn btn-secondary btn-theme">
              <div class="anim"></div><span>Add to Cart</span>
            </a>
            <?php
            if(isset($_SESSION['username']))
            {
            ?>
            <a href="booking" class="btn btn-theme3">Checkout
            </a>
            <?php
            }
            else
            {
            ?>
            <a href="login" class="btn btn-theme3">Checkout
            </a>
            <?php
            }
            ?>
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
 
 



