<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uname = $_SESSION['uname'];
    if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $rquery1 = "SELECT * FROM table_leave WHERE id = '$id'";
            $res1 = mysqli_query($con,$rquery1);
            $data1 = mysqli_fetch_array($res1);
        }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit leave records </title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" href="../../css/images/icon.png" type="image/x-icon"/>
</head>

<body>
    <img src="../../css/images/hrm_image.jpg" class="img-responsive" >
    <h3> Technical department </h3>                 
    
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
                                echo "<b>",$uname,"<b>";
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
    <h4>Edit leave</h4>
                

        <div class="container">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 form-horizontal">
                <form action="../../action/edit_leave_action.php" method="post">
                    <div class="form-group">
                        <label for="by" class="col-lg-4 control-label"> Leave requested by: </label>
                        <div class="col-lg-8">
                            <input type="text" class="textbox" id="by" name="leave-requested-by" required="required" value="<?php echo $data1['by']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sub" class="col-lg-4 control-label"> Leave subject: </label>
                        <div class="col-lg-8">
                            <input type="text" class="textbox" id="sub" name="leave-subject" required="required" value="<?php echo $data1['subject']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="days" class="col-lg-4 control-label"> Leave period (days): </label>
                        <div class="col-lg-8">
                            <input type="number" class="textbox" id="days" name="days" required="required" value="<?php echo $data1['days']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ms" class="col-lg-4 control-label"> Action: </label>
                        <div class="col-lg-8">
                            <select class="textbox" id="action" name="action">
                                <option value="none" <?php if($data1['status']=='none') {?> selected="delected" <?php } ?> >--None--</option>
                                <option value="accepted" <?php if($data1['status']=='accepted') {?> selected="delected" <?php } ?>>Accepted</option>
                                <option value="declined" <?php if($data1['status']=='declined') {?> selected="delected" <?php } ?>>Declined</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="hidden" value="<?php echo $data1['id']; ?>">
                    <button type="submit" class="btn btn-info pull-right finish">Submit</button>
                    <button type="reset" class="btn btn-default pull-right" style="margin-right:1em;">Clear</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div> <!-- closing of form container -->
    
    
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>