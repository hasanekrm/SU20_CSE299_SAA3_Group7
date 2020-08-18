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
        <title>Resorts</title>
        <!-- Meta Description  -->
        <meta name="description" content="Vromon Bilash - Best site for travelers and travel agency in Bangladesh. Here travelers can find their perfect tour plan, best travel agency and best deal. And travel agency can also run their service very easily and happily. So what are you waitting for, Let's descover the beauty of Bangladesh.">
       

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
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>





        

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
                                <a class="navbar-brand logo" href="index.php">XXXXXXXX</a>
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

<section class="hotel-search single-search dark-overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 search-section">
                            <h2 class="text-center">FIND YOUR PERFECT TOUR</h2>
                            <!-- Start Tour Search -->
                            <form >
                                <div class="form-row">
                                    <div class="col-md-3 search-col-padding">
                                        <label>Leaving From</label>
                                        <div class="input-group">
                                            <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. Dhaka">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 search-col-padding">
                                        <label>Resort</label>
                                        <div class="input-group">
                                            <input type="text" name="pack-departure-city" class="form-control" required placeholder="E.g. Sajek">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-map-marker fa-fw"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 search-col-padding">
                                        <label>Starting From</label>
                                        <div class="input-group">
                                            <input type="text" id="package_start" class="form-control" placeholder="DD/MM/YYYY">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-calendar fa-fw"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-6 search-col-padding">
                                        <label>Duration</label>
                                        <select class="form-control" name="holiday_duration">
                                            <option>3 Days</option>
                                            <option>5 Days</option>
                                            <option>1 Week</option>
                                            <option>2 Weeks</option>
                                            <option>1 Month</option>
                                            <option>1+ Month</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 col-sm-3 col-6 search-col-padding">
                                        <label>Package Type</label>
                                        <select class="form-control" name="package_type">
                                            <option>Group</option>
                                            <option>Family</option>
                                            <option>Individual</option>
                                            <option>Honeymoon</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 text-center search-col-padding">
                                        <button type="submit" class="btn btn-theme md-btn text-uppercase">Search Tour</button>
                                    </div>
                                </div>
                            </form>
                            <!-- End Tour Search -->
                        </div>
                    </div>
                </div>
            </section>  
            <!-- End Top Search Section -->

            <!-- Start Tour Box View Section  -->
            <section class="section-wrapper box-view-section">
                <div class="container">
                    <div class="row">
                                                                
                                                                <?php  
                                                                    include('card-view-tour.php');
                                                                ?>
                     
                                                        </div>
                </div>
            </section>
         

          

            <!-- Start Footer Section -->
            <section class="section-wrapper pb-0">
                <footer class="main-footer">
                   

                    <div class="main-footer-nav">
                        <div class="container">
                            <a href="about_us.php"><center><h5><u>About Us</u></h5></center></a>
                                	
                                    <center><p>Copyright &copy; 2018 vromonbilash.com . All Rights Reserved.</p></center>
                             
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