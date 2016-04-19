<?php 
    require 'core.inc.php';
	require 'connect.php';
?>
	
<?php
	if(@loggedin())
	{
         
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
    <header>
    	<!--TOP STRIP START-->
        <!--TOP STRIP END-->
        <!--NAVIGATION START-->
        <!--NAVIGATION END-->
    </header>
    <!--HEADER END-->
    <!--BANNER START-->
    <div class="page-heading">
    	<div class="container">
            <h1><center>Welcome to CodingHeaven</center></h1>
             </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
    	<div class="container">
        	<div class="row">
            	<div class="span4">
                	<!--PROFILE IMAGE START-->
                	<div class="profile-box profile-view">
                        <div class="thumb">
                            <a href="#"><img src="images/profile-img.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <p>Welcome</p>
                            <a href="#" class="btn-style">Marrie James</a>
                        </div>
                    </div>
                    <!--PROFILE IMAGE END-->
                    <!--EDIT PROFILE START-->
                    <div class="profile-box edit-profile">
                    	<h2>Account Setting</h2>
                        <ul>
                        	<li><a href="index.php">Add Programs</a></li>
                            
                            <li><a href="list_programs.php">List Of Programs</a></li>
                            <li><a href="courses.php">Add Courses</a></li>
           
                            <li><a href="list_courses.php">List of Courses</a></li>
                        </ul>
                        <div class="logout">
                        	<a href="signout.php">Log Out</a>
                        </div>
                    </div>
                    <!--EDIT PROFILE END-->
                </div>
                <div class="span8">
                	<!--EDIT PROFILE START-->
           
                    <!--EDIT PROFILE END-->
                    <!--EDIT PASSWORD START-->
                    <!--EDIT PASSWORD END-->
                    <!--QUIZ SCORE START-->
                    <!--QUIZ SCORE END-->
                <?php
                    $query = "SELECT * from `program` WHERE `adder` = '".$_SESSION['un']."'";
                    $query_run = mysqli_query($con,$query);
                    $num=mysqli_num_rows($query_run);
                   
                     ?>
                    <div class="profile-box editing">
                    	<h2>List of programs</h2>
                       
                        <table>
                            <thead>
                                <tr>
                                    <td>Program Name</td>
                                    <td>Level</td>
                                    
                                </tr>
                            </thead>
                          <?php while ($row = mysqli_fetch_array($query_run)) 
                              {

                          ?>  
                            <tbody>
                                   
                                 <tr>
                               
                               
                                    <td><a href="<?php echo "program_view.php?id=".$row['id'] ?>"><?php echo $row['program_name']?></a></td>
                                    <td>Beginnx er</td>
                             
                                </tr>
                            
                               </tbody>
                             <?php  } ?> 
                            <tfoot>
                                <tr>
                                    <td>Total</td>
                                    
                                    <td><?php echo $num; ?></td>
                                </tr>
                            </tfoot>
                        </table>

                        
                    </div>
                    <!--QUIZ SCORE END-->
                </div>
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
	else
	{
			include "loginform.inc.php";

	}
	

	
?>