<?php
    session_start();
    if(!isset($_SESSION['id']))
      {
        header("location:../../index.php");
      }
    $con=mysqli_connect("localhost","root","rabin") or die("error");
    mysqli_select_db($con,'dbms_project');
    $uid = $_SESSION['id'];
    $uname = $_SESSION['uname'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add record</title>
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
                    <li class="active"><a href="">Add record</a></li> 
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

	<h4>Add new employee</h4>
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
											Record added successfully
										</div>
									</div>
									<div class="col-lg-3"></div>
								</div>
                <?php
							}
						else if($_GET['id']=='wrong')
							{
				?>
								<div class="container">
									<div class="col-lg-3"></div>
									<div class="col-lg-6">
										<div class="alert alert-danger alert-block fade in" style="text-align:center;">
											<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
											<button class="close" data-dismiss="alert">&times;</button>
											Something went wrong. Please try again.
										</div>
									</div>
									<div class="col-lg-3"></div>
								</div>			
				<?php
							}
					}
				?>

	<form class="form-horizontal" action="../../action/add_new_record_action.php" method="post">
		<div class="container step-1">
			<div class="col-lg-3"></div>
			<div class="col-lg-6 border">
						<h4 style="border-top:none;">Step 1: Personal details</h4>
						<div class="form-group">
				            <label for="fn" class="col-lg-4 control-label"> First name: </label>
				            <div class="col-lg-8">
				                <input type="text" class="textbox" id="fn" placeholder="First name" name="first-name" required="required">
				                <h5>Required</h5>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="mn" class="col-lg-4 control-label"> Middle name: </label>
				            <div class="col-lg-8">
				                <input type="text" class="textbox" id="mn" placeholder="Middle name" name="middle-name">
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="ln" class="col-lg-4 control-label"> Last name: </label>
				            <div class="col-lg-8">
				                <input type="text" class="textbox" id="ln" placeholder="Last name" name="last-name" required="required">
				                <h5 style="color:red;">Required</h5>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="dob" class="col-lg-4 control-label"> DOB: </label>
				            <div class="col-lg-8">
				                <input type="date" class="textbox" id="dob" placeholder="DOB" name="dob"required="required">
				                <h5 style="color:red;">Required</h5>
				            </div>
				        </div>
				        <div class="form-group">
				            <label class="col-lg-4 control-label" for="gender"> Gender </label>
				            <div class="col-lg-8">
				                <input type="radio" name="gender" id="male" value="male"/> <label for="male"> Male</label>
				                <input type="radio" name="gender" id="female" value="female"/> <label for="female"> Female</label>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="ms" class="col-lg-4 control-label"> Marital status: </label>
				            <div class="col-lg-8">
				            	<select class="textbox" id="ms" name="marital-status">
				            		<option value="none" selected="selected">--None--</option>
				            		<option value="single">Single</option>
				            		<option value="married">Married</option>
				            		<option value="divorced">Divorced</option>
				            		<option value="widow">Widow</option>
				            		<option value="widower">Widower</option>
				            	</select>
								<a class="btn btn-info pull-right first-next">Next</a>
				            </div>
				        </div>
			</div>
			<div class="col-lg-3"></div>
		</div> <!-- step-1 container closed -->

		<div class="container step-2">
			<div class="col-lg-3"></div>
			<div class="col-lg-6 border">
						<h4 style="border-top:none; background:none;">Step 2: Contact details</h4>
						<div class="form-group">
				            <label for="add" class="col-lg-4 control-label"> Current city: </label>
				            <div class="col-lg-8">
				                <input type="text" class="textbox" id="add" placeholder="Address" name="current-city">
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="phone" class="col-lg-4 control-label"> Phone: </label>
				            <div class="col-lg-8">
				                <input type="number" class="textbox" id="phone" placeholder="Phone" name="phone">
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="em" class="col-lg-4 control-label"> Email: </label>
				            <div class="col-lg-8">
				                <input type="email" class="textbox" id="em" placeholder="Email" name="email">
				            </div>
				        </div>
				<a class="btn btn-info first-prev">Prev</a>
				<a class="btn btn-info pull-right second-next">Next</a>
			</div>
			<div class="col-lg-3"></div>
		</div> <!-- step-2 container closed -->

		<div class="container step-3">
			<div class="col-lg-3"></div>
			<div class="col-lg-6 border">
						<h4 style="border-top:none; background:none;">Step 3: Job details</h4>
		        		<div class="form-group">
				            <label for="jt" class="col-lg-4 control-label"> Job title: </label>
				            <div class="col-lg-8">
				            	<select class="textbox" id="jt" name="job-title" required="required">
				            		<option value="none" selected="selected">--None--</option>
				            		<option value="manager">Manager</option>
				            		<option value="intern">Intern</option>
				            		<option value="employee">employee</option>
				            	</select>
				            </div>
				        </div>
		        		<div class="form-group">
				            <label for="dept" class="col-lg-4 control-label"> Department: </label>
				            <div class="col-lg-8">
				            	<select class="textbox" id="dept" name="department">
				            		<option value="none" selected="selected">--None--</option>
				            		<option value="finance">Finance</option>
				            		<option value="marketing">Marketing</option>
				            		<option value="production">Production</option>
				            		<option value="technical">Technical</option>
				            	</select>
				            </div>
				        </div>
		        		<div class="form-group">
				            <label for="es" class="col-lg-4 control-label"> Employment status: </label>
				            <div class="col-lg-8">
				            	<select class="textbox" id="es" name="employment-status">
				            		<option value="none" selected="selected">--None--</option>
				            		<option value="full-time-permanent">Full time permanent</option>
				            		<option value="part-time-permanent">Part time permanent</option>
				            		<option value="full-time-contract">Full time contract</option>
				            		<option value="part-time-contract">Part time contract</option>
				            		<option value="internship">Internship</option>
				            	</select>
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="doj" class="col-lg-4 control-label"> Date of joining: </label>
				            <div class="col-lg-8">
				                <input type="date" class="textbox" id="doj" placeholder="Date of joining" name="date-of-joining">
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="sal" class="col-lg-4 control-label"> Salary (NRS): </label>
				            <div class="col-lg-8">
				                <input type="text" class="textbox" id="sal" placeholder="Salary" name="salary">
				            </div>
				    	</div>
					<a class="btn btn-info second-prev">Prev</a>
					<button href="#error" data-toggle="modal" type="submit" class="btn btn-info pull-right finish">Finish</button>
					<button type="reset" class="btn btn-default pull-right" style="margin-right:1em;">Clear</button>				
			</div>
			<div class="col-lg-3"></div>
		</div> <!-- step-3 container closed -->
	</form> 
	<div class="modal fade" id="error">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h5 style="color:red;">Something went wrong. Please try again.</h5>	
				</div>
				<div class="modal-footer">
					<button class="btn btn-info" data-dismiss="modal">OK</button>	
				</div>
			</div>
		</div>
	</div>
    
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/myjQuery.js"></script>
    
</body>
</html>