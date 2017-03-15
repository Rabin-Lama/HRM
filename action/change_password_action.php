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
    $pw = $_POST['new-password'];
    $pw2 = $_POST['new-password2'];
    $date = date('Y-m-d h:i:s');
    if($pw==$pw2)
        {
            $p = md5($pw);
            $wquery1="UPDATE table_login SET password='$p' WHERE id='$uid'";
            mysqli_query($con,$wquery1);
            $wquery2 = "INSERT INTO table_recent_activities VALUES(NULL,'$uid','Password changed','$date')";
            mysqli_query($con,$wquery2);
            header("location:../dbms-action/$dpt/settings.php?id=pok");
        }
    else
        {
            header("location:../dbms-action/$dpt/settings.php?id=pwrong");
        }
?>