<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uid = $_SESSION['id'];
    $id = $_GET['id'];
    $rquery1 = "SELECT * FROM table_employee WHERE id='$id'";
    $res1 = mysqli_query($con,$rquery1);
    $data1 = mysqli_fetch_array($res1)
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete record</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" href="../../css/images/icon.png" type="image/x-icon"/>
</head>

<body>
	<img src="../../css/images/hrm_image.jpg" class="img-responsive" >
    <h3> Marketing department </h3>

    <h4>Delete record</h4>
    <div class="table-responsive" style="margin-bottom: 1em;">
        <table class="table-condensed view-table">
            <tr class="info">
                <th>First name</th>
                <th>Middle name</th>
                <th>Last name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Marital status</th>
                <th>Current city</th>
                <th>Contact no.</th>
                <th>Email</th>
                <th>Department</th>
                <th>Job title</th>
                <th>Employment status</th>
                <th>Date of joining</th>
                <th>Salary</th>
            </tr>
            <tr>
                <td><?php echo $data1['first_name']; ?></td>
                <td><?php echo $data1['middle_name']; ?></td>
                <td><?php echo $data1['last_name']; ?></td>
                <td><?php echo $data1['dob']; ?></td>
                <td><?php echo $data1['gender']; ?></td>
                <td><?php echo $data1['marital_status']; ?></td>
                <td><?php echo $data1['current_city']; ?></td>
                <td><?php echo $data1['phone']; ?></td>
                <td><?php echo $data1['email']; ?></td>
                <td><?php echo $data1['department']; ?></td>
                <td><?php echo $data1['job_title']; ?></td>
                <td><?php echo $data1['employment_status']; ?></td>
                <td><?php echo $data1['date_of_joining']; ?></td>
                <td><?php echo $data1['salary']; ?></td>
            </tr>
        </table>
    </div> <!-- end of table container -->
    <div class="container">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="alert alert-danger alert-block fade in" style="text-align:center;">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                Delete this record ???
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>
    <form method="post" action="../../action/record_deleted_action.php">
        <div class="form-group">
            <div class="col-sm-3"></div>
            <a href="view_record.php" class="col-sm-3 btn btn-default">Cancel</a>
            <button type="submit" class="col-sm-3 btn btn-info">OK</button>
            <input type="hidden" name="hidden" value="<?php echo $data1['id']; ?>">
            <div class="col-sm-3"></div>
        </div>
    </form>
    
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>