<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uname = $_SESSION['uname'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Settings</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/css.css">
    <link rel="icon" href="../../css/images/icon.png" type="image/x-icon"/>
</head>

<body>
	<img src="../../css/images/hrm_image.jpg" class="img-responsive" >
    <h3> Marketing department </h3>
    
    
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
                    <li class="dropdown active">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account
                            (<?php
                                echo "<b>",$uname,"</b>";
                            ?>)
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="">Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="../../action/logout_action.php">Log out</a></li>
                        </ul>
                    </li>
            	</ul>
            </div><!-- /.navbar-collapse -->
    	</div><!-- /.container-fluid -->
	</nav> <!-- Navbar end -->
    <h4>Account settings</h4>
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
                                                Username changed successfully
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                <?php
                                }
                            else if($_GET['id']=='pok')
                                {
                ?>
                                    <div class="container">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="alert alert-success alert-block fade in" style="text-align:center;">
                                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                <button class="close" data-dismiss="alert">&times;</button>
                                                Password changed successfully
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                <?php
                                }
                            else if($_GET['id']=='pwrong')
                                {
                ?>
                                    <div class="container">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="alert alert-danger alert-block fade in" style="text-align:center;">
                                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                <button class="close" data-dismiss="alert">&times;</button>
                                                Password mismatch. Please try again.
                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                <?php
                                }
                        }
                ?>
    <div class="container">
        <button href="#change-username" data-toggle="modal" class="btn btn-info col-sm-6">Click to change username</button>
        <button href="#change-password" data-toggle="modal" class="btn btn-danger col-sm-6">Click to change password</button>
    </div>
    <div class="container">
        <div class="modal fade" id="change-username">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Change username</h4> 
                    </div>
                    <div class="modal-body">
                        <form  class="form-horizontal" method="post" action="../../action/change_username_action.php">
                            <div class="form-group">
                                <label for="un" class="col-sm-5 control-label"> Enter new username: </label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="un" placeholder="Username" name="new-username" required="required">
                                </div>
                                <div class="col-sm-12" style="height:1em;"></div>
                                <div class="col-sm-7"></div>
                                <button class="col-sm-2 btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="col-sm-2 btn btn-primary" style="margin-left:1em;">OK</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div> <!-- end of first modal -->
        <div class="modal fade" id="change-password">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Change password</h4> 
                    </div>
                    <div class="modal-body">
                        <form  class="form-horizontal" method="post" action="../../action/change_password_action.php">
                            <div class="form-group">
                                <label for="pw" class="col-sm-5 control-label"> Enter new password: </label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="pw" placeholder="Password" name="new-password" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pw2" class="col-sm-5 control-label"> Confirm password: </label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" id="pw2" placeholder="Confirm password" name="new-password2" required="required">
                                </div>
                                <div class="col-sm-12" style="height:1em;"></div>
                                <div class="col-sm-7"></div>
                                <button class="col-sm-2 btn btn-default" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="col-sm-2 btn btn-primary" style="margin-left:1em;">OK</button>
                                <div class="col-sm-1"></div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div> <!-- end of second modal -->
    </div>
    
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>

    