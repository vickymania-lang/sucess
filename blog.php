	<?php 	

$url = 'https://eschool-ng.com/free-eSchool/portal/fetchdata_bonavista.php';
$request_url = $url;

$curl = curl_init($request_url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response= curl_exec($curl);
curl_close($curl);


// echo $response;

$json = $response



?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Bonavista International Schools</title>

    <!-- CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/animate.min.css">

  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
</head>
<body>
  <style type="text/css">
    .fa-facebook{
      background-color: blue;
    }
    .fa-twitter{
      background-color: #1DA1F2;
    }
    .fa-instagram{
      background-color:#C8232C;
    }
    .fa-linkedin{
      background-color:  #007bff;
    }
    .fa-share-alt{
      color: black;
      background-color: white !important;
    }
    .blog-title{
      color: green;
      font-size: 20px;
      font-weight: 700;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
  </style>

    <!-- TOP INFO BAR    -->
    <div class=" row top-info">
      <div class="col-md-5">
        <i class="fa fa-envelope-o"></i>
        <a href="mailto:bonavistainternationalschools@gmail.com">
          bonavistainternationalschools@gmail.com
        </a>
      </div>
      <div class="col-md-4">
        <i class="fa fa-phone"></i>
        09129259803,09121347566, 08056440604
      </div>
      <div class="col-md-3">
        <i class="fa fa-lock"></i>
       <a target="_blank" href="https://eschool-ng.com/login.php">e-school Portal Login</a>
      </div>
  </div>

    <!-- NAV BAR -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="navbar-brand">
          <a  href="index.html"><img src="images/bonav.png" width="170%"  alt="Bonavista Internation School"></a> <a class="navbar-brand nav-logo" href="index.html">Bonavista International Schools </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Academics</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="classes.html">Classes</a></li>
                  <li><a class="dropdown-item" href="curriculum.html">Curriculum</a></li>
                  <!-- <li><a class="dropdown-item" href="desireToLearn.html">Desire to learn</a></li> -->
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#"role="button" data-bs-toggle="dropdown">Admin</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="chairman.html">Chairman</a></li>
                  <li><a class="dropdown-item" href="executive-director.html">Executive Director</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  href="#"role="button" data-bs-toggle="dropdown">Admissions</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="admission.html">Admission Process</a></li>
                  <li><a class="dropdown-item" href="payment.html">Fees & Payment</a></li>
                </ul>
              </li>
       
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="blog.php">Blog</a>
              </li>
            </ul>            
          </div>
        </div>
    </nav>
    <!-- NAV BAR ENDS -->


        <!-- Start Bradcaump area -->
        <!-- <div class="ht__bradcaump__area"> -->
          <div style="background-image: url(images/bon4.jpg);" class="nav-hero mb-5">
            <div class="nav-hero-content">  Our Blog</div>
          </div>
           
		<!-- Start Blog Grid Area -->
    <div class="container my-5">
        		<div class="row">
            <!-- Start Blogs -->
        			<div class="col-lg-8 ">
                      Blog Post
                			<!-- Start Single BLog -->
                			<div id="blogData">
                			    
                			</div>
		                            <?php 
										echo "
										<script>
										let ajax = $json
										</script>"
									?>
     
    <script>

    
    let blogData = document.getElementById('blogData');
    
    let blog = ajax.slice();
	console.log(blog)
    blog.length = 5
        blog.map((post, i) => {
            
            blogData.innerHTML += `
		                  <div class="col-12 col-lg-10 col-md-6 my-4 blog-single" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);padding:0">
        							<a href='blog-details.php?id="${post[0]}"'>
        									<img src="https://eschool-ng.com/free-eSchool/portal/news_image/${post[5]}"/ width="100%">
        								</a>
        							<div class="blog__content p-4">
        								<h2 class="blog-title"><a href='blog-details.php?id="${post[0]}"'>${post[1]}</a></h2>
        								<p>
        									<i style="color:black; background-color:white; margin-right:5px" class="fa fa-clock-o"></i>Date : ${post[6]}
                          </li>
        								</p>
        								<p>${post[3].substring(0, 150)}</p>
        								<div class="blog__btn flex" style="width:100%">
        									<a class="btn btn-warning" href='blog-details.php?id="${post[0]}"'>Read More</a>
        									<div class="blog__share" style='width:80%'>
        										<a href="#"><i class="fa fa-share-alt"></i></a>
        										<div class="sosmed-icon d-inline-flex">
                            <i class="fa fa-facebook"></i>
                           <i class="fa fa-twitter"></i>
                           <i class="fa fa-instagram"></i>
                            <i class="fa fa-linkedin"></i>
                        </div>
        									</div>
        								</div>
        							</div>
        					</div>
            `
        })
    </script>

        				</div>
        				<!-- End Blogs -->
        			<!-- Start Sidebar -->
        			<div class="col-md-4">
        				<div class="sidebar__widgets sidebar--right">

        					<!-- Single Widget -->
        					<div class="single__widget search">
        						<h4>Search</h4>
        						<form action="#">
        							<input type="text" placeholder="Search keyword">
        							<button type="submit"><i class="fa fa-search"></i></button>
        						</form>
        					</div>
        					<!-- End Widget -->

                <div class="single__widget about" id="widget">
                  <script type="text/javascript">
                    let widgetData = document.getElementById('widget')
    
                    let blogWidget = ajax.slice()
                    blogWidget.length = 5
                    blogWidget.map((post, i) => {
            
                    widgetData.innerHTML +=`
                    <div class='single-widget my-3' style='box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);'>
                      <a href="blog-details.php?id=${post[0]}">
                          <img src="https://eschool-ng.com/free-eSchool/portal/news_image/${post[5]}"/ width="100%">
                        </a>
                    </div>
                    `

                  });
                  </script>
                </div>
        					<!-- End Widget -->

        				

        					<!-- Single Widget -->    				

        				</div>
        			</div>
        			<!-- End Sidebar -->
        		</div>
          </div>

		<!-- End Blog Grid Area -->

		<!-- Start Subscribe Area -->
		<section class="bcare__subscribe bg-image--7 subscrive--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-lg-12">
						<div class="subscribe__inner">
							<!-- <h2 class="top-title">Subscribe To Our Newsletter</h2> -->
							<!-- <p style="color: white"></p> -->
                            <!-- <div class="newsletter__form">
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="#" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail" required="">
                                                </div>
                                                 real people should not fill this in and expect good things - do not remove this or risk form bot signups
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="Join Now" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>        
                            </div> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Subscribe Area -->

      <!-- FOOTER AREA -->
      <footer>
          <div class="row">
            <div class="col-md-4">
              <div class="footer-logo">
                <img src="images/bonav.png"/>
                <div class="footer-logo-title">
                  <span class="logo-title">Bonavista International School </span> </br>
                  <!-- <span class="moto">"The Earth is the Lord's...."- psalm 2</span> -->
                </div>
              </div>         
              <div class="f-address">
               <p > 19/21 Yemi Ibiyemi Street Off Palace Road, Omitoro Ijede Road, Ikorodu Lagos.
                <p>
                  <a href="mailto:bonavistaInternationalschools@gmail.com">
                    bonavistaInternationalschools@gmail.com
                    </a>
                </p>
                <p>09129259803, 09121347566, 08056440604</p>
                <div class="footer-title"></div>
              </div>
            </div>
            <div class="col-md-4">
                <div class="footer-title">Quick Link</div>
                <ul>
                  <li>
                    <a href="">Home</a>
                  </li>
                  <li>
                    <a href="">About Us</a>
                  </li>
                  <li>
                    <a href="">Admissions</a>
                  </li>
                  <li>
                    <a href="">Academics</a>
                  </li>
                  <li>
                    <a href="">Gallery</a>
                  </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="footer-title">Contact Us</div>
                <form class="row">
                  <div class="col-md-12 my-2">
                    <input type="text" id="name" placeholder="Full name" class="form-control">
                  </div>
                  <div class="col-md-12 my-2">
                    <input type="email" id="email" placeholder="example@email.com" class="form-control">
                  </div>
                  <div class="col-md-12 my-2">
                    <textarea placeholder="Write message" name="message" id="message"  rows="2" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12 my-2">
                    <button class="btn btn-success form-control" >Send Message</button>
                  </div>
                </form>
            </div>
          </div>

        
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex copy" style="color: #ffffff;">© 2022 Bonavista International School. All rights reserved. Designed by <a
								href="https://akisolutions.com.ng" target="_blank">AKI Solutions</a></p>
					</div>
				</div>
			</div>
	

	</div>
      </footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/script.js"></script>
    </body>
    </html>