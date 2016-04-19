<?php 
    require 'core.inc.php';
	require 'connect.inc.php';
    require 'connect.php';
?>
<?php
    if(isset($_GET['id']))
    {
       $id=$_GET['id']; 
       $query="select * from program WHERE id=$id";
       $result=mysqli_query($con,$query);
       $row=mysqli_fetch_array($result);
    }
    else
    {
        echo "PLase select";
        die;
    }
?>	
<?php
	if(@loggedin())
	{
         if(isset($_POST['update']))
        {
             $program_name = $_POST['program_name'];
             $label= $_POST['label'];
             $program_description=$_POST['program_description'];
             $input=$_POST['input'];
             $output=$_POST['output'];
             $constraints=$_POST['constraints'];
             $sample_input=$_POST['sample_input'];
             $sample_output=$_POST['sample_output'];
             $explain_input=$_POST['explain_input'];
             $explain_output=$_POST['explain_output'];
             
             
             
            
            //$sql = "INSERT into `program` VALUES ('$id','$program_name','$label','$program_description','$input','$output','$constraints','$sample_input','$sample_output','$explain_input','$explain_output')";
            $sql = " UPDATE `program` SET `id`=$id,`program_name`=$program_name,`label`=$lable,`program_decription`=$program_description,`input`=$input,`output`=$output,`constraints`=$constraints,`sample_input`=$sample_input,`sample_output`=$sample_output,`explain_input`=$explain_input,`explain_output`=$explain_output WHERE `id`=$id ";
             if($query_run = mysqli_query($con,$sql))
             {
                 echo "Done";
             }
             else{
                 echo "Error";
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
                            <p>Welcome <?php echo $_SESSION['un']; ?></p>
                            <a href="#" class="btn-style" > </a>
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
                        	<a href="logout.php">Log Out</a>
                        </div>
                    </div>
                    <!--EDIT PROFILE END-->
                </div>
                <div class="span8">
                	<!--EDIT PROFILE START-->
                	<div class="profile-box editing">
                    	<h2>Add Programs</h2>

                        <form action="index.php" method="POST">
                        <ul>
                        	<li>
                            	<label>Program Name</label>
                                <input type="text" class="input-block-level" name="program_name" placeholder="Enter your First Name" value="<?php echo $row['program_name']; ?>">
                            </li>
                            <li>
                            	<label>Label</label>
                                <input type="text" class="input-block-level" name="label" placeholder="Enter your Last Name" value="<?php echo $row['label']; ?>">
                            </li>
                            <li>
                            	<label>Level</label>
                                <select class="input-block-level" name="level">
                                	<option>Beginner</option>
                                    <option>Intermediate</option>
                                    <option>Expert</option>
                                    
                                </select>
                            </li>
                           
                            <li class="fw">
                            	<label>Program Description</label>
                            	<textarea class="input-block-level" name="program_description"><?php echo $row['program_decription']; ?></textarea>
                            </li>
                             <li class="fw">
                            	<label>Input</label>
                            	<textarea class="input-block-level" name="input"><?php echo $row['input']; ?></textarea>
                            </li>
                             <li class="fw">
                            	<label>Output</label>
                            	<textarea class="input-block-level" name="output"><?php echo $row['output']; ?></textarea>
                            </li>
                             <li class="fw">
                            	<label>Constraints</label>
                            	<textarea class="input-block-level" name="constraints"><?php echo $row['constraints']; ?></textarea>
                            </li>
                             <li class="fw">
                            	<label>Sample Input</label>
                            	<textarea class="input-block-level" name="sample_input"><?php echo $row['sample_input']; ?></textarea>
                            </li> <li class="fw">
                            	<label>Sample Output</label>
                            	<textarea class="input-block-level" name="sample_output"><?php echo $row['sample_input']; ?></textarea>
                            </li>
                             <li class="fw">
                            	<label>Explain Input</label>
                            	<textarea class="input-block-level" name="explain_input"><?php echo $row['explain_input']; ?></textarea>
                            </li>
                             <li class="fw">
                            	<label>Explain Output </label>
                            	<textarea class="input-block-level" name="explain_output"><?php echo $row['explain_output']; ?></textarea>
                            </li>
                            <li class="fw">
                            	<input type="submit" name="update" value="Update ">
                            </li>
                        </ul>
</form>
                    </div>
                    <!--EDIT PROFILE END-->
                    <!--EDIT PASSWORD START-->
                    <!--EDIT PASSWORD END-->
                    <!--QUIZ SCORE START-->
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