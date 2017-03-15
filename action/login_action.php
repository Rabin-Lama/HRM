<?php
	session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../index.php");
      }
	$con = mysqli_connect("localhost","root","rabin") or die("error");
	mysqli_select_db($con,'dbms_project');
	$un = $_POST['un'];
	$pw = $_POST['pw'];
	//$pw2 = md5($pw);
	$rquery = "SELECT * FROM table_login WHERE username='$un' and password='$pw'";
	$res = mysqli_query($con,$rquery);
	$data = mysqli_fetch_array($res);
	$uid = $data['id'];
	$dpt = $data['department'];
	$uname = $data['username'];
	$ujt = $data['job_title'];
	$counter = mysqli_num_rows($res); //counts the no of matching things obtained by the read query
	if($counter==1)
		{
			$_SESSION['id']=$uid;
			$_SESSION['dpt']=$dpt;
			$_SESSION['uname']=$uname;
			$_SESSION['ujt']=$ujt;
			header("location:../dbms-action/$dpt/home.php");
		}	
	else
		{
			header("location:../index.php?id=error");
		}	
?>