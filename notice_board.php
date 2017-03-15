<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My notices</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/css.css">
    <link rel="icon" href="css/images/icon.png" type="image/x-icon"/>
</head>

<body>
    <img src="css/images/hrm_image.jpg" class="img-responsive" >
    <h4> My notices </h4>
    <div class="container-fluid">
        <?php
            $con=mysqli_connect("localhost","root","rabin") or die("error");
            mysqli_select_db($con,'dbms_project');
            $rquery1 = "SELECT * FROM table_notices";
            $res1 = mysqli_query($con,$rquery1);
            $c = 0;
            while($data1 = mysqli_fetch_array($res1))
                {
                    $c++;
                    if($c<10)
                        {
        ?>
                            <div class="col-sm-6">
                                <div class="jumbotron">
                                    <h4><?php echo $data1['topic']; ?> <div class="dpt"> <?php echo $data1['department']; ?> department</div></h4>
                                    <p><?php echo $data1['content']; ?></p>
                                    <div class="dpt"> Date : <?php echo $data1['date']; ?> </div>
                                </div>
                            </div>
        <?php
                        }
                }
        ?>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>