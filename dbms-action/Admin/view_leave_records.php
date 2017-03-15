<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uname = $_SESSION['uname'];
    $dpt = $_SESSION['dpt'];
    if(isset($_GET['val']))
        {
            $val = $_GET['val'];
        }
    else
        {
            $val = 'all';
        }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>View leave records</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" href="../../css/images/icon.png" type="image/x-icon"/>
</head>

<body>
	<img src="../../css/images/hrm_image.jpg" class="img-responsive" >
    <h3> Administrator department </h3>
    
    
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
                    <li class="dropdown active">
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
    <h4>View leave records</h4>
                <?php
                    if(isset($_GET['id']))
                        {
                            $id = $_GET['id'];
                            if($id=='ok')
                                {
                ?>
                                    <div class="container">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="alert alert-success alert-block fade in" style="text-align:center;">
                                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                <button class="close" data-dismiss="alert">&times;</button>
                                                Leave record edited successfully
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                <?php
                                }
                                else if($id=='deleted')
                                {
                ?>
                                    <div class="container">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="alert alert-success alert-block fade in" style="text-align:center;">
                                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                <button class="close" data-dismiss="alert">&times;</button>
                                                Leave record deleted successfully
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                <?php
                                }
                        }
                ?>

    <div class="container toolbar">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 tool">
            <form method="post" action="../../action/select_leave_action.php">
                    <label class="col-sm-2 control-label view-tool"> Display </label>
                    <div class="col-sm-4 view-tool">
                    <select name="select" class="form-control">
                        <option value="all" <?php if($val == 'all') { ?> selected="selected" <?php } ?>>All</option>
                        <option value="accepted" <?php if($val == 'accepted') { ?> selected="selected" <?php } ?>>Accepted</option>
                        <option value="declined" <?php if($val == 'declined') { ?> selected="selected" <?php } ?>>Declined</option>
                    </select>
                    </div>
                    <label class="col-sm-3 control-label view-tool" style="text-align:left;"> Records </label>
                    <button type="submit" class="col-sm-3 btn btn-info view-tool">OK</button>
            </form>
        </div>
        <div class="col-sm-3"></div>
        </div>
    </div> <!-- The container of toolbar is closed here -->
            
    <div class="table-responsive">
        <table class="table-condensed view-table">
            <tr class="info">
                <th>Full name</th>
                <th>Department</th>
                <th>Subject</th>
                <th>Period (days)</th>
                <th>Date</th>
                <th>Status</th>
                <th colspan="2" style="color:red;">Select an action</th>
            </tr>
            <?php
                if($val == 'all')
                    {
                        $rquery1 = "SELECT * FROM table_leave";
                    }
                elseif($val == 'accepted')
                    {
                        $rquery1 = "SELECT * FROM table_leave WHERE status = 'accepted'";
                    }
                else
                    {
                        $rquery1 = "SELECT * FROM table_leave WHERE status = 'declined'";
                    }
                $res1 = mysqli_query($con,$rquery1);
                while($data1 = mysqli_fetch_array($res1))
                    {
            ?>
                        <tr>
                            <td><?php echo $data1['by']; ?></td>
                            <td><?php echo $data1['department']; ?></td>
                            <td><?php echo $data1['subject']; ?></td>
                            <td><?php echo $data1['days']; ?></td>
                            <td><?php echo $data1['date']; ?></td>
                            <td><?php echo $data1['status']; ?></td>
                            <td><a href="edit_leave.php?id=<?php echo $data1['id']; ?>" class="btn btn-info">Edit</a></td>
                            <td><a href="delete_leave.php?id=<?php echo $data1['id']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
            <?php
                    }
            ?>
        </table>
    </div>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>