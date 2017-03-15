<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uname = $_SESSION['uname'];
    $uid = $_SESSION['id'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" href="../../css/images/icon.png" type="image/x-icon"/>
</head>

<body>
	<img src="../../css/images/hrm_image.jpg" class="img-responsive" >
    <h3> Finance department </h3>
    
    
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
                    <li class="active"><a href="">Home</a></li>
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
    
    
    <div class="container">
    	<div class="col-sm-6 recent-activities">
			<h3>Recent activities</h3>
            <div class="col-sm-12 display-recent-activities">
            	<?php
                    $c = 0;
                    $rquery1 = "SELECT * FROM table_recent_activities WHERE uid='$uid' ORDER BY id DESC";
                    $res1 = mysqli_query($con,$rquery1);
                    while($data1 = mysqli_fetch_array($res1))
                        {
                            $c++;
                            if($c<11)
                                {
                ?>
                                    <ul type="circle">
                                        <li><b><?php echo $data1['activities']; ?></b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;on --------------<?php echo $data1['date']; ?></li>
                                    </ul>
                                    
                <?php
                                }
                        }
                ?>
            </div>
        </div>
        <div class="col-sm-6 quick-actions">
        	<h3>Quick actions</h3>
            <div class="col-sm-12 display-quick-actions" style="padding:1em;">
            <!-- <span class="glyphicon glyphicon-circle-arrow-right"></span> -->
            	<a href="add_record.php" type="button" class="btn btn-info" style="margin-bottom:1em;">Add new employee</a> <br>
                <a href="view_leave_records.php" type="button" class="btn btn-info">Manage leave applications</a>
            </div>
        </div>
    </div>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>