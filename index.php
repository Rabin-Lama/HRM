<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Main page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="icon" href="../../css/images/icon.png" type="image/x-icon"/>
</head>

<body>
	<img src="css/images/hrm_image.jpg" class="img-responsive" >
    <div class="container index">
    </div>
    <div class="container">
    	<div class="col-sm-3"></div>
        <div class="col-sm-6 tabs" >
        	<ul class="nav navbar-nav">
            	<li class="active" style="margin-right:1em;"><a href="">Log in</a></li>
            	<li><a href="notice_board.php">Notice board</a></li>
            </ul>
        </div>
        <div class="col-sm-3"></div>
    </div>
	<div class="container" >
    	<div class="col-sm-3">
        </div>
    	<div class="col-sm-6 login">
        	<h3> Please enter your log in information </h3>
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
            	<form class="well-lg" method="post" action="action/login_action.php">
        	        <input type="text" class="textbox" id="username" placeholder="Username..." name="un" required></p>
                	<input type="password" class="textbox" id="password" placeholder="Password..." name="pw" required></p>
                    <button type="reset" class="btn btn-default" style="width: 49%; margin-bottom: .2em;">Reset</button>
              		<button type="submit" class="btn btn-info" style="width: 49%; margin-bottom: .2em;">Login</button>
                    <?php
                    	if(isset($_GET['id']))
                    		{
    		                	$id = $_GET['id'];
    							if($id=='error')
    								{
    				?>
    									<div class="alert alert-danger" role="alert" style="margin-left:-40%; text-align:center;">
    										<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    										<span class="sr-only">Error:</span>
    										Incorrect username and password
    									</div>
                    <?php
    								}
    						}
    				?>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jQuery.js"></script>
</body>
</html>