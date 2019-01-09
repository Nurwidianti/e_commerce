<?php 
include ('header.php');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php include ('nav.php'); ?>
    <div class="container" > 
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="assets/img/collider_1.jpg"  >
      </div>

      <div class="item">
        <img src="assets/img/collider_2.jpg" >
      </div>
    
      <div class="item">
        <img src="assets/img/collider_3.jpg">
      </div>

    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  </div>
  <br>
<div class="container">
  <div class="container">
  <h2>Button Styles</h2>
  <button type="button" class="btn">Basic</button>
  <button type="button" class="btn btn-primary"style="background-color: rgb(134, 175, 215); width: 150px">Wedges</button>
  <button type="button" class="btn btn-secondary" style="width: 150px">Highheels</button>
  <button type="button" class="btn btn-success" style="width: 150px">Sepatu Olahraga</button>
  <button type="button" class="btn btn-info" style="width: 150px">Slip On</button>
  <button type="button" class="btn btn-warning" style="width: 150px">Sneakers</button>
  <button type="button" class="btn btn-dark" style="width: 150px">Sandals</button>      
</div>

          <!-- row -->
      <div class="row">
        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="title" style="color: black">Picked For You</h2>
          </div>
        </div>
        <!-- section title -->

        <!-- Product -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
              <img src="assets/img/main-product10.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price"style="color: rgb(209, 96, 27)">Rp.450.000</h3>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
              </div>
              <h2 class="product-name"><a href="#">Zoalla Julian Polkadot Sneakers White</a></h2>
              <div class="product-btns">
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->
        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
             <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
              <img src="assets/img/main-product04.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price"style="color: rgb(209, 96, 27)">Rp.200.000</h3>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
              </div>
              <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
              <div class="product-btns">
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->
        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <div class="product-label">
                <span>New</span>
              </div>
             <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
              <img src="assets/img/main-product03.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price" style="color: rgb(209, 96, 27)">Rp.200.000</h3>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
              </div>
              <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
              <div class="product-btns">
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->

        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <div class="product-label">
                <span class="sale">-20%</span>
              </div>
              <!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
              <img src="assets/img/main-product02.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price">Rp200000 <del class="product-old-price">Rp.220.000</del></h3>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
              </div>
              <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
              <div class="product-btns">
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->
        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <div class="product-label">
                <span class="sale">-10%</span>
              </div>
              <!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
              <img src="assets/img/main-product09.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price">Rp.250.000 <del class="product-old-price">Rp270.000</del></h3>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
              </div>
              <h2 class="product-name"><a href="#">Amilia Julyn Classic Sneakers Mocca</a></h2>
              <div class="product-btns">
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->
        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <div class="product-label">
                <span>New</span>
              </div>
              <!-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
              <img src="assets/img/main-product08.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price" style="color: rgb(209, 96, 27) ">Rp.300.000</h3>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
              </div>
              <h2 class="product-name"><a href="#">Runnikha Julian Chunky Sneakers White</a></h2>
              <div class="product-btns">
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->
        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <div class="product-label">
                <span class="sale">-50%</span>
              </div>
             <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
              <img src="assets/img/main-product11.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price">Rp125.000 <del class="product-old-price">Rp.250.000</del></h3>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
              </div>
              <h2 class="product-name"><a href="#">SEPATU KETS DC 011 BIRU</a></h2>
              <div class="product-btns">
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->
         <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <div class="product-label">
                <span>New</span>
              </div>
             <!--  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> -->
              <img src="assets/img/main-product12.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price" style="color: rgb(209, 96, 27)">Rp.50.000</h3>
              <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o empty"></i>
              </div>
              <h2 class="product-name"><a href="#">Sepatu Wanita Flast Shoes</a></h2>
              <div class="product-btns">
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->

      </div>
      <!-- /row -->
          </div>
  </div>
</div>
  <!--footer-->
<?php 
include('footer.php'); ?>
</body>
</html>