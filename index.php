
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MediFine</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <link rel="stylesheet" href="style2.css">

</head>

    <body>
      <header id="menu-jk">
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; "><img src="logo.jpg" alt="Bootstrap">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                            <li><a href="signin.php">Login</a></li> 
                            <li><a href="signup.php">Signup</a></li> 
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </header>
<section>
    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/home2.jpg" alt="Second slide">
                    <div class="carousel-cover"></div>
                
                </div>
                
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/home3.jpg" alt="Third slide">
                      <div class="carousel-cover"></div>
              
                </div>

                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/slider/home.jpg" alt="First slide">
                    <div class="carousel-cover"></div>
                
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

</section>

<div class="container-fluid">
        <div class="side-nav">
            <nav>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
                    <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
                </ul>
            </nav>
        </div>

    </div>
   
    <footer>
        <div class="footer-wrap">
            <div class="container first_class">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3>BE THE FIRST TO KNOW</h3>
                        <p>Get all the latest information on  Triedge Services, Events, Jobsand Fairs. Sign up for our newsletter today.</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <form class="newsletter">
                            <input type="text" placeholder="Email Address"> 
                            <button class="newsletter_submit_btn" type="submit"><i class="fa fa-paper-plane"></i></button>  
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="col-md-12">
                            <div class="standard_social_links">
                                <div>
                                    <li class="round-btn btn-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="round-btn btn-linkedin"><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                    <li class="round-btn btn-twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="round-btn btn-instagram"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    <li class="round-btn btn-whatsapp"><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                    <li class="round-btn btn-envelop"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                </div>
                            </div>  
                        </div>
                        <div class="clearfix"></div>
                            <div class="col-md-12"><h3 style="text-align: right;">Stay Connected</h3></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second_class">
                <div class="container second_class_bdr">
                    <div class="row">
                        <div class="col-md-2 col-sm-6">
                            <h3>Quick  Links</h3>
                            <ul class="footer-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="albums.html">Client Albums</a></li>
                                <li><a href="#">Book Online</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3>Apps</h3>
                            <ul class="footer-links">
                                <li><a href="#">ios</a></li>
                                <li><a href="#">Android</a></li>
                                <li><a href="#">Lightroom</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3>Community</h3>
                            <ul class="footer-links">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">B-WEB Films</a></li>
                                <li><a href="#">Photographer Stories</a></li>
                                <li><a href="#">Ambassador</a></li>
                                <li><a href="#">Forum</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3>Company</h3>
                            <ul class="footer-links">
                                <li><a href="#">Flickr</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Refer-a-Friend</a></li>
                                <li><a href="#">Gift of B-WEB</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Press Inquiries</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3>Product</h3>
                            <ul class="footer-links">
                                <li><a href="#">Sell</a></li>
                                <li><a href="#">Share</a></li>
                                <li><a href="#">Store</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Plans</a></li>
                                <li><a href="#">Catalog</a></li>
                                <li><a href="#">perks</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3>Support</h3>
                            <ul class="footer-links">
                                <li><a href="#">Support Center</a></li>
                                <li><a href="#">Contact a Hero</a></li>
                                <li><a href="#">Product Feedback</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                    <div class="copyright"> Copyright &copy; 2023 | All Rights Reserved by <a href="#">Angry-poops</a> Pvt. Ltd.</div>
                </div>
            </div>
        </div>
    </footer>  
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Font Awesome 5 links-->
    <script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>
    

</html>