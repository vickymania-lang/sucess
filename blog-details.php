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
  	.fa{
  		margin-right: 2px !important;
  	}
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
    .list{
    	list-style-type: none;
    	width: 100%;
    }
   .list li{
    	display: inline-block;
    	margin-right: 2%;
    }
    .btn-warning{
    	margin-top: 2%;
    }
    article{
    	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    	width: 98%;
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
        09129259803, 09121347566, 08056440604
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
          <a  href="index.html"><img src="images/bonav.png" width="170%"  alt="Bonavista International School"></a> <a class="navbar-brand nav-logo" href="index.html">Bonavista International Schools </a>
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

<div class="my-5"></div>
		<!-- Start Blog Grid Area -->
		<div class="dcare__blog__list bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-9">
        				<div class="page__blog__details">
        					<article id="blog__inner" class="dacre__blog__details">
        					
        					</article>

<?php 
    echo "
    <script>
    let ajax = $json
    </script>"
     ?>
<?php 
    echo "
    <script>
        let blogId =" .  $_GET['id'].
        "; console.log(blogId)
    </script>"
     ?>
     
    <script>
    // console.log(ajax[0][10])
    
    // let dataDiv = document.getElementById('dataDiv')
    let blogDetail = document.getElementById('blog__inner')
    
    let blogs = ajax.slice()
    let blogInfo = blogs.find(item => item[0] === blogId )
    
    console.log(blogInfo)
    // blogs.map((item, index) => {
       
        // blogs.map((post, i) => {
            
            blogDetail.innerHTML += `
            	<div class="blog__thumb">
					<img src="https://eschool-ng.com/free-eSchool/portal/news_image/${blogInfo[5]}" alt="blog images" width="100%">
				</div>
            <div class="blog__inner p-4">
				<h2 class="blog-title">${blogInfo[1]}</h2>
				<ul class='list'>
					<li> Post By <a href="#">${blogInfo[4]}</a></li>
					<i style="color:black; background-color:white; margin-right:2px" class="fa fa-clock-o"></i><li>${blogInfo[6]}</li>
				</ul>

				<p>
				    ${blogInfo[3]}
				</p>
			</div>
            `
        // })
    // })
    </script>
							<!-- Start Latest Blog -->
							<div class="blog__latest">
								<h4 class="title__line--3">Latest Blog</h4>
								<div id="blogData" class="row">

									<!-- Start Single BLog -->
		              <?php 
    echo "
    <script>
    // let ajax = $json
    </script>"
     ?>
     
    <script>
    // console.log(ajax[0][10])
    
    let dataDiv = document.getElementById('dataDiv')
    let blogData = document.getElementById('blogData')
    let blog = ajax.slice()
    blog.length = 4
    // blog.map((item, index) => {
       
        blog.map((post, i) => {
            
            blogData.innerHTML += `
                <div class="col-12 col-lg-6 col-md-6 sm-mt-40 my-4" style="padding:0">
		                                <article class="blog__single blog__item">
		                                    <div class="blog__thumb">
		                                        <a href="">
		                                            <img src="https://eschool-ng.com/free-eSchool/portal/news_image/${post[5]}" width='100%'>
		                                        </a>
		                                    </div>
		                                    <div class="blog__content p-4">
		                                        <h2 class='blog-title'><a href="">${post[1]}</a></h2>
		                                        <ul class="bl__post">
		                                            <li> Blog : Post By ${post[4]}</li>
		                                            <li>Date : ${post[5]}</li>
		                                        </ul>
		                                        <p>${post[3].substring(0, 150)}</p>
		                                        <div class="blog__btn flex" style="width:100%">
		                                    <div style="width:30%">
        									<a class="btn btn-warning " href='blog-details.php?id="${post[0]}"'>Read More</a>
        									</div>
        									<div class="blog__share" style='width:70%;'>
        										<a href="#"><i class="fa fa-share-alt"></i></a>
        										<div class="sosmed-icon d-inline-flex">
                            <i class="fa fa-facebook"></i>
                           <i class="fa fa-twitter"></i>
                           <i class="fa fa-instagram"></i>
                            <i class="fa fa-linkedin"></i>
                        </div>
        									</div>
		                                    </div>
		                                </article>
		                            </div>
            `
        })
    // })
    </script>
		                            
								</div>
							</div>
							<!-- End Latest Blog -->



        				</div>
        			</div>
        			<!-- End BLog Details -->
        			<!-- Start Sidebar -->
        			<div class="col-lg-3">
        				<div class="sidebar__widgets sidebar--right">

        					<!-- Single Widget -->
        					<!-- <div class="single__widget search">
        						<h4>Search</h4>
        						<form action="#">
        							<input type="text" placeholder="Search keyword">
        							<button type="submit"><i class="fa fa-search"></i></button>
        						</form>
        					</div> -->
        					<!-- End Widget -->
        					<h4>Recent Posts</h4>
        					<!-- Single Widget -->
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
        					<div class="single__widget recent__post">
        						<h4>Recent Posts</h4>
								<ul id="dataUl">

	                            <?php 
    echo "
    <script>
    let recentPost = $json
    </script>"
     ?>
    <script>
    // console.log(ajax[0][10])
    
    let dataUl = document.getElementById('dataUl')
    
    let otherPosts = recentPost
    // otherPosts.map((item, index) => {
        // console.log(item)
        otherPosts.slice(4, 7).map((post, i) => {
            dataUl.innerHTML += `
                <li>
					<a href=""><img src="https://eschool-ng.com/free-eSchool/portal/news_image/${post[6]}" alt="post images"></a>
					<div class="post__content">
						<h6 class=''><a href="">${post[1]}</a></h6>
						<span class="date"><i class="fa fa-calendar"></i>${post[5]}</span>
					</div>
				</li>
            `
        })
    // })
    </script>
									

								</ul>
        					</div>
        					<!-- End Widget -->       			

        				</div>
        			</div>
        			<!-- End Sidebar -->
        		</div>
        	</div>
        </div>
		<!-- End Blog Grid Area -->

		

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
      </footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/script.js"></script>
    </body>
    </html>