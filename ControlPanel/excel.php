<html>
<head>

</head>
<body alink="#00FF66" link="#00CC00">

<?php




function listOfPendingAdmissions()
	{
    include("conn.php");
    include("excelwriter.class.php");
	unlink('admissions/pending.xls');
	$excel=new ExcelWriter("admissions/pending.xls");
	if($excel==false)	
	echo $excel->error;
	
	$myArr=array("Name","Address","Mobile No","Email Id","Message");
	$excel->writeLine($myArr);
	
	$qry=mysqli_query($conn,"SELECT c.name,c.email, c.contact, c.address, c.message
							  FROM tbl_enquiry AS c where status='Pending'") or die("Query Not Executed");
		if($qry!=false)
		{
			$i=1;
			while($res=mysqli_fetch_array($qry))
			{
				$myArr=array($res['name'],$res['address'],$res['contact'],$res['email'],$res['message']);
		        $excel->writeLine($myArr);
				$i++;
			}
		}
	}
	
function listOfProcessedAdmissions()
	{
    include("conn.php");
    include("excelwriter.class.php");
	unlink('admissions/processed.xls');
	$excel=new ExcelWriter("admissions/processed.xls");
	if($excel==false)	
	echo $excel->error;
	
	$myArr=array("Name","Address","Mobile No","Email Id","Message");
	$excel->writeLine($myArr);
	
	$qry=mysqli_query($conn,"SELECT c.name,c.email, c.contact, c.address, c.message
							  FROM tbl_enquiry AS c where status='Processed'") or die("Query Not Executed");
		if($qry!=false)
		{
			$i=1;
			while($res=mysqli_fetch_array($qry))
			{
				$myArr=array($res['name'],$res['address'],$res['contact'],$res['email'],$res['message']);
		        $excel->writeLine($myArr);
				$i++;
			}
		}
	}
?>
</body>
</html>