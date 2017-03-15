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
<title>Update record</title>
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
    <h4>Edit record</h4>
    <?php
        $eid = $_GET['id'];
        $rquery2 = "SELECT * FROM table_employee WHERE id='$eid'";
        $res2 = mysqli_query($con,$rquery2);
        $data2 = mysqli_fetch_array($res2);
    ?>
    <div class="container">
        <form action="../../action/record_edited_action.php" method="post">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 form-horizontal">
                    <div class="form-group">
                        <label for="fn" class="col-sm-4 control-label"> First name: </label>
                        <div class="col-sm-8">
                            <input type="text" class="textbox" id="fn" placeholder="First name" name="first-name" required="required" value="<?php echo $data2['first_name']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mn" class="col-sm-4 control-label"> Middle name: </label>
                        <div class="col-sm-8">
                            <input type="text" class="textbox" id="mn" placeholder="Middle name" name="middle-name" value="<?php echo $data2['middle_name']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ln" class="col-sm-4 control-label"> Last name: </label>
                        <div class="col-sm-8">
                            <input type="text" class="textbox" id="ln" placeholder="Last name" name="last-name" value="<?php echo $data2['last_name']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dob" class="col-sm-4 control-label"> DOB: </label>
                        <div class="col-sm-8">
                            <input type="date" class="textbox" id="dob" placeholder="DOB" name="dob" value="<?php echo $data2['dob']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="gender"> Gender </label>
                        <div class="col-sm-8">
                            <input type="radio" name="gender" id="male" value="male" <?php if($data2['gender']=='male') { ?> checked="checked" <?php } ?> /> <label for="male"> Male</label>
                            <input type="radio" name="gender" id="female" value="female" <?php if($data2['gender']=='female') { ?> checked="checked" <?php } ?> /> <label for="female"> Female</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ms" class="col-sm-4 control-label"> Marital status: </label>
                        <div class="col-sm-8">
                            <select class="textbox" id="ms" name="marital-status">
                                <option value="none">--None--</option>
                                <option value="single" <?php if($data2['marital_status']=='single') { ?> selected="selected" <?php } ?> >Single</option>
                                <option value="married" <?php if($data2['marital_status']=='married') { ?> selected="selected" <?php } ?> >Married</option>
                                <option value="divorced" <?php if($data2['marital_status']=='divorced') { ?> selected="selected" <?php } ?> >Divorced</option>
                                <option value="widow" <?php if($data2['marital_status']=='widow') { ?> selected="selected" <?php } ?> >Widow</option>
                                <option value="widower" <?php if($data2['marital_status']=='widower') { ?> selected="selected" <?php } ?> >Widower</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add" class="col-sm-4 control-label"> Current city: </label>
                        <div class="col-sm-8">
                            <input type="text" class="textbox" id="add" placeholder="Address" name="current-city" value="<?php echo $data2['current_city']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-4 control-label"> Phone: </label>
                        <div class="col-sm-8">
                            <input type="number" class="textbox" id="phone" placeholder="Phone" name="phone" value="<?php echo $data2['phone']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="em" class="col-sm-4 control-label"> Email: </label>
                        <div class="col-sm-8">
                            <input type="email" class="textbox" id="em" placeholder="Email" name="email" value="<?php echo $data2['email']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jt" class="col-sm-4 control-label"> Job title: </label>
                        <div class="col-sm-8">
                            <select class="textbox" id="jt" name="job-title" required="required">
                                <option value="none">--None--</option>
                                <option value="manager" <?php if($data2['job_title']=='manager') { ?> selected="selected" <?php } ?> >Manager</option>
                                <option value="employee" <?php if($data2['job_title']=='employee') { ?> selected="selected" <?php } ?> >Employee</option>
                                <option value="intern" <?php if($data2['job_title']=='intern') { ?> selected="selected" <?php } ?> >Intern</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="es" class="col-sm-4 control-label"> Employment status: </label>
                        <div class="col-sm-8">
                            <select class="textbox" id="es" name="employment-status">
                                <option value="none">--None--</option>
                                <option value="full-time-permanent" <?php if($data2['employment_status']=='full-time-permanent') { ?> selected="selected" <?php } ?> >Full time permanent</option>
                                <option value="part-time-permanent" <?php if($data2['employment_status']=='part-time-permanent') { ?> selected="selected" <?php } ?> >Part time permanent</option>
                                <option value="full-time-contract" <?php if($data2['employment_status']=='full-time-contract') { ?> selected="selected" <?php } ?> >Full time contract</option>
                                <option value="part-time-contract" <?php if($data2['employment_status']=='part-time-contract') { ?> selected="selected" <?php } ?> >Part time contract</option>
                                <option value="internship" <?php if($data2['employment_status']=='internship') { ?> selected="selected" <?php } ?> >Internship</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="doj" class="col-sm-4 control-label"> Date of joining: </label>
                        <div class="col-sm-8">
                            <input type="date" class="textbox" id="doj" placeholder="Date of joining" name="date-of-joining" value="<?php echo $data2['date_of_joining']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sal" class="col-sm-4 control-label"> Salary (NRS): </label>
                        <div class="col-sm-8">
                            <input type="text" class="textbox" id="sal" placeholder="Salary" name="salary" value="<?php echo $data2['salary']; ?>">
                        </div>
                    </div>
                        <input type="hidden" name="hidden" value="<?php echo $eid; ?>">
                        <button class="btn btn-info pull-right" type="submit" style="margin-left:1em;">Update</button>
                        <button class="btn btn-default pull-right" type="reset">Clear</button>
                </div>
                <div class="col-sm-3"></div>
        </form>
    </div> <!-- form container closed -->
    
    
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
</body>
</html>