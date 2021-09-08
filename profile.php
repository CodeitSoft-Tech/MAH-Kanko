<!DOCTYPE html>
<?php
if(isset($_GET['submit']) ) {
	$name = $_GET['fullname'];
	$tel =  $_GET['tel'];
	$organization =  $_GET['organization'];
	$job =  $_GET['job'];
	$email =  $_GET['email'];
	$pid = rand(11111,99999);
	
	$from = "kanko.admin@copgbawe.org";
    //$to = "augustineeffahdanso@gmail.com";
     $to = $email;
    $subject = "Hello from Kanko";
    $message = '
	<html>
		<head>
		  <title>Thanks for signing up.!</title>
		</head>
		<body>
		  <p>Below are your login credentials</p>
		  <p>Profile ID: '.$pid.'</p>
		  <p>Email: '.$email.'</p>
		  <p>Login key: '.$tel.'</p>
		</body>
	</html>' ;
			$headers = "From: " . $from . "\r\n";
			$headers .= "Reply-To: ";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
   mail($to,$subject,$message, $headers);
   
			
	
}else{
	$name = $_GET['fullname'];
	$tel =  $_GET['tel'];
	$organization =  $_GET['organization'];
	$job =  $_GET['job'];
	$email =  $_GET['email'];
	
}

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Kanko - Profile</title>
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

<body class="bg-default" style="background-color: #2196F3 !important;">
 
  <!-- Navbar -->
 
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
           <div class="alert alert-info alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Great!</strong> You have added your bussiness details successsfully!</span><br />
				<span class="alert-text">Your login details has been sent to: <?php echo $email; ?>. You can change that later.</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<span class="alert-icon"><i class="ni ni-like-2"></i></span>
				<span class="alert-text"><strong>Now!</strong> You can print duplicate stickers of the QR code below and stick on any surface!</span><br />
				<span class="alert-text"><strong>OR,</strong> <a href="#!">Order our souvenir bundle</a> customized with your QR code.</span>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
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
                 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-left">
					<img src="assets/img/no-image.png" width="100px" height="100px" style="border-radius:50%;">
					
				<h1 class="text-lead"><?php  echo $name; ?></h1>
				<h3><?php  echo $job; ?></h3>
				<h3><?php  echo $organization; ?></h3>
				<h3><?php  echo $tel; ?></h3>
				<h3><?php  echo $email; ?></h3>
				 </div> 
				 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<button class="btn btn-primary btn-sm my-4" id="edit">Edit</button>
					<button class="btn btn-dafault btn-sm my-4" id="share">Share</button>
					<button class="btn btn-success btn-sm my-4" id="login">Login</button>
					
				 </div>
			    </div>   
				
               
              </div>
               
                  
            </div>
            <div class="card-body px-lg-5 py-lg-5">
             <?php
$f = "visit.php";
if(!file_exists($f)){
	touch($f);
	$handle =  fopen($f, "w" ) ;
	fwrite($handle,0) ;
	fclose ($handle);
}
 
include('libs/phpqrcode/qrlib.php'); 



if(isset($_GET['submit']) ) {
	$tempDir = 'temp/'; 
	$filename = $_GET['fullname'];
	$name = $_GET['fullname'];
	$tel =  $_GET['tel'];
	$organization =  $_GET['organization'];
	$job =  $_GET['job'];
	$email =  $_GET['email'];
	$codeContents = 'http://kanko.copgbawe.org/lookup.php?kc='.$tel.'&name='.$name.'&organization='.$organization.'&job='.$job.'email='.$email; 
	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}
?>
<div id="edit_field">
<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                      <input class="form-control" name="fullname" placeholder="Full Name" type="text" value="<?php echo @$name; ?>" required pattern="[a-zA-Z0-9 .]+">
                  </div>
                </div>
				<div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                      <input class="form-control" name="tel" placeholder="tel" type="text" value="<?php echo @$tel; ?>" required pattern="[0-9 .]+">
                  </div>
                </div>
				<div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
                    </div>
                      <input class="form-control" name="organization" placeholder="organization" value="<?php echo @$organization; ?>" type="text" pattern="[a-zA-Z0-9 .]+">
                  </div>
                </div>
				<div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                      <input class="form-control" name="job" placeholder="Job Title" value="<?php echo @$job; ?>" type="text" pattern="[a-zA-Z0-9 .]+">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                      <input class="form-control" name="email" placeholder="Email" type="email" value="<?php echo @$email; ?>" required>
                  </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary my-4">Save</button>
                </div>
              </form>
			  </div>
			  
<div id="login_field">
<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
				
				
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                      <input class="form-control" name="email" placeholder="Email" type="email" value="<?php echo @$email; ?>" required>
                  </div>
                </div>
				
				<div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                    </div>
                      <input class="form-control" name="key" placeholder="key" type="password" required pattern="[0-9 .]+">
                  </div>
                </div>
                <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary my-4">Login</button>
                </div>
              </form>
			  </div>			  
				<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
<div class="qr-field">
				<p style="text-align:center"></p>
				<center>
					<div class="qrframe" style="border:2px solid black; width:220px; height:220px;">
							<?php echo $name; ?>
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download Sticker</a>
				</center>
			</div>				
              
                
                   
            </div>
          </div>
          <!--<div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="add_account.php" class="text-light"><small>Create new account</small></a>
            </div>
          </div>-->
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
<?php
         include 'includes/scripts.html';
     ?>
<script>
$(document).ready(function(){
  $("#edit_field").hide(10);
  $("#login_field").hide(10);
	
  $("#edit").on('click', function() {
			
			$("#edit_field").show(500);
			
		
		});
		
  $("#login").on('click', function() {
			
			$("#login_field").show(500);
			
		
		});	
});		
</script>
  
</body>
</html>