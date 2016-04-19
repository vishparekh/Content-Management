<?php
    require 'connect.inc.php';
    require 'core.inc.php';

    if(!loggedin())
    {
        if(isset($_POST['submit']))
        {  
            $username = $_POST['username'];
            if(okay($username))
            {
                $password = $_POST['password'];
                $password_hash = md5($password);

                if(!empty($username) && !empty($password))
                {
                    $query = " INSERT INTO `users` (username,password) VALUES ('$username','$password_hash')  ";
                    if($query_run = mysql_query($query))
                    {
                        echo 'User Registered Successfully';
                    }
                    else
                    {
                        die("problem");
                    }

                }
            }
            else
            {
                echo 'Useranme already exist.'.'<br>'.'Please Supply a different username';
            }
        }
        
    
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Education</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CUSTOM CSS -->
<link href="css/style.css" rel="stylesheet" media="screen">
<link href="css/color.css" rel="stylesheet" media="screen">
<link href="css/transitions.css" rel="stylesheet" media="screen">
<!-- BOOTSTRAP -->
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
<!-- BX SLIDER-->
<link href="css/jquery.bxslider.css" rel="stylesheet" media="screen">
<!-- OWL CAROUSEL -->
<link href="css/owl.carousel.css" rel="stylesheet">
<!-- FONT AWESOME -->
<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
<!-- PRETTY PHOTO BACKGROUNDS -->
<link href="css/prettyPhoto.css" rel="stylesheet" media="screen">

</head>
<body>
<!--WRAPPER START-->
<div class="wrapper">
    <!--HEADER START-->
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="page-heading">
    	<div class="container">
            <h1><center>Welcome to Coding Heaven</center></h1>
           </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
    	<div class="container">
        	<div class="row">
            	<div class="span6">
                   
                	<form action="<?php echo $current_file ;?>" method="POST">

                        <legend>Register Here:</legend><
                        <label>Full Name</label>
                        <input type ="text"  name ="fullname"  class="input-block-level">
                        <label>Contact Number</label>
                        <input type ="text"  name ="contact"  class="input-block-level">
                        <label>Email Address</label>
                        <input type ="text"  name ="username"  class="input-block-level">
                        <label>Password</label>
                       
                        <input type ="password"  name="password"  class="input-block-level">
                        <input type="submit" name="submit" value="Submit"><br>

                    </form>
                </div>

            </div>
            By registering, you are accepting the terms and conditions!
        </div>
    </div>
        <!--FOLLOW US SECTION START-->
        <!--FOLLOW US SECTION END-->
    </div>
    <!--CONTANT END-->
    <!--FOOTER START-->
    <!--FOOTER END-->
</div>
<!--WRAPPER END-->
<!-- Jquery Lib -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script src="js/functions.js"></script>   
</body>
</html>
<?php
    
    }
    elseif (loggedin())
    {
        echo 'You\'re already register and logged in.';
    }
?>