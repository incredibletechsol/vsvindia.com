<?php
$pageName = basename($_SERVER['PHP_SELF']);
if($pageName == "index.php")
	{
	echo "WELCOME TO VISHNU SANGEET VIDYALAYA";
	}
if($pageName == "gallery.php")
	{
	echo "VSV | Gallery";
	}	
if($pageName == "aboutus.php")
	{
	echo "VSV | About Us";
	}
if($pageName == "testimonial.php")
	{
	echo "VSV | Testimonials";
	}
if($pageName == "admission.php")
	{
	echo "VSV | Admission";
	}	
if($pageName == "contact.php")
	{
	echo "VSV | Contact Us";
	}	
if($pageName == "vsvhistory.php")
	{
	echo "VSV | Our History";
	}
if($pageName == "vsvevents.php")
	{
	echo "VSV | Other Significant Events";
	}	
?>