<?php
	session_start();
	$con=mysqli_connect("localhost","root","rabin") or die("error");
	mysqli_select_db($con,'dbms_project');
	$un=$_POST['un'];
	$pw=$_POST['pw'];
	$rquery="SELECT * FROM table_employee_login WHERE username='$un' and password='$pw'";
	$res=mysqli_query($con,$rquery);
	$data=mysqli_fetch_array($res);
	$uid=$data['id'];
	$counter = mysqli_num_rows($res); //counts the no of matching things obtained by the read query
	if($counter==1)
		{		
			$_SESSION['id']=$uid;
			header("location:../dashboard/employee_dashboard.php");
		}
	else
		{
			header("location:../index.php?id=1");
		}	
?>