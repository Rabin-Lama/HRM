<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uname = $_SESSION['uname'];
    $key = $_POST['search'];
    $dpt = $_SESSION['dpt'];
    if(!isset($no))
        {
            $no = 10;
        }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search results</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" href="../../css/images/icon.png" type="image/x-icon"/>
</head>

<body>
    <img src="../../css/images/hrm_image.jpg" class="img-responsive" >
    <h3> Production department </h3>
    
    
    <nav class="navbar navbar-default"> <!-- Navbar start -->
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="add_record.php">Add record</a></li> 
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Leave requests <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="add_leave.php">Add new</a></li>
                            <li><a href="view_leave_records.php">View leave records</a></li>
                        </ul>
                    </li>
                    <li><a href="view_record.php">View and manage records</a></li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Manage notice <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="add_notice.php">Add new</a></li>
                            <li><a href="my_notices.php">My notices</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account
                            (<?php
                                echo "<b>",$uname,"</b>";
                            ?>)
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="settings.php">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="../../action/logout_action.php">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav> <!-- Navbar end -->

    <h4>Search results</h4>
                <?php
                    if(isset($_GET['id']))
                        {
                            if($_GET['id']=='ok')
                                {
                ?>
                                    <div class="container">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="alert alert-success alert-block fade in" style="text-align:center;">
                                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                <button class="close" data-dismiss="alert">&times;</button>
                                                Record updated successfully
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                <?php
                                }
                            else if($_GET['id']=='deleted')
                                {
                ?>
                                    <div class="container">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="alert alert-success alert-block fade in" style="text-align:center;">
                                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                <button class="close" data-dismiss="alert">&times;</button>
                                                Record deleted successfully
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                <?php
                                }
                        }
                ?>
    <div class="container toolbar">
        <div class="col-lg-4 tool">
            <form method="post" action="../../action/no_of_records_action.php">
                    <label class="col-lg-3 control-label view-tool"> Display </label>
                    <div class="col-lg-3 view-tool">
                        <input type="number" class="form-control" id="records" name="no-of-records" required="required" value="<?php echo $no; ?>">
                    </div>
                    <label class="col-lg-3 control-label view-tool" style="text-align:left;"> Records </label>
                    <button type="submit" class="btn btn-info col-lg-3 view-tool">OK</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4 tool">
            <form method="post" action="search_results.php">
                    <div class="col-lg-9 search-tool">
                        <input type="text" class="form-control" id="search" name="search" required="required" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-info col-lg-3 view-tool">Search</button>
            </form>
        </div>
    </div> <!-- The container of toolbar is closed here -->
    <div class="container"></div>

    <div class="container">
        <?php
                $rquery2 = "SELECT * FROM table_employee WHERE first_name LIKE '$key%' AND department='$dpt'";
                $res2 = mysqli_query($con,$rquery2);
                $count=mysqli_num_rows($res2);
                $c = 0;
                if($count<1)
                    {
        ?>
                <h3 style="font-size:3em; border:none; line-height:5em;"> No data found </h3>
        <?php
                    }
                else
                    {
        ?>
        <table class="table view-table">
            <tr>
                <th>#</th>
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
                <th colspan="2" style="color:red;">Select an action</th>
            </tr>
            <?php
                while($data2 = mysqli_fetch_array($res2))
                    {
                        if($c<$no)
                            {
                                $c++;
            ?>
                                <tr>
                                    <td><?php echo $c;?></td>
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
                                    <td><a href="edit_record.php?id=<?php echo $data2['id']; ?>" class="btn btn-info">Edit</a></td>
                                    <td><a href="delete_record.php?id=<?php echo $data2['id']; ?>" class="btn btn-info">Delete</a></td>
                                </tr>
            <?php
                            }
                     }}
            ?>
        </table>
    </div> <!-- end of table container -->
    
    
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>