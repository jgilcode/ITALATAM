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
      <title>italatam</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <div class="wrapper">
      <!-- end loader -->
      <div class="sidebar">
         <!-- Sidebar  -->
         <nav id="sidebar">
            <div id="dismiss">
               <i class="fa fa-arrow-left"></i>
            </div>
            <ul class="list-unstyled components">
               <li class="active"> <a href="#">Home</a> </li>
               <li><a href="#about">About </a> </li>
               <li><a href="#work">Work</a> </li>
               <li><a href="#contact">Contact </a> </li>
            </ul>
         </nav>
      </div>
      <div id="content">
         <!-- header -->
         <header>
            <!-- header inner -->
            <div class="header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                           <div class="center-desk">
                              <div class="logo">
                                 <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         
         <!-- end banner -->
         <!-- about -->
         <div id="about"  class="about">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2><span class="blu">Subir archivos</span></h2>
                        <div class="col-xl-12">
                           <!--<form  enctype="multipart/form-data" action="ftp2.php" method="post" name="ftp2" >    
                              <input type="file"  id="archivo" name="archivo"/>
                              <input type="hidden" name="MAX_FILE_SIZE[]" value="1000" id="MAX_FILE_SIZE">
                              <input type="submit" name="submit" value="Subir" id="ftp2" />
                          </form>-->
                           <input id="fileupload" type="file" name="fileupload" /> 
                           <button id="upload-button" onclick="uploadFile()"> Upload </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end about -->
         <!-- choose  section -->
         <!--<div class="choose ">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Why <span class="blu"> Choose Us</span></h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="choose_bg">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="row">
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 padding_right0">
                              <ul class="easy">
                                 <li class="active"><a href="#">Easy to cutomize</a></li>
                                 <li><a href="#">More flexible</a></li>
                                 <li><a href="#">Clean mode</a></li>
                                 <li><a href="#">Ratinaready</a></li>
                              </ul>
                           </div>
                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 padding_left0">
                              <div class="choose_box">
                                 <i><img src="images/admin.png" alt="#"/></i>
                                 <h3> Ad Minim</h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>-->
         <!-- end choose  section -->
         <!-- work -->
         <!--<div id="work"  class="work">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class="col-md-7">
                     <div class="titlepage">
                        <h2>How To <span class="blu">Works it</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit </p>
                        <a class="read_more">Read More</a>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="work_img">
                        <figure><img src="images/work_img.jpg" alt="#"/></figure>
                     </div>
                  </div>
               </div>
            </div>
         </div>-->
         <!-- end work -->
         <!-- request -->
         <!--<div id="contact" class="request">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Request <span class="white">A call Back</span></h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <form id="request" class="main_form">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Full Name" type="type" name="Full Name"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="type" name="Email"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Message" type="type" Message="Name">Message </textarea>
                           </div>
                           <div class="col-md-12">
                              <button class="send_btn">Send</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div id="map"></div>
                  </div>
               </div>
            </div>
         </div>-->
         <!-- end request -->
         <!--  footer -->
         <footer>
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <div class="row">
                           <div class="col-md-5 col-sm-4">
                              <div class="address">
                                 <h3>Direccion </h3>
                              </div>
                              <ul class="location_icon">
                                 <li>Carrera 19B No. 82-46 Oficina 502 <br>
                                    EDIFICIO BRIKCA <br>
                                    BOGOTA D.C. - COLOMBIA <br>
                                 </li>
                                 <li>Phone: –316 398 213557 – 636 0963</li>
                              </ul>
                           </div>
                           <div class="col-md-4 col-sm-3">
                              <div class="address">
                                 <h3>Links</h3>
                                 <ul class="Menu_footer">
                                    <li class="active"> <a href="#">Home</a> </li>
                                    <li><a href="#about">About </a> </li>
                                    <!--<li><a href="#work">Work</a> </li>
                                    <li><a href="#contact">Contact </a> </li>-->
                                 </ul>
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-6">
                              <div class="address">
                                 <h3>Follow Us</h3>
                              </div>
                              <ul class="social_icon">
                                 <li><a href="#">Facebook <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Twitter<i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Linkedin<i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Youtube<i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                 <li><a href="#"> Instagram<i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     
                     <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                           
                           <!--<div class="col-md-7 col-sm-6">
                              <div class="address">
                                 <h3>Newsletter </h3>
                              </div>
                              <form class="bottom_form">
                                 <input class="enter" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                                 <button class="sub_btn">subscribe</button>
                              </form>
                           </div>
                        </div>-->
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>ITALATAM COLOMBIA S.A.S.</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {
               lat: 40.645037,
               lng: -73.880224
             },
           });
         
           var image = 'images/maps-and-flags.png';
           var beachMarker = new google.maps.Marker({
             position: {
               lat: 40.645037,
               lng: -73.880224
             },
             map: map,
             icon: image
           });
         }
      </script>

      <script>
      async function uploadFile() {
      let formData = new FormData(); 
      formData.append("file", fileupload.files[0]);
      await fetch('./ejemplo2.php', {
         method: "POST", 
         body: formData
      }); 
      alert('The file has been uploaded successfully.');
      }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>

