<?php 

session_start();

	include("connection.php");
	include("function.php");
	$user_data = check_login($con);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    	<title>Bus - Home Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

 

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		<style>
			pre {border-width: 0px;
				background-color:#ADD8E6;
			}
			body {background-color: #ADD8E6;
			}
		</style>
    </head>

<body>


    <section class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <img src="img/logo.png" height="150" width="100" >
                    </div>
                </div>
                <div class="col-md-6.9">
                    <div class="page-direction-button">
                        <a href="logout.php">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <center><h1>HELLO  <?php echo $user_data['user_name'];?> </h1></center>
                        <h2> Let's make your journey comfortable and enjoyable by booking a bus from our website.</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/pune.png" alt="" height="350" width="500">
                </div>
                <div class="col-md-6">
                    <img src="img/mumbai.png" alt="" height="350" width="500">
                </div>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="primary-button">
									<pre><center><a href="booking.php">BOOKING</a></center></pre>
								</div> 
							</div>
						</div>
					</div>
                <div class="col-md-4">
                    <h6>Best Routes while traveling</h6>
                    <p>We use the best routes to make your journey  comfortable.</p>
                </div>
                <div class="col-md-4">
                    <h6>Buses</h6>
                    <p>We use the best bus for you.</p>
                </div>
                <div class="col-md-4">
                    <h6>Booking</h6>
                    <p>Smooth booking system</p>
                </div>
            </div>
        </div>
    </section>






    



    <footer>
        <div class="container">
            <div class="row">
               
                <div class="col-md-12">
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>


    


</body>
</html>