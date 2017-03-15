<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manager login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/css.css">
</head>

<body>
	<img src="../css/hrm_image.jpg" class="img-responsive" >
    <div class="container" style="background:#B5E61D; height:50px; border-top-style:solid;">
    </div>
    <div class="container">
    	<div class="col-sm-3"></div>
        <div class="col-sm-6 tabs" >
        	<ul class="nav nav-pills">
            	<li><a href="../index.php">Admin login</a></li>
            	<li class="active"><a href="manager_login.php">Manager login</a></li>
            	<li><a href="../view_section.php">View section</a></li>
            </ul>
        </div>
        <div class="col-sm-3"></div>
    </div>
	<div class="container" >
    	<div class="col-sm-3">
        </div>
    	<div class="col-sm-6 login">
        	<h3> Please enter your log in information
            </h3>
        	<form class="well-lg" style="margin-left:25%;" method="post" action="../action/marketing_login_action.php">
    	        <input type="text" class="textbox" id="username" placeholder="Username..." name="un" required="required"></p>
            	<input type="password" class="textbox" id="password" placeholder="Password..." name="pw" required="required"></p>
          		<button type="submit" class="btn btn-primary">Login</button>
          		<button type="reset" class="btn btn-primary">Reset</button> <br><br>
                <?php
                    if($_GET['id']==1)
                        {
                ?>
                            <div class="alert alert-danger" role="alert" style="margin-left:-40%; text-align:center;">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                Incorrect username and password
                            </div>
                <?php
                        }
                    else if($_GET['id']==2)
                        {
                ?>
                        <div id="error2" style="color:red; text-align:center;"> <br>Hacker found !!</div>   
                <?php
                        }
                ?>
            </form>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jQuery.js"></script>
</body>
</html>
