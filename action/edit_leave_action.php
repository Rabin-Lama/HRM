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
    $id = $_POST['hidden'];
    $subject = $_POST['leave-subject'];
    $name = $_POST['leave-requested-by'];
    $days = $_POST['days'];
    $status = $_POST['action'];
    $date = date('Y-m-d h:i:s');
    $uquery1 = "UPDATE table_leave SET subject = '$subject', by = '$name', days = '$days', status = '$status' WHERE id = '$id'";
    mysqli_query($con,$uquery1);
    $wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Leave record edited','$date')";
    mysqli_query($con,$$wquery2);
    header("location:../dbms-action/$dpt/view_leave_records.php?id=ok");
?>