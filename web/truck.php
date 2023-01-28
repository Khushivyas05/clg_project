<?php
include_once('header.php');
?>

<!-- inner banner -->
<section class="w3l-inner-banner-main">
    <div class="about-inner ecomerce-1">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
               
                <li><a href="index.html">Home <span class="fa fa-angle-double-right" aria-hidden="true"></span></a></li>
                <li class="active">Truck</li>
            </ul>
        </div>
    </div>
</section>
<!-- //covers -->
<!-- ecommerce single block -->
<section class="w3l-ecommerce-single">
  <div class="ecommerce-page">
    <div class="container">
      <div class="row ecommerce-cart-two pt-2">
        <div class="col-md-4 cart-image">
          <a href="ecommerce-single.html" class="column-img" id="zoomIn">
         
              <img src="assets/images/<?php echo $fetch->img;?>" alt="" class="img-responsive">
              
       
          </a>
        </div>
        <div class="col-md-8 cart-details mt-md-0 mt-3">
          <!--<h4>MAYUMI Corrugated Cardboard Packaging Box  (Pack of 5 Brown)</h4>
          <div class="ratings">
            <ul class="star">
              <li><a href="#star"><span class="fa fa-star" aria-hidden="true"></span></a>
              </li>
              <li><a href="#star"><span class="fa fa-star" aria-hidden="true"></span></a>
              </li>
              <li><a href="#star"><span class="fa fa-star-half-o" aria-hidden="true"></span></a>
              </li>
              <li><a href="#star"><span class="fa fa-star-o" aria-hidden="true"></span></a>
              </li>
              <li><a href="#star"><span class="fa fa-star-o" aria-hidden="true"></span></a>
              </li>
            </ul>
          </div>
          <ul>
            <li>
              <h6>$150.00</h6>
            </li>
            <li><del>$200.00</del></li>
            <li>
              <p>Free delivery</p>
            </li>
          </ul>
          <p class="single">Dolor sit amet consectetur adipisicing elit. Animi iste,
            minus quibusdam quam ipsam autem nihil atque velit, nesciunt quo
            dolores tempora praesentium consequuntur deserunt eum natus beatae dolor.</p>-->
           
            Model Name:<?php echo $fetch->model_name;?><br>
            Company Name:<?php echo $fetch->company_name;?><br>
            Capacity:<?php echo $fetch->truck_capacity;?> <br>

           
          <div class="sec-grid-1">
            <label>Quantity:</label>
            <div class="disply-cont">
              <input type="number" value="1" min="1">
            </div>
          </div>
          <a href="cart?cate_id=<?php echo $fetch->cate_id;?>" class="btn btn-secondary btn-theme mt-3">
            Add to Cart
          </a>
        </div>
      </div>
      <div class="text24-max-align mt-5">
        <h5 class="text24-heading">Product Description</h5>
        <p>This is a TATA company truck.It's model name is ACE Gold.</p>
        <p>It can carry weight upto 1.5 Tons</p>
        <div class="text24-list">
          <ol class="p-0">
            <!--<li></li>
            <li class="gap-list"></li>
            <li></li>-->
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //ecommerce single block -->
<?php
include_once('footer.php');
?>