<?php 
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>suj's designs</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icons -->
      <link rel="icon" href="img/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="css/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- colors css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- wow animation css -->
      <link rel="stylesheet" href="css/animate.css" />
      <!-- Revolution Loaling Fonts and Icons  -->
      <link rel="stylesheet" href="js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
      <!-- Revolution style Sheets  -->
      <link rel="stylesheet" href="js/revolution/css/settings.css">
      <link rel="stylesheet" href="js/revolution/css/layers.css">
      <link rel="stylesheet" href="js/revolution/css/navigation.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="default_theme" class="home_page1">
      <!-- header -->
      <div id="mySidenav" class="sidenav">
         <ul class="menu_sidebar">
            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li><a href="index.php"> Home</a></li>
            <li><a href="about.php"> About</i></a></li>
            <li><a href="what_we_do.php"> What we do</a></li>
            <li><a href="contact.php"> Contact Us</a></li>
         </ul>
      </div>
      <header class="header">
         <div class="header_top">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="full">
                        <span class="toggle_icon" style="cursor:pointer" onclick="openNav()"><img src="img/menu_icon.png" alt="#" /></span>
                        <div class="logo_circle">
                          <a href="index.php"><img class="img-responsive" src="img/logo.png" alt="#" /></a>
                        </div>
                        
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="float-right">
                        <ul class="top_links">
                           <li><a href="login.php"><img src="images/profile_icon.png" alt="#" /></a></li>
                           <li class="searchbar">
                              <input class="search_input" type="text" name="" placeholder="Search...">
                              <a href="#" class="search_icon"><img src="images/search_icon.png" alt="#" /></a>
                           </li>
                        </ul> 
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- Start Banner Slider -->
      <div class="banner-slider">
         <div class="container-fluid">
            <div class="row">
               <!-- <div id="slider_main" class="carousel slide" data-ride="carousel"> -->
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="full">
                           <div class="left_blog_top">
                              <h3>Decorate<br>Service</h3>
                              <p>Welcome to our website, hope you find something nice...</p>
                              <a class="bt_main" href="contact.php">Contact Us</a>
                           </div>
                           <!-- <div class="right_blog_top">
                              <img src="img/slide1_right.png" alt="#" />
                           </div> -->
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="full">
                           <div class="left_blog_top">
                              <h3>Decorate<br>Service</h3>
                              <p>Welcome to our website, hope you find something nice...</p>
                              <a class="bt_main" href="contact.php">Contact Us</a>
                           </div>
                           <div class="right_blog_top">
                              <img src="img/slide1_right.png" alt="#" />
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="slide_arrow">
                     <span>
                     <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                     <span class="carousel-control-prev-icon"></span>
                     </a>
                     <a class="carousel-control-next" href="#slider_main" data-slide="next">
                     <span class="carousel-control-next-icon"></span>
                     </a>
                     </span>
                  </div> -->
               <!-- </div> -->
            </div>
         </div>
      </div>
      <!-- End Banner Slider -->
      <!-- section -->
      <section class="layout_padding what_we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full heading_s1">
                     <h3>What We Do</h3>
                     <p>We help clients plan and design the interior of a room...</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="full decorate_blog">
                     <img src="images/sm1.png" alt="#" />
                     <a class="decorate_blog_bt" href="hd.html">Home Decorate</a>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full decorate_blog">
                     <img src="images/sm2.png" alt="#" />
                     <a class="decorate_blog_bt" href="od.html">Office Decorate</a>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full decorate_blog">
                     <img src="images/sm3.png" alt="#" />
                     <a class="decorate_blog_bt" href="fd.html">Furniture Decorate</a>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full decorate_blog">
                     <img src="images/sm4.png" alt="#" />
                     <a class="decorate_blog_bt" href="ld.html">Lighting Decorate</a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <!-- <div class="full">
                     <a class="read_more_bt float-right" href="#">Read More</a>
                  </div> -->
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding about_section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="row">
                        <div class="col-md-7 p-relative r-left">
                           <div class="full back_blog text_align_center padding_right_left_15">
                              <img src="images/about_img.png" alt="#" />
                           </div>
                        </div>
                        <div class="col-md-5">
                           <div class="full heading_s1">
                              <h3>About</h3>
                              <p>Welcome to our interior design website! If you're looking to update the look and functionality of your living space, you've come to the right place. Our team of professional interior designers is here to help you create a space that is both aesthetically pleasing and functional for your unique needs...Thank you for considering us for your room design needs. We look forward to working with you to create the space of your dreams.</p>
                           </div>
                           <div class="full">
                              <a class="read_more_bt" href="about.php">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding design_layout">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="full">
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="full heading_s1">
                     <h3>Best<br>Decorating for<br>Your home</h3>
                     
                  </div>
                  <!-- <div class="full">
                     <a class="read_more_bt" href="#">Get A Quote</a>
                  </div> -->
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding">
         <!-- <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full heading_s1">
                     <h3>Latest News</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="blog_style">
                     <div class="full news_blog">
                        <img src="images/blog1.png" alt="#" />
                     </div>
                     <div class="full post_colum">
                        <ul>
                           <li>Post By : Evonyee</li>
                           <li><a href="#">Like <img src="images/like_btn.png" alt="#" /></a></li>
                           <li><a href="#">Comment <img src="images/msg_btn.png" alt="#" /></a></li>
                           <li><a href="#">Share <img src="images/Share_btn.png" alt="#" /></a></li>
                        </ul>
                     </div>
                     <div class="full">
                        <h3>Clean and Decorating office..</h3>
                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore consectetur adipiscing elit, ad minim veniam, quis nostrud exercitation</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="blog_style">
                     <div class="full news_blog">
                        <img src="images/blog2.png" alt="#" />
                     </div>
                     <div class="full post_colum">
                        <ul>
                           <li>Post By : Evonyee</li>
                           <li><a href="#">Like <img src="images/like_btn.png" alt="#" /></a></li>
                           <li><a href="#">Comment <img src="images/msg_btn.png" alt="#" /></a></li>
                           <li><a href="#">Share <img src="images/Share_btn.png" alt="#" /></a></li>
                        </ul>
                     </div>
                     <div class="full">
                        <h3>Lighting and Decorating office..</h3>
                        <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore consectetur adipiscing elit, ad minim veniam, quis nostrud exercitation</p>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full heading_s1">
                     <h3>Contact us:</h3>
                     <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p> -->
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form action="consave.php" method="post">
                     <fieldset>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="full fieldset_blog">
                                 <input type="text" placeholder="Your Name" name="name" />
                              </div>
                              <div class="full fieldset_blog">
                                 <input type="text" placeholder="Phone Number" name="phone_no" />
                              </div>
                              <div class="full fieldset_blog">
                                 <input type="email" placeholder="email" name="email" />
                              </div>
                              <div class="full fieldset_blog">
                                 <textarea
                                    id=""
                                    cols="30"
                                    rows="7"
                                    
                                    placeholder="Message"
                                    name="msg"
                                 ></textarea>
                                 <!-- <textarea placeholder="Message" name=""msg></textarea> -->
                              </div>
                              <div class="full fieldset_blog center">
                                 <button>Send</button>
                              </div>
                           </div>
                        </div>
                     </fieldset>
                  </form>
               </div>
               <div class="col-md-6 p-relative">
                  <div class="full back_blog">
                     <img class="img-responsive" src="images/call_back.png" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- section -->
      <section class="layout_padding">
         <div class="container">
            <div class="row">
               <!-- <div class="col-md-12">
                  <div class="full heading_s1 text_align_center">
                     <h3>Feed b</h3>
                  </div>
                  <div class="testimonial_slider">
                     <div class="full">
                        <div class="client_slider_main2">
                           <div id="testimonial2" class="client_slider_main owl-carousel owl-theme">
                              <div class="item">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <div class="full">
                                          <div class="center"> <img src="images/layout_img/testimo_profile.png" alt="#" /> </div>
                                       </div>
                                    </div>
                                    <div class="col-md-9">
                                       <div class="full">
                                          <div class="testi_head">
                                             <h4>Lianna john</h4>
                                             <p>Home Rentel</p>
                                          </div>
                                       </div>
                                       <div class="full testi_slide">
                                          <p><img src="images/layout_img/quate_left_test.png" alt="#" />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <div class="full">
                                          <div class="center"> <img src="images/layout_img/testimo_profile.png" alt="#" /> </div>
                                       </div>
                                    </div>
                                    <div class="col-md-9">
                                       <div class="full">
                                          <div class="testi_head">
                                             <h4>Rosy Mike</h4>
                                             <p>Home Rentel</p>
                                          </div>
                                       </div>
                                       <div class="full testi_slide">
                                          <p><img src="images/layout_img/quate_left_test.png" alt="#" />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="item">
                                 <div class="row">
                                    <div class="col-md-3">
                                       <div class="full">
                                          <div class="center"> <img src="images/layout_img/testimo_profile.png" alt="#" /> </div>
                                       </div>
                                    </div>
                                    <div class="col-md-9">
                                       <div class="full">
                                          <div class="testi_head">
                                             <h4>William Butter</h4>
                                             <p>Home Rentel</p>
                                          </div>
                                       </div>
                                       <div class="full testi_slide">
                                          <p><img src="images/layout_img/quate_left_test.png" alt="#" />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- end footer -->
      <footer>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="full footer_top">
                     <div class="container">
                        <div class="row">
                           <div class="col-sm-3">
                              <!-- <div class="full f_logo">
                                 <img src="images/footer_img.png" alt="#" />
                              </div> -->
                              <div class="full">
                                 <p>Thank you for considering us for your room design needs. We look forward to working with you to create the space of your dreams.</p>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="full heading_footer">
                                 <h3>Menu</h3>
                              </div>
                              <div class="full">
                                 <ul class="footer_link">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">What we do</a></li>
                                    <li><a href="#">Contact us</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-3">
                              <div class="full heading_footer">
                                 <h3>Instagram</h3>
                              </div>
                              <div class="full">
                                 <ul class="footer_link_intas">
                                    <!-- <li>
                                       <span><img src="images/f_in_blog.png" alt="#" /></span>
                                       <span>Consectetur Adipiscing</span>
                                    </li>
                                     -->
                                     <li>@SujalAmatya_</li>
                                     <!-- 
                                    <li>
                                       <span><img src="images/f_in_blog2.png" alt="#" /></span>
                                       <span>Consectetur Adipiscing</span>
                                    </li> -->
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="full heading_footer">
                                 <h3>Subscribe</h3>
                              </div>
                              <div class="full footer_form">
                                 <form>
                                    <fieldset>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <div class="full">
                                                <input type="email" placeholder="Your Email" name="_email" />
                                             </div>
                                             <div class="full">
                                                <button>Subscribe</button>
                                             </div>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="row margin_top_50">
                                 <div class="col-md-10 offset-md-1">
                                    <div class="row">
                                       <div class="col-sm-4">
                                          <!-- <div class="full cont_info">
                                             <i class="fa fa-map-marker"></i>
                                             <span>Location</span>
                                          </div> -->
                                       </div>
                                       <div class="col-sm-4">
                                          <div class="full cont_info">
                                             <i class="fa fa-phone"></i>
                                             <span>Call +977 984123456</span>
                                          </div>
                                       </div>
                                       <div class="col-sm-4">
                                          <div class="full cont_info">
                                             <i class="fa fa-envelope" style="font-size: 17px;"></i>
                                             <span>sujal@gmail.com</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- cpy -->
      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="full center">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="full text_align_center">
                     <p>© 2022 All Rights Reserved by sujal amatya</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cpy -->
      <!-- jQuery (necessary for Bootstrap's JavaScript) -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <!-- wow animation -->
      <script src="js/wow.js"></script>
      <!-- menumaker -->
      <script src="js/menumaker.js"></script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
   </body>
</html>