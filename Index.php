<?php
include 'testapi.php';
include 'DBConn.php';
//$conn = OpenConn();
?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&
    display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="teststyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">About Us</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Contact</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Store Location</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Track order</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Blog</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        Compare:2
                    </a>
                           <div class="text-dark px-2">Currency:
                            <select class="currency-selector">
                                <option selected>USD</option>
                                <option>EUR</option>
                                <option>GBP</option>
                                <option>JPY</option>
                                <option>CAD</option>
                                <option>AUD</option>
                              </select>
                          </div>
                    
                          <div class="text-dark px-2">Languages:
                            <div class="btn-group">
                                <button type="button" class=" dropdown-toggle" data-toggle="dropdown" 
                                aria-expanded="false">
                                  EN
                                </button>
                                <div class="dropdown-menu">
                                  <a class="dropdown-item" href="#">EO</a>
                                  <a class="dropdown-item" href="#">AR</a>
                                  <a class="dropdown-item" href="#">DE</a>
                                </div>  
                            </div>
                        </div>
                          </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" >
                        <img src="source-images/logo.png"></a>
                     
                      <!--  <a href="" class="btn border">
                        <img src="source-images/svg/car.svg"></a> -->
            </div>
           
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Keyword or Part Number">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">  
                <i class="fa fa-user-o text-primary"></i>
                                </a>
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white
                 w-100 " data-toggle="collapse" href="#navbar-vertical" style="height: 65px;
                  margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Shop By Category</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="navbar navbar-vertical navbar-light align-items-start p-0 border 
                border-top-0 border-bottom-0 collapse" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 205px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Categories <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Featured Products</a>
                                <a href="" class="dropdown-item">Best Selling</a>
                                <a href="" class="dropdown-item">Special Offers</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Power Tools</a>
                        <a href="" class="nav-item nav-link">Tools</a>
                        <a href="" class="nav-item nav-link">Hand Tools</a>
                        <a href="" class="nav-item nav-link">Plumbing</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">   
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <div class="nav-item dropdown">
                             <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Home</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Megamenu</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Shop</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="" class="nav-item nav-link">Login</a>
                            <a href="" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="source-images/slide-1.jpeg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">30% OFF
                                    </h4>
                                    <h3 class="text-white">When Buying Parts With Installation
                                        Installation of parts in the services of our partners</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="source-images/banner1.jpeg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">30% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Brand Imgs -->
    
    <div class="" style="padding-left: 115px; ">
        <div class="row px-xl-5 pb-3">
        <?php 
        $qry = $conn->query("SELECT * FROM brand_images"); 
        while ($row = $qry->fetch_array())		 {  
		$name=$row['P_Name'];
		$img=$row['Img_Name'];
        //echo $img;?>
                <div class="align-items-center border " style="padding: 18px;">
                 <img src="source-images/<?php echo $img?>"/>
                 <p class="text-dark"  style="font-size: 11px;font-weight: bold;" > 
                 <?php echo $name?></p>
                                 </div>
        <?php }	 ?>
        </div>
    </div>
    <!-- Brand Imgs End -->


    <!-- Featured Products -->
    
    <div class="container-fluid pt-5" style="padding-left: 83px;">
        <div class="row px-xl-5 pb-3">
        <?php
                foreach ($ApiProdcut as $obj)
                { $store= $obj->Featured_Prod;                  
                  if($store==true){
        ?>
            <div class="col-md-6 pb-1" style="max-width: 19.33333%;">
                <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                  <!--  <p class="text-right "><i class="fa fa-expand  "></i></p>-->
                    <a href="" class="cat-img position-relative overflow-hidden mb-3">
                        <img class="img-fluid" src="source-images/<?php echo $obj->Product_Image ?>" alt="">
                    </a>
                    <div>SKU:<?php echo $obj->SKU ?></div>
                    <h5 class="font-weight-semi-bold m-0"><?php echo $obj->Prod_Name ?></h5>
                    
                    <div class="d-flex justify-content-between mb-2">                   
                        <div class="ms-auto text-warning"> 
                        <?php $count = $obj->Reviews; 
                       if($count>0){ 
                           for ($x = 1; $x <= $count; $x++) 
                           { ?>
                          <i class="fa fa-star"></i>
                          <?php
                         }}
                         else
                          {    ?>    
                          <div>No Reviews</div>                      
                        <?php      }?>
                        </div>
                        
                        <div class="ms-auto text-warning">
                     
                        </div>
                    </div> 
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-muted mb-0">
                            <?php  echo $obj->Prod_Rate ?>
                        <div class="ms-auto text-warning">
                        <i class="fas fa-shopping-cart text-primary"></i>
                        </div>   
                     </div>
                </div>
            </div> <?php } }?>
        </div>
    </div> 
   
    <!-- Categories End -->

      <!-- Offer Start -->
      <div class="container-fluid offer" >
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="source-images/banner1.jpeg" alt="" style="max-width: 102%;">
                    <div class="position-relative" style="z-index: 1;">
                    <h1 class="mb-2 font-semi-bold" style="color:#ffc107;">Motor Oils</h1>    
                    <h5 class="text-uppercase   mb-2" style="color:#ffffff;">Synthetic motor oil with free shipping Friction free life guaranteed</h5>
                        <a href="" class="btn bg-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="source-images/banner2.jpeg" alt="" style="max-width: 102%;">
                    <div class="position-relative" style="z-index: 1;">
                    <h1 class="mb-2 font-semi-bold" style="color:#ffc107;">Save upto $40</h1>    
                    <h5 class="text-uppercase  mb-2" style="color:#ffffff;">Luxurious interior part of real aestethes Leather,
                        fabric, ivory and more</h5>
                     <a href="" class="btn bg-primary py-md-2 px-md-3">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Products Start -->
    
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3" style="margin-left: 277px;">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <h5 class="text-center" style="font-size:18px">Top Rated Products</h5>
                <?php
                foreach ($ApiProdcut as $obj)
                { $store= $obj->Top_Rated_Prod;                  
                  if($store==true){
                ?>
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="source-images/<?php echo $obj->Product_Image?>" alt="">
                    </div>
                    
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-2"><?php echo $obj->Prod_Name?></h6>
                        <div class="d-flex justify-content-center mb-2 ms-auto text-warning">
                       <?php
                        $count = $obj->Reviews;
                        if($count>0){
                         for ($x = 1; $x <= $count; $x++)
                          { ?>
                            <i class="fa fa-star"></i>
                          <?php
                          } 
                        } 
                          else
                           {?>
                           <div>No Reviews</div>
                           <?php } ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h6><?php echo $obj->Prod_Rate?></h6><h6 class="text-muted ml-2"></h6>
                        </div>
                        
                    </div>

                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
                <?php
                 } }
                ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <h5 class="text-center">Special Offer</h5>
                <?php
                foreach ($ApiProdcut as $obj)
                { $store= $obj->Special_Offer;                  
                  if($store==true){
                ?>
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="source-images/<?php echo $obj->Product_Image?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-2"><?php echo $obj->Prod_Name?></h6>
                        <div class="d-flex justify-content-center mb-2 ms-auto text-warning">
                       <?php
                        $count = $obj->Reviews;
                        if($count>0){
                         for ($x = 1; $x <= $count; $x++)
                          { ?>
                            <i class="fa fa-star"></i>
                          <?php
                          } 
                        } 
                          else
                           {?>
                           <div>No Reviews</div>
                           <?php } ?>
                        </div>
                        <div class="d-flex justify-content-center">                            
                            <h6><?php echo $obj->Prod_Rate?></h6><h6 class="text-muted ml-2"></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
                <?php
                 } }
                ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <h5 class="text-center">Best Sellers</h5>
                <?php
                foreach ($ApiProdcut as $obj)
                { $store= $obj->Best_Sellers;                  
                  if($store==true){
                ?>
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="source-images/<?php echo $obj->Product_Image?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-2"><?php echo $obj->Prod_Name?></h6>
                        <div class="d-flex justify-content-center mb-2 ms-auto text-warning">
                       <?php
                        $count = $obj->Reviews;
                        if($count>0){
                         for ($x = 1; $x <= $count; $x++)
                          { ?>
                            <i class="fa fa-star"></i>
                          <?php
                          } 
                        } 
                          else
                           {?>
                           <div>No Reviews</div>
                           <?php } ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h6><?php echo $obj->Prod_Rate?></h6><h6 class="text-muted ml-2"></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
                <?php
                 } } $conn -> close();
                ?>
            </div>
        </div>
    </div>
 
    <!-- Products End -->
   
    <div class="container-fluid " style="padding-left:129px; " >
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 20px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 20px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 20px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">100% Safety</h5>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 20px;">
                    <h1 class="fa fa-tag text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hot Offers</h5>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark ">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="font-weight-bold text-dark mb-4">Contact Us</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Information</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Delivery Information</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Brands</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Returns</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Site Map</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Store Location</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Order History</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Wish List</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Newsletter</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Special Offers</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Gift Certificates</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Affiliate</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. 
                    
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="source-images/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top" style="display: inline;"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="main.js"></script>
</body>
</html> 