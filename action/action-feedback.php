<?php 
	$con=mysqli_connect("localhost","root","rabin") or die('error');
	mysqli_select_db($con,'dbms_project');
	echo $name=$_POST['nm'];
	$txt=$_POST['text-area'];
	$date=date(Y-m-d);
	$query="INSERT into table_feedback values(Null,'$name','$txt','$date')";
	mysqli_query($con,$query);
	header("location:../index.php");

?>