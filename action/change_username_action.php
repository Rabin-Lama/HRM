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
    $date = date('Y-m-d h:i:s');
    $un = $_POST['new-username'];
    $wquery1="UPDATE table_login SET username='$un' WHERE id='$uid'";
    mysqli_query($con,$wquery1);
    $wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Username changed','$date')";
    mysqli_query($con,$wquery2);
    header("location:../dbms-action/$dpt/settings.php?id=ok")
?>