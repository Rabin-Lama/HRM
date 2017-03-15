<?php
	session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../index.php");
      }
	$con=mysqli_connect("localhost","root","rabin") or die("error");
	mysqli_select_db($con,'dbms_project');
	$uid = $_SESSION['id'];
	$id = $_GET['id'];
	$dpt = $_SESSION['dpt'];
    $date = date('Y-m-d h:i:s');
	$dquery1 = "DELETE FROM table_leave WHERE id='$id'";
	mysqli_query($con,$dquery1);
    $wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Leave record deleted','$date')";
    mysqli_query($con,$wquery2);
	header("location:../dbms-action/$dpt/view_leave_records.php?id=deleted")
?>