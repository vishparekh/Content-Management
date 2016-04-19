<?php
    

	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password_hash = md5($password);

		if(!empty($username) && !empty($password))
		{
			$query = " SELECT `id` FROM `users` WHERE `username` = '".mysql_real_escape_string($username)."' AND `password` = '".mysql_real_escape_string($password_hash)."' ";
			if($query_run = mysql_query($query))
			{
				$query_num_rows = mysql_num_rows($query_run);
				if($query_num_rows == 0)
				{
					echo "No user found";
				}
				elseif ($query_num_rows == 1) {
					echo "Welcome"." ".$username.". "."Your user_id is:".$user_id=mysql_result($query_run, 0,'id');
					$_SESSION['user_id'] = $user_id;
                    $_SESSION['un'] = $username;
					header('Location: index.php');
				}
			}
			else
			{
				die("problem");
			}

		}
		else
		{
			echo "You must Supply username and password";
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

                          <legend>Login Below:</legend>

            <label>Email Address</label>
                        <input type ="text"  name ="username"  class="input-block-level">
             <label>Password</label>
                       
                        <input type ="password"  name="password"  class="input-block-level">
            <input type="submit" name="submit" value="Submit"><br>

</form>
                    </div>

            </div>
            If you are new than<a href="reg.php"> Regsiter Here!</a>
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
