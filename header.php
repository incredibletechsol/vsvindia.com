<header id="site-header">
	<div id="site-header-inner" class="container">                    
		<div class="wrap-inner clearfix">
			<div id="site-logo" class="clearfix">
				<div id="site-log-inner">
					<a href="index.php" rel="home" class="main-logo">
						<img src="assets/img/logo.png" alt="Vishnu Sangeet Vidyalaya" width="186" height="39" data-retina="assets/img/logo.png" data-width="186" data-height="39">
					</a>
				</div>
			</div><!-- /#site-logo -->

			<div class="mobile-button">
				<span></span>
			</div><!-- /.mobile-button -->

			<nav id="main-nav" class="main-nav">
				<ul id="menu-primary-menu" class="menu">
				<?php
				$pageName = basename($_SERVER['PHP_SELF']);
				if($pageName == "index.php")
					{
					echo "<li class='menu-item current-menu-item'><a href='index.php'>HOME</a></li>";
                    echo "<li class='menu-item menu-item-has-children'><a href='#'>ABOUT US </a>";
                    echo "<ul class='sub-menu'>";
                    	echo "<li class='menu-item'><a href='aboutus.php'>About Us</a></li>";
                    	echo "<li class='menu-item'><a href='vsvhistory.php'>Our History</a></li>";
                    	echo "<li class='menu-item'><a href='vsvevents.php'>Other Significant Events</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class='menu-item'><a href='testimonial.php'>TESTIMONIALS</a></li>";
                    echo "<li class='menu-item'><a href='admission.php'>ADMISSION</a></li>";
                    echo "<li class='menu-item'><a href='gallery.php'>GALLERY</a></li>";
                    echo "<li class='menu-item'><a href='contact.php'>CONTACT</a></li>";
					}
				if($pageName == "aboutus.php" || $pageName == "vsvhistory.php" || $pageName == "vsvevents.php")
					{
					echo "<li class='menu-item'><a href='index.php'>HOME</a></li>";
                    echo "<li class='menu-item menu-item-has-children current-menu-item'><a href='#'>ABOUT US </a>";
                    echo "<ul class='sub-menu'>";
                    	echo "<li class='menu-item'><a href='aboutus.php'>About Us</a></li>";
                    	echo "<li class='menu-item'><a href='vsvhistory.php'>Our History</a></li>";
                    	echo "<li class='menu-item'><a href='vsvevents.php'>Other Significant Events</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class='menu-item'><a href='testimonial.php'>TESTIMONIALS</a></li>";
                    echo "<li class='menu-item'><a href='admission.php'>ADMISSION</a></li>";
                    echo "<li class='menu-item'><a href='gallery.php'>GALLERY</a></li>";
                    echo "<li class='menu-item'><a href='contact.php'>CONTACT</a></li>";
					}	
				if($pageName == "testimonial.php")
					{
					echo "<li class='menu-item'><a href='index.php'>HOME</a></li>";
                    echo "<li class='menu-item menu-item-has-children'><a href='#'>ABOUT US </a>";
                    echo "<ul class='sub-menu'>";
                    	echo "<li class='menu-item'><a href='aboutus.php'>About Us</a></li>";
                    	echo "<li class='menu-item'><a href='vsvhistory.php'>Our History</a></li>";
                    	echo "<li class='menu-item'><a href='vsvevents.php'>Other Significant Events</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class='menu-item current-menu-item'><a href='testimonial.php'>TESTIMONIALS</a></li>";
                    echo "<li class='menu-item'><a href='admission.php'>ADMISSION</a></li>";
                    echo "<li class='menu-item'><a href='gallery.php'>GALLERY</a></li>";
                    echo "<li class='menu-item'><a href='contact.php'>CONTACT</a></li>";
					}		
				if($pageName == "admission.php")
					{
					echo "<li class='menu-item'><a href='index.php'>HOME</a></li>";
                    echo "<li class='menu-item menu-item-has-children'><a href='#'>ABOUT US </a>";
                    echo "<ul class='sub-menu'>";
                    	echo "<li class='menu-item'><a href='aboutus.php'>About Us</a></li>";
                    	echo "<li class='menu-item'><a href='vsvhistory.php'>Our History</a></li>";
                    	echo "<li class='menu-item'><a href='vsvevents.php'>Other Significant Events</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class='menu-item'><a href='testimonial.php'>TESTIMONIALS</a></li>";
                    echo "<li class='menu-item current-menu-item'><a href='admission.php'>ADMISSION</a></li>";
                    echo "<li class='menu-item'><a href='gallery.php'>GALLERY</a></li>";
                    echo "<li class='menu-item'><a href='contact.php'>CONTACT</a></li>";
					}
				if($pageName == "gallery.php")
					{
					echo "<li class='menu-item'><a href='index.php'>HOME</a></li>";
                    echo "<li class='menu-item menu-item-has-children'><a href='#'>ABOUT US </a>";
                    echo "<ul class='sub-menu'>";
                    	echo "<li class='menu-item'><a href='aboutus.php'>About Us</a></li>";
                    	echo "<li class='menu-item'><a href='vsvhistory.php'>Our History</a></li>";
                    	echo "<li class='menu-item'><a href='vsvevents.php'>Other Significant Events</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class='menu-item'><a href='testimonial.php'>TESTIMONIALS</a></li>";
                    echo "<li class='menu-item'><a href='admission.php'>ADMISSION</a></li>";
                    echo "<li class='menu-item current-menu-item'><a href='gallery.php'>GALLERY</a></li>";
                    echo "<li class='menu-item'><a href='contact.php'>CONTACT</a></li>";
					}
				if($pageName == "contact.php")
					{
				    echo "<li class='menu-item'><a href='index.php'>HOME</a></li>";
                    echo "<li class='menu-item menu-item-has-children'><a href='#'>ABOUT US </a>";
                    echo "<ul class='sub-menu'>";
                    	echo "<li class='menu-item'><a href='aboutus.php'>About Us</a></li>";
                    	echo "<li class='menu-item'><a href='vsvhistory.php'>Our History</a></li>";
                    	echo "<li class='menu-item'><a href='vsvevents.php'>Other Significant Events</a></li>";
                    echo "</ul>";
                    echo "</li>";
                    echo "<li class='menu-item'><a href='testimonial.php'>TESTIMONIALS</a></li>";
                    echo "<li class='menu-item'><a href='admission.php'>ADMISSION</a></li>";
                    echo "<li class='menu-item'><a href='gallery.php'>GALLERY</a></li>";
                    echo "<li class='menu-item current-menu-item'><a href='contact.php'>CONTACT</a></li>";
					}	
				?>
				</ul>
			</nav><!-- /#main-nav -->
		</div><!-- /.wrap-inner -->                    
	</div><!-- /#site-header-inner -->
</header><!-- /#site-header -->