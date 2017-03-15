<?php
	session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../index.php");
      }
	$con = mysqli_connect("localhost","root","rabin");
	mysqli_select_db($con,'dbms_project');
	$uid = $_SESSION['id'];
	$dpt = $_SESSION['dpt']; // department of the current user... needed for creating new account in same department. Not in others department.
	$fn = $_POST['first-name'];
	$pfn = strtolower($fn);
	$pw = md5($pfn);
	$mn = $_POST['middle-name'];
	$ln = $_POST['last-name'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$ms = $_POST['marital-status'];
	$add = $_POST['current-city'];
	$dept = $_POST['department']; //accessible only by admin level employee
	$phn = $_POST['phone'];
	$em = $_POST['email'];
	$jt = $_POST['job-title'];
	$es = $_POST['employment-status'];
	$doj = $_POST['date-of-joining'];
	$sal = $_POST['salary'];
	$date = date('Y-m-d h:i:s');
	if($dpt=='admin')
		{
			$wquery1 = "INSERT INTO table_employee VALUES(NULL,'$fn','$mn','$ln','$dob','$gender','$ms','$add','$phn','$em','$dept','$jt','$es','$doj','$sal')";
			mysqli_query($con,$wquery1);
			$wquery4 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Added new employee to $dept department','$date')";
			mysqli_query($con,$wquery4);
			$rquery3 = "SELECT * FROM table_employee WHERE first_name='$fn' AND middle_name='$mn' AND last_name='$ln' AND dob='$dob' AND department='$dept'"; 
		    $res3 = mysqli_query($con,$rquery3);		// the value of "eid" in table_login and "id" in table_employee has to be			  
		    $data3 = mysqli_fetch_array($res3);        // same for future use of deletion and other stuffs...
		    $eid = $data3['id'];
			$wquery2 = "INSERT INTO table_login VALUES(NULL,'$eid','$fn','$pw','$dept','$jt')";
			mysqli_query($con,$wquery2);
			header("location:../dbms-action/$dpt/add_record.php?id=ok");
		}
	else
		{
			$wquery1 = "INSERT INTO table_employee VALUES(NULL,'$fn','$mn','$ln','$dob','$gender','$ms','$add','$phn','$em','$dpt','$jt','$es','$doj','$sal')";
			mysqli_query($con,$wquery1);
			$wquery4 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Added new employee','$date')";
			mysqli_query($con,$wquery4);
			$rquery3 = "SELECT * FROM table_employee WHERE first_name='$fn' AND middle_name='$mn' AND last_name='$ln' AND dob='$dob' AND department='$dpt'"; 
		    $res3 = mysqli_query($con,$rquery3);		// the value of "eid" in table_login and "id" in table_employee has to be			  
		    $data3 = mysqli_fetch_array($res3);        // same for future use of deletion and other stuffs...
		    $eid = $data3['id'];
			$wquery2 = "INSERT INTO table_login VALUES(NULL,'$eid','$fn','$pw','$dpt','$jt')";
			mysqli_query($con,$wquery2);
			header("location:../dbms-action/$dpt/add_record.php?id=ok");
		}
?>