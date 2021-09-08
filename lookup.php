<!DOCTYPE html>
<?php
if(isset($_GET['submit']) ) {
	$name = $_GET['fullname'];
	$tel =  $_GET['tel'];
	$organization =  $_GET['organization'];
	$job =  $_GET['job'];
	$email =  $_GET['email'];
}else{
	$name = '';
	$tel =  '';
	$organization =  '';
	$job =  '';
	$email = '';
}

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Kanko - Lookup</title>
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
  <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
  <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
  <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
  <meta property="og:site_name" content="Creative Tim" />
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.mine209.css?v=1.0.0" type="text/css">
  
</head>

<body class="bg-default">
 
  <!-- Navbar -->
 
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
           
          </div>
        </div>
      </div>
     
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
          
              <div class="btn-wrapper text-center">
			    <div class="row">
                 <div class="col-lg-4 col-md-5">
					<img src="assets/img/no-image.png" width="100px" height="100px" style="border-radius:50%;">
					
				 </div>
				 <div class="col-lg-8 col-md-7 text-left">
					 <h1 class="text-lead"><?php  echo $name; ?></h1>
					<h3><?php  echo $job; ?>, <?php  echo $organization; ?></h3>
					<h3><?php  echo $tel; ?></h3>
					<h3><?php  echo $email; ?></h3>
					
				 </div>
				</div>	

              </div>
               
                  
            </div>
            <div class="card-body px-lg-5 py-lg-5">

				
				<center>	
					<a class="btn btn-primary" style="width:90%;" href="#!">Add Connection&nbsp;<i class="fa fa-forward fa-1x"></i></a>
				</center>
				<br />
				<center>	
					<a class="btn btn-default" style="width:90%;" href="#!">Add to Phonebook&nbsp;<i class="fa fa-forward fa-1x"></i></a>
				</center>
				<br />
				<center>	
					<a class="btn btn-success" style="width:90%;" href="tel:+233<?php  echo $tel; ?>">Call&nbsp;<i class="fa fa-forward fa-1x"></i></a>
				</center>
				<br />
				<center>	
					<a class="btn btn-primary" style="width:90%;" href="mailto:<?php  echo $email; ?>">Send mail&nbsp;<i class="fa fa-forward fa-1x"></i></a>
				</center>
				<br />
				<center>	
					<a class="btn btn-success" style="width:90%;" href="https://web.whatsapp.com/send?phone=<?php echo $tel; ?>&text=Hello+from+Kanko">Whatsapp&nbsp;<i class="fa fa-forward fa-1x"></i></a>
				</center>
				
							
              
                
                   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="" class="font-weight-bold ml-1" target="_blank">Kanko</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">Kanko</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">FAQ</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  
  
</body>
</html>