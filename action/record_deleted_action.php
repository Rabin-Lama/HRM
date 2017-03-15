<?php
	session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../index.php");
      }
	$con=mysqli_connect("localhost","root","rabin") or die("error");
	mysqli_select_db($con,'dbms_project');
	$uid = $_SESSION['id'];
	$id = $_POST['hidden'];
    $date = date('Y-m-d h:i:s');
	$dpt = $_SESSION['dpt'];
	$dquery1 = "DELETE FROM table_employee WHERE id='$id'";
	mysqli_query($con,$dquery1);
	$dquery2 = "DELETE FROM table_login WHERE eid='$id'";
	mysqli_query($con,$dquery2);
    $wquery3 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Employee record deleted','$date')";
    mysqli_query($con,$wquery3);
	header("location:../dbms-action/$dpt/view_record.php?id=deleted")
?>