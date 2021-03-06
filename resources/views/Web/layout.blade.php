﻿

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.scriptsbundle.com/carspot/demos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 16:05:55 GMT -->
<head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>Carspot | Car Dealership - Vehicle Marketplace And Car Services</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('bower_components/web/css/bootstrap.css')}}">
      <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('bower_components/web/css/style.css')}}">
      <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('bower_components/web/css/font-awesome.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link href="{{ asset('bower_components/web/css/flaticon.css')}}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('bower_components/web/css/et-line-fonts.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('bower_components/web/css/carspot-menu.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('bower_components/web/css/animate.min.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="{{ asset('bower_components/web/css/select2.min.css')}}" rel="stylesheet" />
      <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
      <link href="{{ asset('bower_components/web/css/nouislider.min.css')}}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
      <link href="{{ asset('bower_components/web/css/slider.css')}}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/web/css/owl.carousel.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/web/css/owl.theme.css')}}">
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link href="{{ asset('bower_components/web/skins/minimal/minimal.css')}}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= PrettyPhoto =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('bower_components/web/css/jquery.fancybox.min.css')}}" type="text/css" media="screen"/>
      <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
      <link href="{{ asset('bower_components/web/css/responsive-media.css')}}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="color" href="{{ asset('bower_components/web/css/colors/defualt.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSource+Sans+Pro:400,400i,600" rel="stylesheet">
      <!-- JavaScripts -->
      <script src="{{ asset('bower_components/web/js/modernizr.js')}}"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


      
      <![endif]-->

<!-- 
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
   </head>
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <div class="preloader"></div>
      <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
      <div class="color-switcher" id="choose_color">
         <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
         <h5>STYLE SWITCHER</h5>
         <div class="theme-colours">
            <p> Choose Colour style </p>
            <ul>
               <li>
                  <a href="#." class="defualt" id="defualt"></a>
               </li>
               <li>
                  <a href="#." class="green" id="green"></a>
               </li>
               <li>
                  <a href="#." class="purple" id="purple"></a>
               </li>
            </ul>
         </div>
         <div class="clearfix"> </div>
      </div>
      <!-- =-=-=-=-=-=-= Main Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
         <div class="header-top dark">
            <div class="container">
               <div class="row">
                  <!-- Header Top Left -->
                  <div class="header-top-left col-md-6 col-sm-6 col-xs-12 hidden-xs">
                     <ul class="listnone">
                        <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                        <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
                        <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe" aria-hidden="true"></i> Language <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="#">English</a></li>
                              <li><a href="#">Swedish</a></li>
                              <li><a href="#">Arabic</a></li>
                              <li><a href="#">Russian</a></li>
                              <li><a href="#">chinese</a></li>
                           </ul>
                        </li>
                     </ul>
                  </div>
                  <!-- Header Top Right Social -->
                  <div class="header-right col-md-6 col-sm-6 col-xs-12 ">
                     <div class="pull-right">
                        <ul class="listnone">
                           <li><a href="login.html"><i class="fa fa-sign-in"></i> Log in</a></li>
                           <li class="hidden-xs hidden-sm"><a href="register.html"><i class="fa fa-unlock" aria-hidden="true"></i> Register</a></li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle resize" alt="" src="{{ asset('bower_components/web/images/users/3.jpg')}}"> <span class="myname hidden-xs">user </span> <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="profile.html">User Profile</a></li>
                                 <li><a href="archives.html">Archives</a></li>
                                 <li><a href="active-ads.html">Active Ads</a></li>
                                 <li><a href="favourite.html">Favourite Ads</a></li>
                                 <li><a href="messages.html">Message Panel</a></li>
                                 <li><a href="deactive.html">Account Deactivation</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="post-ad-1.html" class="btn btn-theme">Sell Your Car</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <div class="clearfix"></div>
         <!-- menu start -->
         <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                           <li>
                              <a href="index.html"><img src="{{ asset('bower_components/web/images/logo.png')}}" alt="logo"> </a>
                           </li>
                        </ul>
                        <!-- menu links -->
                        <ul class="menu-links">
                           <!-- active class -->
                           <li>
                              <a href="javascript:void(0)">Home <i class="fa fa-angle-down fa-indicator"></i></a>
                              <!-- drop down multilevel  -->
                              <ul class="drop-down-multilevel">
                                 <li><a href="index-1.html">Home 1</a></li>
                                 <li><a href="index-2.html">Home 2</a></li>
                                 <li><a href="index-3.html">Home 3</a></li>
                                 <li><a href="index-4.html">Home 4</a></li>
                                 <li><a href="index-5.html">Home 5</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0)"> Cars <i class="fa fa-angle-down fa-indicator"></i></a>
                              <div class="drop-down grid-col-12">
                                 <!--grid row-->
                                 <div class="grid-row">
                                    <!--grid column 3-->
                                    <div class="grid-col-2">
                                       <h3>Condition</h3>
                                       <ul>
                                          <li><a href="listing.html">New</a></li>
                                          <li><a href="listing-4.html">Used</a></li>
                                          <li><a href="listing-3.html">Reconditioned </a></li>
                                          <li><a href="#">Featured Cars </a></li>
                                       </ul>
                                    </div>
                                    <div class="grid-col-6">
                                       <h3>Brands</h3>
                                       <ul class="by-make list-inline">
                                          <li>
                                             <a href="#">
                                             <img src="{{ asset('bower_components/web/images/brands/1.png')}}" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/2.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/3.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/4.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/5.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/6.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/7.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/8.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/9.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <img src="images/brands/11.png" class="img-responsive" alt="Brand Image">
                                             </a>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="grid-col-4">
                                       <h3>Body Type</h3>
                                       <ul class="list-inline by-category ">
                                          <li>
                                             <a href="#">
                                        		<img alt="Hybrid" src="images/bodytype/1.png">
                                        		Convertible
                                        	 </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                        		<img alt="Hybrid" src="images/bodytype/2.png">
                                        		Coupe
                                        	 </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                        		<img alt="Hybrid" src="images/bodytype/3.png">
                                        		Sedan
                                        	 </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                        		<img alt="Hybrid" src="images/bodytype/4.png">
                                        		Van/Minivan
                                        	 </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                        		<img alt="Hybrid" src="images/bodytype/5.png">
                                        		Truck
                                        	 </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                        		<img alt="Hybrid" src="images/bodytype/6.png">
                                        		Hybrid
                                        	 </a>
                                          </li>

                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Listing <i class="fa fa-angle-down fa-indicator"></i></a>
                              <!-- drop down multilevel  -->
                              <ul class="drop-down-multilevel">
                                 <li>
                                    <a href="javascript:void(0)">Grid Style<i class="fa fa-angle-right fa-indicator"></i> </a>
                                    <!-- drop down second level -->
                                    <ul class="drop-down-multilevel">
                                       <li><a href="listing.html"> Grid Style (Defualt)</a></li>
                                       <li><a href="listing-1.html"> Grid Style 1</a></li>
                                       <li><a href="listing-2.html"> Grid Style 2</a></li>
                                       <li><a href="listing-3.html"> Grid Style 3</a></li>
                                       <li><a href="listing-4.html"> Grid Style 4</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="javascript:void(0)">List Style<i class="fa fa-angle-right fa-indicator"></i> </a>
                                    <!-- drop down second level -->
                                    <ul class="drop-down-multilevel">
                                       <li><a href="#">List View 1</a></li>
                                       <li><a href="listing-6.html">List View 2</a></li>
                                       <li><a href="listing-7.html">List View 3</a></li>
                                       <li><a href="listing-8.html">List View 4</a></li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="javascript:void(0)">Single Ad<i class="fa fa-angle-right fa-indicator"></i></a>
                                    <!-- drop down second level -->
                                    <ul class="drop-down-multilevel">
                                       <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                       <li><a href="single-page-listing-1.html">Single Ad (Gallery)</a></li>
                                       <li><a href="single-page-listing-2.html">Single Ad (Gallery 2)</a></li>
                                       <li><a href="single-page-listing-3.html">Single Ad Variation</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="icons.html">Template Icons </a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Reviews <i class="fa fa-angle-down fa-indicator"></i></a>
                              <!-- drop down multilevel  -->
                              <ul class="drop-down-multilevel">
                                 <li><a href="reviews.html">Expert Reviews</a></li>
                                 <li><a href="review-detail.html">Review Detial</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Compare <i class="fa fa-angle-down fa-indicator"></i></a>
                              <!-- drop down multilevel  -->
                              <ul class="drop-down-multilevel">
                                 <li><a href="compare.html">Car Comparison</a></li>
                                 <li><a href="compare-1.html">Comparison Style 2</a></li>
                                 <li><a href="compare-2.html">Comparison Detial</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Dashboard <i class="fa fa-angle-down fa-indicator"></i></a>
                              <!-- drop down multilevel  -->
                              <ul class="drop-down-multilevel">
                                 <li><a href="profile.html">User Profile</a></li>
                                 <li><a href="archives.html">Archives</a></li>
                                 <li><a href="active-ads.html">Active Ads</a></li>
                                 <li><a href="favourite.html">Favourite Ads</a></li>
                                 <li><a href="messages.html">Message Panel</a></li>
                                 <li><a href="deactive.html">Account Deactivation</a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                              <!-- drop down full width -->
                              <div class="drop-down grid-col-12">
                                 <!--grid row-->
                                 <div class="grid-row">
                                    <!--grid column 2-->
                                    <div class="grid-col-2">
                                       <h4>Blog</h4>
                                       <ul>
                                          <li><a href="blog.html"> Right Sidebar</a></li>
                                          <li><a href="blog-1.html"> Masonry Style</a></li>
                                          <li><a href="blog-2.html"> Without Sidebar</a></li>
                                          <li><a href="blog-details.html">Single Blog </a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 2-->
                                    <div class="grid-col-2">
                                       <h4>Miscellaneous</h4>
                                       <ul>
                                          <li><a href="about.html">About Us</a></li>
                                          <li><a href="about-1.html">About Us 2</a></li>
                                          <li><a href="cooming-soon.html">Comming Soon</a></li>
                                          <li><a href="elements.html">Shortcodes</a></li>

                                       </ul>
                                    </div>
                                    <!--grid column 2-->
                                    <div class="grid-col-2">
                                       <h4>Others</h4>
                                       <ul>
                                        <li><a href="error.html">404 Page</a></li>
                                          <li><a href="faqs.html">FAQS</a></li>
                                          <li><a href="login.html">Login</a></li>
                                          <li><a href="register.html">Register</a></li>

                                       </ul>
                                    </div>
                                    <!--grid column 2-->
                                    <div class="grid-col-2">
                                       <h4>Extra Page</h4>
                                       <ul>
                                          <li><a href="post-ad-1.html">Post Ad</a></li>
                                          <li><a href="pricing.html">Pricing</a></li>
                                          <li><a href="site-map.html">Site Map</a></li>
                                          <li><a href="contact.html">Contact Us</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 2-->
                                     <div class="grid-col-2">
                                       <h4>Services Page</h4>
                                       <ul>
                                          <li><a href="services.html">Services</a></li>
                                          <li><a href="services-1.html">Services 2</a></li>
                                          <li><a href="profile.html">Profile</a></li>
                                          <li><a href="messages.html">Messages</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 2-->
                                     <div class="grid-col-2">
                                       <h4>Trending</h4>
                                       <ul>
                                          <li><a href="reviews.html">Reviews</a></li>
                                          <li><a href="review-detail.html">Review Detail</a></li>
                                          <li><a href="compare.html">Compare</a></li>
                                          <li><a href="compare-2.html">Comapre Detail</a></li>
                                       </ul>
                                    </div>
                                    <!--grid column 2-->
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <ul class="menu-search-bar">
                           <li>
                              <a>
                                 <div class="contact-in-header clearfix">
                                    <i class="flaticon-customer-service"></i>
                                    <span>
                                    Call Us Now
                                    <br>
                                    <strong>111 222 333 444</strong>
                                    </span>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
         </nav>
         <!-- menu end -->
      </div>
      <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Home Banner  =-=-=-=-=-=-= -->

     

      <div class="container-fluid" style=" margin: 0;padding: 0;">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    
    <div class="item active">
        <img src="{{ asset('bower_components\Web\images\slider\5d0c902590a3d.jpeg')}}" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="item ">
        <img src="{{ asset('bower_components\Web\images\slider\1.jpg')}}" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{ asset('bower_components\Web\images\slider\2.jpg')}}" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="{{ asset('bower_components\Web\images\slider\3.jpg')}}" alt="New york" style="width:100%;">
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
      <!-- <div id="banner">
         <div class="container">
            <div class="search-container">
             
               <h2>What are you looking for ?</h2>
               <p>Search <strong>267,241</strong> new ads -<strong> 83 </strong> added today</p>
               <a class="btn btn-theme">Post Your Ad</a>
            </div>
         </div>
      </div> -->
      <!-- =-=-=-=-=-=-= Home Banner End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Advanced Search =-=-=-=-=-=-= -->
      <div class="advance-search">
         <div class="section-search search-style-2">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                     <!-- Nav tabs -->
                     <ul class="nav nav-tabs">
                        <li class="nav-item active">
                           <a class="nav-link" data-toggle="tab" href="#tab1">Search Car In Details </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#tab2" >Search Car By Type</a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                     <div class="tab-content clearfix">
                        <div class="tab-pane fade in active" id="tab1">
                           <form>
                              <div class="search-form pull-left">
                                 <div class="search-form-inner pull-left">
                                    <div class="col-md-3 no-padding">
                                       <div class="form-group">
                                          <label>Keyword</label>
                                          <input type="text" class="form-control" placeholder="Eg Honda Civic , Audi , Ford." />
                                       </div>
                                    </div>
                                    <div class="col-md-3 no-padding">
                                       <div class="form-group">
                                          <label>Select Make</label>
                                          <select class=" form-control make">
                                             <option label="Any Make"></option>
                                             <option>BMW</option>
                                             <option>Honda </option>
                                             <option>Hyundai </option>
                                             <option>Nissan </option>
                                             <option>Mercedes Benz </option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-3 no-padding">
                                       <div class="form-group">
                                          <label>Select Year</label>
                                          <select class=" form-control search-year">
                                             <option label="Any Year"></option>
                                             <option>Year</option>
                                             <option>2010</option>
                                             <option>2011</option>
                                             <option>2012</option>
                                             <option>2013</option>
                                             <option>2014</option>
                                             <option>2015</option>
                                             <option>2016</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-3 no-padding">
                                       <div class="form-group">
                                          <label>Select Location</label>
                                          <select class="search-loaction form-control">
                                             <option label="location"></option>
                                             <option value="0">America</option>
                                             <option value="1">Australia</option>
                                             <option value="2">Africa</option>
                                             <option value="3">Pakistan</option>
                                             <option value="4">Japan</option>
                                             <option value="5">Srilanka</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group pull-right">
                                    <button type="submit" value="submit" class="btn btn-lg btn-theme" >Search Now</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="tab-pane fade" id="tab2" >
                           <form>
                              <div class="search-form">
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Convertible" src="images/bodytype/1.png">
                                        <h4>Convertible</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Coupe" src="images/bodytype/2.png">
                                        <h4>Coupe</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Sedan" src="images/bodytype/3.png">
                                        <h4>Sedan</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Van/Minivan" src="images/bodytype/4.png">
                                        <h4>Van/Minivan</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Truck" src="images/bodytype/5.png">
                                        <h4>Truck</h4>
                                        </a>
                                    </div>
                                </div>
                                <!-- Body Type -->
                                <div class="col-md-2 col-sm-3 col-xs-4">
                                    <div class="box">
                                        <a href="#">
                                        <img alt="Hybrid" src="images/bodytype/6.png">
                                        <h4>Hybrid</h4>
                                        </a>
                                    </div>
                                </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Advanced Search End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">

      <!-- =-=-=-=-=-=-= Testimonials =-=-=-=-=-=-= -->
         <section class="section-padding parallex bg-img-3">
            <div class="container">
               <div class="row">
                  <div class="owl-testimonial-2">
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Just fabulous</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/1.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Jhon Emily Copper </h3>
                              <p> Developer</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Awesome ! Loving It</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/2.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Hania Sheikh </h3>
                              <p> CEO Pvt. Inc.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                      <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Very quick and Fast</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/3.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Jaccica Albana </h3>
                              <p>  CTO Albana Inc.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Done in 3 Months! Awesome</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/4.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Humayun Sarfraz </h3>
                              <p>  CTO Glixen Technologies.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Find It Quit Professional</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/4.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Massica O'Brain </h3>
                              <p> Audit Officer </p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Just fabulous</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/1.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Jhon Emily Copper </h3>
                              <p> Developer</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Awesome ! Loving It</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/2.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Hania Sheikh </h3>
                              <p> CEO Pvt. Inc.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Very quick and Fast</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/3.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Jaccica Albana </h3>
                              <p>  CTO Albana Inc.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Done in 3 Months! Awesome</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/4.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Humayun Sarfraz </h3>
                              <p>  CTO Glixen Tech.</p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                     <!--Testimonial Column-->
                     <div class="single_testimonial">
                        <div class="textimonial-content">
                           <h4>Find It Quit Professional</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elitsed eiusmod tempor enim minim veniam quis notru.</p>
                        </div>
                        <div class="testimonial-meta-box">
                           <img src="images/users/4.jpg" alt="">
                           <div class="testimonial-meta">
                              <h3 class="">Massica O'Brain </h3>
                              <p> Audit Officer </p>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- =-=-=-=-=-=-= Testimonials Section End =-=-=-=-=-=-= -->


         <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
         <section class="custom-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                        <!-- Main Title -->
                        <h1>Latest <span class="heading-color"> Featured</span> Ads</h1>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="row grid-style-2 ">
                     <div class="col-md-12 col-xs-12 col-sm-12">
                        <!-- Ads Archive -->
                        <div class="col-md-4 col-xs-12 col-sm-6">
                           <div class="category-grid-box-1">
                              <div class="featured-ribbon">
                                 <span>Featured</span>
                              </div>
                              <div class="image">
                                 <img alt="Carspot" src="{{ asset('bower_components/web/images/posting/2.jpg')}}" class="img-responsive">
                                 <div class="ribbon popular"></div>
                                 <div class="price-tag">
                                    <div class="price"><span>$920,000</span></div>
                                 </div>
                              </div>
                              <div class="short-description-1 clearfix">
                                 <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                 <h3><a title="" href="single-page-listing.html">Porsche 911 Carrera 2017 </a></h3>
                                 <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                 <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                                 </ul>
                              </div>
                              <div class="ad-info-1">
                                 <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                                 <ul class="pull-right">
                                    <li> <a href="#"><i class="flaticon-like-1"></i></a> </li>
                                    <li> <a href="#"><i class="flaticon-message"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-4 col-xs-12 col-sm-6">
                           <div class="category-grid-box-1">
                              <div class="featured-ribbon">
                                 <span>Featured</span>
                              </div>
                              <div class="image">
                                 <img alt="Carspot" src="{{ asset('bower_components/web/images/posting/3.jpg')}}" class="img-responsive">
                                 <div class="ribbon popular"></div>
                                 <div class="price-tag">
                                    <div class="price"><span>$117,000</span></div>
                                 </div>
                              </div>
                              <div class="short-description-1 clearfix">
                                 <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                 <h3><a title="" href="single-page-listing.html">2014 Ford Shelby GT500 Coupe</a></h3>
                                 <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                 <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                                 </ul>
                              </div>
                              <div class="ad-info-1">
                                 <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                                 <ul class="pull-right">
                                    <li> <a href="#"><i class="flaticon-like-1"></i></a> </li>
                                    <li> <a href="#"><i class="flaticon-message"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-4 col-xs-12 col-sm-6">
                           <div class="category-grid-box-1">
                              <div class="featured-ribbon">
                                 <span>Featured</span>
                              </div>
                              <div class="image">
                                 <img alt="Carspot" src="{{ asset('bower_components/web/images/posting/6.jpg')}}" class="img-responsive">
                                 <div class="ribbon popular"></div>
                                 <div class="price-tag">
                                    <div class="price"><span>$77,000</span></div>
                                 </div>
                              </div>
                              <div class="short-description-1 clearfix">
                                 <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                 <h3><a title="" href="single-page-listing.html">McLaren F1 Sports Car</a></h3>
                                 <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                 <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                                 </ul>
                              </div>
                              <div class="ad-info-1">
                                 <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                                 <ul class="pull-right">
                                    <li> <a href="#"><i class="flaticon-like-1"></i></a> </li>
                                    <li> <a href="#"><i class="flaticon-message"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-4 col-xs-12 col-sm-6">
                           <div class="category-grid-box-1">
                              <div class="featured-ribbon">
                                 <span>Featured</span>
                              </div>
                              <div class="image">
                                 <img alt="Carspot" src="{{ asset('bower_components/web/images/posting/13.jpg')}}" class="img-responsive">
                                 <div class="ribbon popular"></div>
                                 <div class="price-tag">
                                    <div class="price"><span>$50,00</span></div>
                                 </div>
                              </div>
                              <div class="short-description-1 clearfix">
                                 <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                 <h3><a title="" href="single-page-listing.html">2017 Audi A4 quattro Premium</a></h3>
                                 <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                 <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                                 </ul>
                              </div>
                              <div class="ad-info-1">
                                 <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                                 <ul class="pull-right">
                                    <li> <a href="#"><i class="flaticon-like-1"></i></a> </li>
                                    <li> <a href="#"><i class="flaticon-message"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-4 col-xs-12 col-sm-6">
                           <div class="category-grid-box-1">
                              <div class="featured-ribbon">
                                 <span>Featured</span>
                              </div>
                              <div class="image">
                                 <img alt="Carspot" src="{{ asset('bower_components/web/images/posting/14.jpg')}}" class="img-responsive">
                                 <div class="ribbon popular"></div>
                                 <div class="price-tag">
                                    <div class="price"><span>$999,000</span></div>
                                 </div>
                              </div>
                              <div class="short-description-1 clearfix">
                                 <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                 <h3><a title="" href="single-page-listing.html">Bugatti Veyron Super Sport </a></h3>
                                 <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                 <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                                 </ul>
                              </div>
                              <div class="ad-info-1">
                                 <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                                 <ul class="pull-right">
                                    <li> <a href="#"><i class="flaticon-like-1"></i></a> </li>
                                    <li> <a href="#"><i class="flaticon-message"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-4 col-xs-12 col-sm-6">
                           <div class="category-grid-box-1">
                              <div class="featured-ribbon">
                                 <span>Featured</span>
                              </div>
                              <div class="image">
                                 <img alt="Carspot" src="{{ asset('bower_components/web/images/posting/8.jpg')}}" class="img-responsive">
                                 <div class="ribbon popular"></div>
                                 <div class="price-tag">
                                    <div class="price"><span>$205,000</span></div>
                                 </div>
                              </div>
                              <div class="short-description-1 clearfix">
                                 <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                 <h3><a title="" href="single-page-listing.html">Honda Civic 2017 Sports Edition</a></h3>
                                 <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                 <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)"><i class="flaticon-gas-station-1"></i>Diesel</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-dashboard"></i>35,000 km</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-engine-2"></i>1800 cc</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-car-2"></i>SUV</a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-cogwheel-outline"></i>White</a></li>
                                 </ul>
                              </div>
                              <div class="ad-info-1">
                                 <p><i class="flaticon-calendar"></i> &nbsp;<span>5 Days ago</span> </p>
                                 <ul class="pull-right">
                                    <li> <a href="#"><i class="flaticon-like-1"></i></a> </li>
                                    <li> <a href="#"><i class="flaticon-message"></i></a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- Listing Ad Grid -->
                        </div>
                        <!-- /col -->
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->

         <!-- =-=-=-=-=-=-= Services Section  =-=-=-=-=-=-= -->
      
         <!-- =-=-=-=-=-=-=  Services Section End =-=-=-=-=-=-= -->






         <!-- =-=-=-=-=-=-= Expert Reviews Section =-=-=-=-=-=-= -->
         <!-- <section class="news section-padding">
            <div class="container">
               <div class="row">
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 left-side">
                       
                        <h1>Expert  <span class="heading-color"> Reviews</span> Feedback</h1>
                      
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-12">
                     <div class="mainimage">
                        <a>
                           <img alt="" class="img-responsive" src="{{ asset('bower_components/Web/images/blog/1.jpg'
                           )}}">
                           <div class="overlay">
                              <h2>Eight Things You Should Know About The Mercedes-Benz E-Class LWB</h2>
                           </div>
                        </a>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="col-md-5 col-sm-12 col-xs-12">
                     <div class="newslist">
                        <ul>
                           <li>
                              <div class="imghold"> <a><img src="{{ asset('bower_components/images/blog/s1.jpg')}}" alt=""></a> </div>
                              <div class="texthold">
                                 <h4><a>2017 Honda City: Which Variant Suits You? </a></h4>
                                 <p>With the 2017 facelifted avatar, the Honda City has significantly upped its game...&nbsp;</p>
                              </div>
                              <div class="clear"></div>
                           </li>
                           <li>
                              <div class="imghold"> <a><img src="{{ asset('bower_components/images/blog/s2.jpg')}}" alt=""></a> </div>
                              <div class="texthold">
                                 <h4><a>Honda City Facelift &ndash; Expected Prices </a></h4>
                                 <p>Honda will launch the City facelift in India on Feb 14, 2017 and it promises to...&nbsp;</p>
                              </div>
                              <div class="clear"></div>
                           </li>
                           <li>
                              <div class="imghold"> <a><img src="images/blog/s3.jpg" alt=""></a> </div>
                              <div class="texthold">
                                 <h4><a>Audi A4 Diesel Launched In India At Rs 40.20 Lakh </a></h4>
                                 <p>Audi India has launched a powerful diesel variant of its A4 sedan at Rs 40.20 la...&nbsp;</p>
                              </div>
                              <div class="clear"></div>
                           </li>
                           <li>
                              <div class="imghold"> <a><img src="images/blog/s4.jpg" alt=""></a> </div>
                              <div class="texthold">
                                 <h4><a>Audi A4 Diesel Launched In India At Rs 40.20 Lakh </a></h4>
                                 <p>Audi India has launched a powerful diesel variant of its A4 sedan at Rs 40.20 la...&nbsp;</p>
                              </div>
                              <div class="clear"></div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </section> -->
         <!-- =-=-=-=-=-=-= Expert Reviews End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Our Clients =-=-=-=-=-=-= -->
         <section class="client-section gray">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                     <div class="margin-top-30">
                        <h3>Why Choose Us</h3>
                        <h2>Our premium Clients</h2>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                     <div class="brand-logo-area clients-bg">
                        <div class="clients-list">
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/16.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/2.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/11.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/4.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/5.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/6.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/7.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/8.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/9.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/17.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- =-=-=-=-=-=-= Our Clients End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Car Inspection =-=-=-=-=-=-= -->
         <!-- <section class="car-inspection section-padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12 nopadding hidden-sm">
                     <div class="call-to-action-img-section-right">
                        <img src="{{ asset('bower_components/images/car-in-red.png')}}" class="wow slideInLeft img-responsive" data-wow-delay="0ms" data-wow-duration="3000ms" alt="">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12 nopadding">
                     <div class="call-to-action-detail-section">
                        <div class="heading-2">
                           <h3> Want To Sale Your Car ?</h3>
                           <h2>Car Inspection</h2>
                        </div>
                        <p> Our CarSure experts inspect the car on over 200 checkpoints so you get complete satisfaction and peace of mind before buying. </p>
                        <div class="row">
                           <ul>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Transmission</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Steering</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Engine</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Tires</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Lighting</li>
                              <li class="col-sm-4"> <i class="fa fa-check"></i> Interior</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Suspension</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Exterior</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Brakes</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Air Conditioning</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Engine Diagnostics</li>
                              <li class="col-sm-4">  <i class="fa fa-check"></i> Wheel Alignment</li>
                           </ul>
                        </div>
                        <a href="#" class="btn-theme btn-lg btn">Schedule Inspection <i class="fa fa-angle-right"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <!-- =-=-=-=-=-=-= Car Inspection End =-=-=-=-=-=-= -->
           <!-- =-=-=-=-=-=-= Buy Or Sale =-=-=-=-=-=-= -->
         <section class="sell-box padding-top-70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                     <div class="sell-box-grid">
                        <div class="short-info">
                        <h3> Want To Sale Your Car ?</h3>
                           <h2><a href="#">Are you looking for a car?</a></h2>
                           <p>Search your car in our Inventory and request a quote on the vehicle of your choosing. </p>
                        </div>
                        <div class="text-center">
                           <img class="img-responsive wow slideInLeft center-block" data-wow-delay="0ms" data-wow-duration="2000ms" src="{{ asset('bower_components/Web/images/sell.png')}}" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                     <div class="sell-box-grid">
                        <div class="short-info">
                        <h3> Want To Sale Your Car ?</h3>
                           <h2> <a href="#">Do you want to sell your car?</a></h2>
                           <p>Request search your car in our Inventory and a quote on the vehicle of your choosing. </p>
                        </div>
                        <div class="text-center">
                           <img class="img-responsive wow slideInRight center-block" data-wow-delay="0ms" data-wow-duration="2000ms" src="{{ asset('bower_components/Web/images/sell-1.png')}}" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
          <!-- =-=-=-=-=-=-= Buy Or Sale End =-=-=-=-=-=-= -->

         <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <footer class="footer-bg">
            <!-- Footer Content -->
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Info Widget -->
                        <div class="widget">
                           <div class="logo"> <img alt="" src="images/logo.png"> </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat fringilla port.</p>
                           <ul class="apps-donwloads">
                              <li><img src="images/googleplay.png" alt=""></li>
                              <li><img src="images/appstore.png" alt=""></li>
                           </ul>
                        </div>
                        <!-- Info Widget Exit -->
                     </div>
                     <div class="col-md-2 col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget socail-icons">
                           <h5>Follow Us</h5>
                           <ul>
                              <li><a class="Facebook" ><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                              <li><a class="Twitter" href="#"><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                              <li><a class="Linkedin" href="#"><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                              <li><a class="Google" href="#"><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
                           </ul>
                        </div>
                        <!-- Follow Us End -->
                     </div>
                     <div class="col-md-2  col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget my-quicklinks">
                           <h5>Quick Links</h5>
                           <ul >
                              <li><a href="#">About Us</a></li>
                             <li><a href="#">Faqs</a></li>
                             <li><a href="#">Packages</a></li>
                             <li><a href="#">Contact Us</a></li>
                           </ul>
                        </div>
                        <!-- Follow Us End -->
                     </div>
                     <div class="col-md-5  col-sm-6 col-xs-12">
                        <!-- Newslatter -->
                        <div class="widget widget-newsletter">
                           <h5>Singup for Weekly Newsletter</h5>
                           <div class="fieldset">
                              <p>We may send you information about related events, webinars, products and services which we believe.</p>
                              <form>
                                 <input class="" value="Enter your email address" type="text">
                                 <input class="submit-btn" name="submit" value="Submit" type="submit">
                              </form>
                           </div>
                        </div>
                        <div class="copyright">
                           <p>© 2017 Carspot All rights reserved. Design by <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> </p>
                        </div>
                        <!-- Newslatter -->
                     </div>
                  </div>
               </div>
            </div>

         </footer>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End -->
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="{{ asset('bower_components/web/js/jquery.min.js')}}"></script>
      <!-- Bootstrap Core Css  -->
      <script src="{{ asset('bower_components/web/js/bootstrap.min.js')}}"></script>
      <!-- Jquery Easing -->
      <script src="{{ asset('bower_components/web/js/easing.js')}}"></script>
      <!-- Menu Hover  -->
      <script src="{{ asset('bower_components/web/js/carspot-menu.js')}}"></script>
      <!-- Jquery Appear Plugin -->
      <script src="{{ asset('bower_components/web/js/jquery.appear.min.js')}}"></script>
      <!-- Numbers Animation   -->
      <script src="{{ asset('bower_components/web/js/jquery.countTo.js')}}"></script>
      <!-- Jquery Select Options  -->
      <script src="{{ asset('bower_components/web/js/select2.min.js')}}"></script>
      <!-- noUiSlider -->
      <script src="{{ asset('bower_components/web/js/nouislider.all.min.js')}}"></script>
      <!-- Carousel Slider  -->
      <script src="{{ asset('bower_components/web/js/carousel.min.js')}}"></script>
      <script src="{{ asset('bower_components/web/js/slide.js')}}"></script>
      <!-- Image Loaded  -->
      <script src="{{ asset('bower_components/web/js/imagesloaded.js')}}"></script>
      <script src="{{ asset('bower_components/web/js/isotope.min.js')}}"></script>
      <!-- CheckBoxes  -->
      <script src="{{ asset('bower_components/web/js/icheck.min.js')}}"></script>
      <!-- Jquery Migration  -->
      <script src="{{ asset('bower_components/web/js/jquery-migrate.min.js')}}"></script>
      <!-- Style Switcher -->
      <script src="{{ asset('bower_components/web/js/color-switcher.js')}}"></script>
      <!-- PrettyPhoto -->
      <script src="{{ asset('bower_components/web/js/jquery.fancybox.min.js')}}"></script>
      <!-- Wow Animation -->
      <script src="{{ asset('bower_components/web/js/wow.js')}}"></script>
      <!-- Template Core JS -->
      <script src="{{ asset('bower_components/web/js/custom.js')}}"></script>
   </body>

<!-- Mirrored from templates.scriptsbundle.com/carspot/demos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 16:08:07 GMT -->
</html>
