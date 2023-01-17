<?php
include_once('header.php');
?>
<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner ecomerce-1">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
               
                <li><a href="index.html">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                <li class="active">Truck Type</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<!-- ecommerce block -->
<section class="w3l-products-1">
  <div class="products1">
    <div class="container">
      <div class="heading text-center mx-auto">
        <h3 class="head">Truck Type</h3>
        </div>
      <div class="row ecom-page pt-3 mt-5">
        <?php
        foreach($fetcharr as $data)
        {
        ?>
        <div class="col-md-4" style="padding:5px">
          <div class="column text-center">
            <a href="truck"><img src="../admin/images/<?php echo $data->img;?>" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="truck"><?php echo $data->company_name."<br>".$data->model_name;?></a></h4>
              <!--<ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>-->
              <p>₹500(approx)</p>
              <a href="cart" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
        <?php
        }
        ?>

       <!--<div class="col-md-4 my-md-0 my-4">
          <div class="column text-center">
            <a href="ecommerce-single.html"><img src="assets/images/tr2.png" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="ecommerce-single"> Packaging, Shipping Packaging Box  (Pack of 25 Brown)</a></h4>
              <ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>
              <p>$139.45</p>
              <a href="ecommerce-cart.html" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="column text-center">
            <a href="ecommerce-single.html"><img src="assets/images/tr3.png" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="ecommerce-single.html">Corrugated Cardboard Packaging Box  (Pack of 25 Brown)</a></h4>
              <ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>
              <p>$14.90</p>
              <a href="ecommerce-cart.html" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row ecom-page my-md-4">
        <div class="col-md-4 my-md-0 my-4">
          <div class="column text-center">
            <a href="ecommerce-single.html"><img src="assets/images/tr4.png" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="ecommerce-single.html">Cardboard Storage, Shipping Packaging Box  (Pack of 10 Brown)</a></h4>
              <ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>
              <p>$130.99</p>
              <a href="ecommerce-cart.html" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="column text-center">
            <a href="ecommerce-single.html"><img src="assets/images/s5.jpg" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="ecommerce-single.html"> Cardboard Packaging Box  (Pack of 100 Brown)</a></h4>
              <ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>
              <p>$67.98 </p>
              <a href="ecommerce-cart.html" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-md-0 my-4">
          <div class="column text-center">
            <a href="ecommerce-single.html"><img src="assets/images/s6.jpg" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="ecommerce-single.html">Cardboard Packaging Packaging Box  (Pack of 5 Brown)</a></h4>
              <ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>
              <p>$187.42 </p>
              <a href="ecommerce-cart.html" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row ecom-page">
        <div class="col-md-4">
          <div class="column text-center">
            <a href="ecommerce-single.html"><img src="assets/images/s7.jpg" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="ecommerce-single.html">Moving, Packaging, Packaging Box  (Pack of 10 Brown)</a></h4>
              <ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>
              <p>$119.78</p>
              <a href="ecommerce-cart.html" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-md-0 my-4">
          <div class="column text-center">
            <a href="ecommerce-single.html"><img src="assets/images/s8.jpg" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="ecommerce-single.html">Pack of 50 box Packaging Box  (Pack of 50 Brown)</a></h4>
              <ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>
              <p>$36.45</p>
              <a href="ecommerce-cart.html" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="column text-center">
            <a href="ecommerce-single.html"><img src="assets/images/s9.jpg" alt=""
                class="img-responsive img-fluid" /></a>
            <div class="top-prts">
              <h4><a href="ecommerce-single.html">Boxzie Corrugated Cardboard box (Pack of 100 Brown)</a></h4>
              <ul>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
                <li><a href="#"><span class="fa fa-star"></span></a></li>
              </ul>
              <p>$25.37</p>
              <a href="ecommerce-cart.html" class="btn btn-secondary btn-theme1">
                Add to Cart
              </a>
            </div>
          </div>
        </div>
      </div>-->
    </div>
  </div>
</section>
<!-- //ecommerce block -->

 
<?php
include_once('footer.php');
?>