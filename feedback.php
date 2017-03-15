<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manager login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
	<img src="css/hrm_image.jpg" class="img-responsive" >
    <div class="container" style="background:#B5E61D; height:50px; border-top-style:solid;">
    </div>

    <div class="container">
    	<div class="col-sm-3"></div>
    	<div class="col-sm-6 tabs">
    		<h2>Contact Us</h2>
    	</div>
    	<div class="col-sm-3"></div>
    </div>
    <div class="container">
    	<div class="col-sm-3"></div>
    	<div class="col-sm-6">
    		<form class="form-horizontal" action:"action/action-feedback.php" method="post">
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Full Name</label>
        <div class="col-xs-10">
            <input type="text" class="form-control" id="inputEmail" placeholder="Enter Your fullname" name="nm">
        </div>
    </div>
    <div class="form-group">
    	<label for="textarea" class="control-label col-xs-2">Message</label>
    	<div class="col-xs-10">
    		<textarea placeholder="Type here..." name="text-area"></textarea>
    	</div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            <button type="submit" class="btn btn-primary">send</button>
        </div>
    </div>
</form>
    	</div>
    	<div class="col-sm-3"></div>
    </div>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jQuery.js"></script>

</body>
</html>