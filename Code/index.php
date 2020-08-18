<?php  
                                        include('Config.php');
                                        session_start();
                                        if(!isset($_SESSION['g_user_id'])){
                                            $signin_user=0;    
                                        }
                                        else{
                                            $signin_user=1;
                                            $g_user_id=$_SESSION['g_user_id'];
                                        }
   
                                        ?>
                                      
<!DOCTYPE html>
<html class="load-full-screen" lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#f9676b">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="assets/images/vb_icon.png" />
        <!-- Meta Title -->
        <title>Vromon Bilash</title>
        <!-- Meta Description  -->
        <meta name="description" content="XXXXXXXX - Best site for travelers and travel agency in Bangladesh. Here travelers can find their perfect tour plan, best travel agency and best deal. And travel agency can also run their service very easily and happily. So what are you waitting for, Let's descover the beauty of Bangladesh.">
        

        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <!-- Font Awesome -->
        <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Animate css -->
        <link href="assets/libs/animate/animate.min.css" rel="stylesheet">
        <!-- Crousel css -->
        <link href="assets/libs/owl.carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/libs/owl.carousel/owl-carousel-theme.min.css" rel="stylesheet">
        <!-- Bootstrap css -->
        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme css --> 
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- Switch Style css -->
        <link href="assets/switch-style/switch-style.css" rel="stylesheet" type="text/css"/>
        <!-- Switch Color Style css -->
        <link href="#" data-style="styles" rel="stylesheet">
       





        

    </head>
    <body class="load-full-screen">

        <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div> 
            </div>
        </div>

        <div class="site-wrapper">
            <!-- Start Navbar Section -->
            <section>
                <div class="transparent-menu">
                    <div class="container nav-container">
                        <!-- Start Header -->
                        <div class="navbar-wrapper">
                            <div class="navbar navbar-default navbar-expand-lg navbar-light" role="navigation">
                                <a class="navbar-brand logo" href="index.php">XXXXXXX</a>
                                <!-- Start Responsive Menu Button -->
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                                    <i class="fa fa-navicon"></i>
                                </button>
                                <!-- End Responsive Menu Button -->
                                <!-- Start Menu -->  
                                <div class="navbar-collapse collapse">
                                    <ul class="navbar-nav navbar-right ml-auto">
                                        <li class="dropdown nav-item">
                                            <a class="toggle nav-link" href="#" data-toggle="dropdown">HOME </a>
                                            
                                        </li>
                                        
                                        <li class="dropdown nav-item">
                                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">SERVICES</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="nav-link" href="tour-package.php">Resorts</a></li>
                                                <li class="nav-item"><a class="nav-link" href="hotel-room.php">Packages</a></li>
                                            
                                                <li class="nav-item"><a class="nav-link" href="hire-a-car.php">Hire-a Car</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown nav-item">
                                            <a class="toggle nav-link" href="travelers.php">BLOG </a>
                                            
                                        </li>
                                        
                                      
                                        <li class="nav-item"><a class="nav-link" href="contact-us.html">CONTACT US</a></li>
                                        <?php  
                                        include('Config.php');
                                        
                                        if($signin_user == 0){
                                            echo "
                                            <li class='dropdown nav-item'>
                                            <a class='toggle nav-link' href='travelers.php'><i class='fa fa-fw fa-sign-in'></i>SIGN-IN </a>
                                            
                                            </li>";
                                            
                                        }
                                        else{
                                            echo "

                                             <li class='dropdown nav-item'>
                                            <a class='navbar-brand logo' href='#'  data-toggle='dropdown'>
                                        <img  style='width: 45px' src='assets/images/tesimonials/author-1.png'> </a>
                                            <ul class='dropdown-menu'>
                                                <a class='dropdown-item' href='travelers.php'><i class='fa fa-user' style='font-size:12px'></i> &nbsp; My Account</a>
                                                
                                                <a class='dropdown-item' data-toggle='modal' href='' data-target='#exampleModal'>
                                                <i class='fa fa-fw fa-sign-out'></i> Logout</a>
                                                
                                                
                                            </ul>
                                        </li>
                                            ";
                                        }
   
                                        ?>
                                      
                                        
           
                                    </ul>
                                </div>
                                <!-- End Menu -->  
                            </div>
                        </div>
                        <!-- End Header -->
                    </div>
                </div>
                <!-- End Menu container -->
            </section>
             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="glogout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
            <!-- End Navbar Section -->


            <!-- Start Slider Section -->
            <section class="bg-slider">
                <div class="slide"> 
                    <div class="slideshow owl-carousel">
                        <!-- Start Slider Backround Image  -->
                        <div class="item slider-1"></div>
                        <div class="item slider-2"></div>
                        <!-- End Slider Backround Image -->
                    </div>
                </div>
            </section>
            <!-- End Slider Section  -->


            <!-- Start Main Search Section -->
            <section>
                <div class="full-width-search">
                    <div class="container">
                        <div class="row justify-content-center">                        
                            <div class="col-md-10 col-lg-8 search-section">
                                <div role="tabpanel">
                                    <!-- Start Main Category Tab -->
                                    <ul class="nav nav-tabs search-top" role="tablist" id="searchTab">
                                        <!-- Start Tab -->
                                        <li role="presentation" class="text-center nav-item">
                                            <a class="nav-link active show" href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">
                                                <i class="fa fa-bed"></i> 
                                                <span>Resorts</span>
                                            </a>
                                        </li>
                                        <!-- End Tab -->
                                        <!-- Start Tab -->
                                        <li role="presentation" class="text-center nav-item">
                                            <a class="nav-link" href="#holiday" aria-controls="holiday" role="tab" data-toggle="tab">
                                                <i class="fa fa-suitcase"></i>
                                                <span>Packages</span>
                                            </a>
                                        </li>
                                        <!-- End Tab -->
                                        <!-- Start Tab -->
                                        
                                        <!-- End Tab -->
                                        <!-- Start Tab -->
                                        <li role="presentation" class="text-center nav-item">
                                            <a class="nav-link" href="#car" aria-controls="car" role="tab" data-toggle="tab">
                                                <i class="fa fa-car"></i>
                                                <span>CAR</span>
                                            </a>
                                        </li>
                                        <!-- End Tab -->
                                    </ul>
                                    <!-- End Main Category Tab -->

                                    <!-- Start Tab Content -->
                                    <div class="tab-content">
                                        <!-- Start Hotel Tab -->
                                        <div role="tabpanel" class="tab-pane show active" id="hotel">
                                            <form >
                                                <div class="form-row">
                                                    <div class="col-md-12 product-search-title">Book Resorts</div>
                                                    <div class="col-md-12 search-col-padding">
                                                        <label>I Want To Go</label>
                                                        <div class="input-group">
                                                            <input type="text" name="destination-city" class="form-control" aria-describedby="wantgo" required placeholder="">
                                                            <div class="input-group-append">
                                                                <span id="" class="input-group-text">
                                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Check - In</label>
                                                        <div class="input-group">
                                                            <input type="text" name="check-in" class="form-control datepicker" aria-describedby="checkin" placeholder="DD/MM/YYYY">
                                                            <div class="input-group-append">
                                                                <span id="checkin" class="input-group-text">
                                                                    <i class="fa fa-calendar fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Check - Out</label>
                                                        <div class="input-group">
                                                            <input type="text" name="check-out" class="form-control datepicker" placeholder="DD/MM/YYYY">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-calendar fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-3 col-sm-3 col-6 search-col-padding">
                                                        <label>Adult</label>
                                                        <input id="hotel_adult_count" name="adult_count" value="1" class="form-control quantity-padding">
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-6 search-col-padding">
                                                        <label>Child</label>
                                                        <input type="text" id="hotel_child_count" name="child_count" value="1" class="form-control quantity-padding">
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-6 search-col-padding">
                                                        <label>Rooms</label>
                                                        <select class="form-control" name="rooms">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3 col-sm-3 col-6 search-col-padding">
                                                        <label>Nights</label>
                                                        <select class="form-control" name="nights">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-12 search-col-padding">
                                                        <button type="submit" class="btn btn-theme md-btn text-uppercase mt-2">Search Hotels</button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Hotel Tab -->
                                        <!-- Start Holidays Tab -->
                                        <div role="tabpanel" class="tab-pane" id="holiday">
                                            <form >
                                                <div class="form-row">
                                                    <div class="col-md-12 product-search-title">Book TOUR Packages</div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>From</label>
                                                        <div class="input-group">
                                                            <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>I Want To Go</label>
                                                        <div class="input-group">
                                                            <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Starting From</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker" placeholder="DD/MM/YYYY">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-calendar fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Duration(Optional)</label>
                                                        <select class="form-control" name="holiday_duration">
                                                            <option>3 Days</option>
                                                            <option>5 Days</option>
                                                            <option>1 Week</option>
                                                            <option>2 Weeks</option>
                                                            <option>1 Month</option>
                                                            <option>1+ Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Package Type(Optional)</label>
                                                        <select class="form-control" name="package_type">
                                                            <option>Group</option>
                                                            <option>Family</option>
                                                            <option>Individual</option>
                                                            <option>Honeymoon</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Budget(Optional)</label>
                                                        <select class="form-control" name="package_budget">
                                                            <option>500</option>
                                                            <option>1000</option>
                                                            <option>1000+</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-12 search-col-padding">
                                                        <button type="submit" class="btn btn-theme md-btn text-uppercase mt-2">Search Packages</button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Holidays Tab -->
                                        <!-- Start Cruise Tab -->
                                        <div role="tabpanel" class="tab-pane" id="cruise">
                                            <form >
                                                <div class="form-row">
                                                    <div class="col-md-12 product-search-title">Book Cruise Packages</div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>From</label>
                                                        <div class="input-group">
                                                            <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>I Want To Go</label>
                                                        <div class="input-group">
                                                            <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Starting From</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker" placeholder="DD/MM/YYYY">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-calendar fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Duration(Optional)</label>
                                                        <select class="form-control" name="holiday_duration">
                                                            <option>3 Days</option>
                                                            <option>5 Days</option>
                                                            <option>1 Week</option>
                                                            <option>2 Weeks</option>
                                                            <option>1 Month</option>
                                                            <option>1+ Month</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Package Type(Optional)</label>
                                                        <select class="form-control" name="package_type">
                                                            <option>Group</option>
                                                            <option>Family</option>
                                                            <option>Individual</option>
                                                            <option>Honeymoon</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Budget(Optional)</label>
                                                        <select class="form-control" name="package_budget">
                                                            <option>500</option>
                                                            <option>1000</option>
                                                            <option>1000+</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-12 search-col-padding">
                                                        <button type="submit" class="btn btn-theme md-btn text-uppercase mt-2">Search Cruise</button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Cruise Tab -->
                                        <!-- Start Car Tab -->
                                        <div role="tabpanel" class="tab-pane" id="car">
                                            <form >
                                                <div class="form-row">
                                                    <div class="col-md-12 product-search-title">Book Your Car</div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Pick Up</label>
                                                        <div class="input-group">
                                                            <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. New York">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Drop Off</label>
                                                        <div class="input-group">
                                                            <input type="text" name="pack-destination-city" class="form-control" required placeholder="E.g. New York">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Pick Up Date</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control datepicker" placeholder="DD/MM/YYYY">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-calendar fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 search-col-padding">
                                                        <label>Pick Up Time</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control timepicker" placeholder="2:15 PM">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-clock-o fa-fw"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-6 search-col-padding">
                                                        <label>Adults</label>
                                                        <select class="form-control" name="adults">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-6 search-col-padding">
                                                        <label>Car Type</label>
                                                        <select class="form-control" name="package_type">
                                                            <option>Mini</option>
                                                            <option>Compact</option>
                                                            <option>Economy</option>
                                                            <option>SUV</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-md-12 search-col-padding">
                                                        <button type="submit" class="btn btn-theme md-btn text-uppercase mt-2">Search Car</button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- End Car Tab -->
                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>	
            <!-- End Main Search Section -->


          
            

            <!-- Start Deals Section -->
            <section class="section-wrapper pb-0">
                <div class="hot-deals">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Start Section Title -->
                                <div class="section-title text-center">
                                <h2>Popular Services</h2>
                                <p>
                                    Best Service Provider offering you, best Services.
                                </p>
                            </div>
                                <!-- End Section Title -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div role="tabpanel" class="">
                                    <!-- Start Main Category Tab -->
                                    <ul class="nav nav-tabs justify-content-center" role="tablist" id="hotDeal">
                                        <!-- Start Tab -->
                                        <li  role="presentation" class="nav-item text-center">
                                            <a class="nav-link active" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">
                                                <i class="fa fa-suitcase"></i> 
                                                <span>Resorts</SPAN>
                                            </a>
                                        </li>
                                        <!-- End Tab -->
                                        <!-- Start Tab -->
                                        <li role="presentation" class="nav-item text-center">
                                            <a class="nav-link" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">
                                                <i class="fa fa-bed"></i> 
                                                <span>Packages</SPAN>
                                            </a>
                                        </li>
                                        <!-- End Tab -->
                                       
                                        <li role="presentation" class="nav-item text-center">
                                            <a class="nav-link" href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">
                                                <i class="fa fa-car"></i> 
                                                <span>Car</SPAN>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- End Main Category Tab -->
                                    <div class="clearfix"></div>
                                    <!-- Start Tab Content -->
                                    <div class="tab-content">
                                        <!-- Start Hotel Tab -->
                                        <div role="tabpanel" class="tab-pane active fade show" id="tab1">
                                                        <div class="row">
                                                                
                                                                <?php  
                                                                    include('card-view-tour.php');
                                                                ?>
                     
                                                        </div>
                                        </div>
                                        <!-- End Hotel Tab -->
                                        <!-- Start Holidays Tab -->
                                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                        <div class="row">
                                                                
                                                                <?php  
                                                                    include('card-view-hotel.php');
                                                                ?>
                     
                                                        </div>
              
                                        </div>
                                        <!-- End Holidays Tab -->
                                         <div role="tabpanel" class="tab-pane fade" id="tab3">
                                                        <div class="row">
                                                                
                                                                <?php  
                                                                    include('card-view-guide.php');
                                                                ?>
                     
                                                        </div>
              
                                        </div>
                                         <div role="tabpanel" class="tab-pane fade" id="tab4">
                                                        <div class="row">
                                                                
                                                                <?php  
                                                                    include('card-view-car.php');
                                                                ?>
                     
                                                        </div>
              
                                        </div>


                                    </div>
                                    <!-- End Tab Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Deals Section -->


            <!-- Start Top Tour Packages Section -->
            <section class="section-wrapper fixed-background dark-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Start Section Title -->
                            <div class="section-title light-section-title text-center">
                                <h4>CHECK OUT OUR TOP TOURS</h4>
                                <h2>Top Resort Packages</h2>
                                <p>
                                    Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                </p>
                            </div>
                            <!-- End Section Title -->
                        </div>
                    </div>
                    <div class="row no-gutters">

                        <div class="col-md-6 col-lg-4 tour-grid">
                            <img src="assets/images/offers/offers-6.jpg" alt="Shree">
                            <div class="tour-brief">
                                <div class="pull-left">
                                    <h5><i class="fa fa-map-marker"></i>Turkey</h5>
                                </div>
                                <div class="pull-right">
                                    <h5>$499</h5>
                                </div>
                            </div>
                            <!-- Start Tour Grid Details -->
                            <div class="tour-detail text-center">
                                <p><strong><i class="fa fa-map-marker"></i>Itinerary: </strong>Istanbul</p>
                                <p><strong><i class="fa fa-clock-o"></i>Duration: </strong> 4 Days</p>
                                <p><a class="btn btn-white-alt-theme sm-btn" href="tour-list.html">DETAIL</a></p>
                            </div>
                            <!-- End Tour Grid Details -->
                        </div>
                        <!-- End Tour Grid -->
                    </div>
                </div>
            </section>
            <!-- End Top Tour Packages Section -->








            <!-- Start Footer Section -->
            <section class="section-wrapper pb-0">
                <footer class="main-footer">
                   

                    <div class="main-footer-nav">
                        <div class="container">
                            <a href="about_us.php"><center><h5><u>About Us</u></h5></center></a>
                                	
                                    <center><p>Copyright &copy; XXXXXXXX.com . All Rights Reserved.</p></center>
                             
                        </div>
                    </div>
                    
                </footer>
            </section>

        </div>
        <!-- End Site Wrapper -->


 
        <!-- Switch Style End -->

        <!-- Load Scripts -->
        <!-- jquery --> 
        <script src="assets/libs/jquery/jquery-2.2.4.min.js"></script>
        <!-- jquery UI --> 
        <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
        <!-- Respond --> 
        <script src="assets/libs/respond/respond.min.js"></script>
        <!-- Bootstrap js -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap Timepicker js -->
        <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- owlcarousel js -->
        <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>
        <!-- wow js -->
        <script src="assets/libs/wow/wow.min.js"></script>
        <!--internal js--> 
        <script src="assets/js/internal.js"></script>

        <!-- Switch Style js -->
        <script src="assets/switch-style/switch-style.js"></script>

    </body>
</html>