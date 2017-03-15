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
	$topic = $_POST['topic'];
	$dept = $_POST['department'];
	$content = $_POST['content'];
	$date = date('Y-m-d h:i:s');
	if($dpt=='admin')
		{
			$wquery1 = "INSERT INTO table_notices VALUES(NULL,'$topic','$content','$dept','$date')";
			mysqli_query($con,$wquery1);
			$wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Added new notice to $dept department','$date')";
			mysqli_query($con,$wquery2);
		}
	else
		{
			$wquery1 = "INSERT INTO table_notices VALUES(NULL,'$topic','$content','$dpt','$date')";
			mysqli_query($con,$wquery1);
			$wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Added new notice','$date')";
			mysqli_query($con,$wquery2);
		}
	header("location:../dbms-action/$dpt/add_notice.php?id=added");
?>