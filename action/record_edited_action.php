<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uid = $_SESSION['id'];
    $eid = $_POST['hidden'];
    $fn = $_POST['first-name'];
    $mn = $_POST['middle-name'];
    $ln = $_POST['last-name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $ms = $_POST['marital-status'];
    $add = $_POST['current-city'];
    $phn = $_POST['phone'];
    $em = $_POST['email'];
    $jt = $_POST['job-title'];
    $es = $_POST['employment-status'];
    $doj = $_POST['date-of-joining'];
    $sal = $_POST['salary'];
    $date = date('Y-m-d h:i:s');
    $dpt = $_SESSION['dpt'];
    $uquery1="UPDATE table_employee SET first_name='$fn',middle_name='$mn',last_name='$ln',dob='$dob',gender='$gender',marital_status='$ms',current_city='$add',phone='$phn',email='$em',job_title='$jt',employment_status='$es',date_of_joining='$doj',salary='$sal' WHERE id='$eid'";
    mysqli_query($con,$uquery1);
    $wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Employee record edited','$date')";
    mysqli_query($con,$wquery2);
    header("location:../dbms-action/$dpt/view_record.php?id=ok")
?>