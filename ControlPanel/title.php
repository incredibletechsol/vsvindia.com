<?php
$pageName = basename($_SERVER['PHP_SELF']);
if($pageName == "index.php")
	{
	echo "Admin : Vishnu Sangeet Vidyalaya";
	}
if($pageName == "enquiries.php")
	{
	echo "Pending Admissions";
	}	
if($pageName == "processedenq.php")
	{
	echo "Processed Admissions";
	}		
if($pageName == "gallery.php")
	{
	echo "Gallery";
	}	
?>