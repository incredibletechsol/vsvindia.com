<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fsulting - Financial Consulting Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->


    <!-- Google font (font-family: 'Poppins', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet">
    <!-- Google font (font-family: 'Work Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style1.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer js -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
	
	<style>

.imgcls {
width : 150px;
height : 250px;
}
</style>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Add your site or application content here -->

   
    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">

 

        <!-- Page Conent -->
        <main class="page-content">

            <!-- Portfolio Area -->
            <div class="portfolio-area bg--grey section-padding--xlg">
                <div class="container">
                    <di	v class="row portfolio-gallery-active mt-30-reverse">
						<?php
							include('conn.php');
							$result = mysqli_query($conn,"SELECT * FROM tbl_gallery order by photoid desc") or die('Query Not Executed');
							$count = mysqli_num_rows($result);
							if($count > 0) {
								while($row = mysqli_fetch_array($result))
								{
									echo "<div class='col-lg-4 col-md-6 col-12 portfolio-item'>";
									echo "<div class='portfolio'>";
										echo "<div class='portfolio-image'>";
											echo "<img src='gallery/$row[1]' alt='$row[2]' class='imgcls'>";
										echo "</div>";
										echo "<div class='portfolio-content'>";
											echo "<h5><a href='portfolio-details.html'>$row[2]</a></h5>";
										echo "</div>";
										echo "<a href='gallery/$row[1]' class='portfolio-zoomicon'><i class='pe-7s-search'></i></a>";
									echo "</div>";
								echo "</div>";
								}
							}
							else
								echo "<h4>No Photos Available</h4>";
							
						?>
                       

                    </div>
                </div>
            </div>
            <!--// Portfolio Area -->


        </main>
        <!-- //Page Conent -->


    </div>
    <!-- //Main wrapper -->

    <!-- JS Files -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/active.js"></script>
    <script src="js/scripts.js"></script>
</body>


</html>