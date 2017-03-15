<?php
	session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uname = $_SESSION['uname'];

	require('../../pdf/fpdf.php');

    $eid = $_GET['id'];
    $rquery2 = "SELECT * FROM table_employee WHERE id='$eid'";
    $res2 = mysqli_query($con,$rquery2);
    $data2 = mysqli_fetch_array($res2);
	
	$pdf = new FPDF();
	$pdf -> AddPage();
	$pdf -> SetFont('Arial','B',18);
	$pdf -> Cell(40,10,'Employee Information',0,1);
	$pdf -> Ln();
	$pdf -> SetFont('Arial','B',12);
	$pdf -> Cell(60,8,'First name',1);
	$pdf -> Cell(130,8,$data2['first_name'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Middle name',1);
	$pdf -> Cell(130,8,$data2['middle_name'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Last name',1);
	$pdf -> Cell(130,8,$data2['last_name'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'DOB',1);
	$pdf -> Cell(130,8,$data2['dob'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Gender',1);
	$pdf -> Cell(130,8,$data2['gender'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Marital status',1);
	$pdf -> Cell(130,8,$data2['marital_status'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Current_city',1);
	$pdf -> Cell(130,8,$data2['current_city'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Phone',1);
	$pdf -> Cell(130,8,$data2['phone'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Email',1);
	$pdf -> Cell(130,8,$data2['email'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Department',1);
	$pdf -> Cell(130,8,$data2['department'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Job title',1);
	$pdf -> Cell(130,8,$data2['job_title'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Employment_status',1);
	$pdf -> Cell(130,8,$data2['employment_status'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Date_of_joining',1);
	$pdf -> Cell(130,8,$data2['date_of_joining'],1);
	$pdf -> Ln();
	$pdf -> Cell(60,8,'Salary (in Rs)',1);
	$pdf -> Cell(130,8,$data2['salary'],1);
	$pdf -> Ln();
	$pdf -> output();
?>
<td><?php echo $data2['first_name']; ?></td>
<td><?php echo $data2['middle_name']; ?></td>
<td><?php echo $data2['last_name']; ?></td>
<td><?php echo $data2['dob']; ?></td>
<td><?php echo $data2['gender']; ?></td>
<td><?php echo $data2['marital_status']; ?></td>
<td><?php echo $data2['current_city']; ?></td>
<td><?php echo $data2['phone']; ?></td>
<td><?php echo $data2['email']; ?></td>
<td><?php echo $data2['department']; ?></td>
<td><?php echo $data2['job_title']; ?></td>
<td><?php echo $data2['employment_status']; ?></td>
<td><?php echo $data2['date_of_joining']; ?></td>
<td><?php echo $data2['salary']; ?></td>