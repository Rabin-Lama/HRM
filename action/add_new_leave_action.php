<?php
	session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../index.php");
      }
	$con = mysqli_connect("localhost","root","rabin");
	mysqli_select_db($con,'dbms_project');
	$uid = $_SESSION['id'];
	$dpt = $_SESSION['dpt'];
	$by = $_POST['leave-requested-by'];
	$lsub = $_POST['leave-subject'];
	$dept = $_POST['department'];
	$ldays = $_POST['days'];
	$sts = $_POST['action'];
	$date = date('Y-m-d h:i:s');
	if($dpt=='admin')
		{
			$wquery1 = "INSERT INTO table_leave VALUES(NULL,'$lsub','$by','$ldays','$sts','$dept','$date')";
			mysqli_query($con,$wquery1);
			$wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Added new leave record from $dept department','$date')";
			mysqli_query($con,$wquery2);
		}
	else
		{
			$wquery1 = "INSERT INTO table_leave VALUES(NULL,'$lsub','$by','$ldays','$sts','$dpt','$date')";
			mysqli_query($con,$wquery1);
			$wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Added new leave record','$date')";
			mysqli_query($con,$wquery2);
		}
	header("location:../dbms-action/$dpt/add_leave.php?id=added")
?>