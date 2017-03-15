<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $dpt = $_SESSION['dpt'];
    $val = $_POST['select'];
    if($val=='all')
    	{
    		header("location: ../dbms-action/$dpt/view_leave_records.php?val=$val");
    	}
    else if($val=='accepted')
    	{
    		header("location: ../dbms-action/$dpt/view_leave_records.php?val=$val");
    	}
    else if($val=='declined')
    	{
    		header("location: ../dbms-action/$dpt/view_leave_records.php?val=$val");
    	}
?>