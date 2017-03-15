<?php
	session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../index.php");
      }
	$con=mysqli_connect("localhost","root","rabin") or die("error");
	mysqli_select_db($con,'dbms_project');
	$uid = $_SESSION['id'];
	$dpt = $_SESSION['dpt'];
	$no = $_POST['no-of-records'];
	header("location:../dbms-action/$dpt/view_record.php?no=$no")
?>