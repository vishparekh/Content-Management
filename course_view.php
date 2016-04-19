<?php
require 'core.inc.php';
require 'connect.php';
	
?>
<?php
    if(isset($_GET['id']))
    {
         $id=$_GET['id'];
    }
    else{
        echo "Please select program";
        die;
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
<link href="css/color3.css" rel="stylesheet" media="screen">
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
<!-- PARALLAX BACKGROUNDS -->
<link href="css/parallax.css" rel="stylesheet" type="text/css">
<!-- PIE CHART -->
<link href="css/chart.css" rel="stylesheet" type="text/css">





</head>
<body>
<!--WRAPPER START-->
<div class="wrapper">
    <!--HEADER START-->
    
    <!--HEADER END-->
    <!--BANNER START-->
     <div class="page-heading">
        <div class="container">
            <h1><center>Courses</center> </h1>
          
             <a href="index.php"><button class="btn-style" style="margin-left: 1000px ">Back</button></a>
          
           
        </div>
    </div>
                   <div class="span6">
                	<div class="text">
                    	<h2>C- language</h2>
                        <h5>Learn Whole C-language</h5>
                       </div>
                                 </div>
 
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
    	<!--INTRO SECTION START-->
      
        <!--INTRO SECTION END-->
    	<!--OUR TEACHERS SECTION START-->

        <!--OUR TEACHERS SECTION END-->
        <!--FAQ SECTION START-->
        <section class="gray-bg">
        	<div class="container">
            	<div class="row">
                	<div class="span12">
                        <div class="faq">
                        	<h2>Course Topics</h2>


                            <?php
                            $query = "SELECT * FROM `topic` WHERE id='$id'";
                            $query_run = mysqli_query($con,$query) or die();
                            /*if()
                            {
                                echo "Done";
                            }   
                            else
                            {
                                mysqli_error($con);
                            }*/
                         if(mysqli_num_rows($query_run)==0)
                         {
                             echo "Bad select";
                             die;
                         }
                       while ($row = mysqli_fetch_array($query_run)) 
                       {
                            
                            ?>

                       		<!--ACORDIAN DATE START-->
                            <div class="accordion_cp" id="section1">
                                <p><?php echo $row['title']; ?></p><span><i class="fa fa-minus"></i></span>
                            </div>
                            <div class="contain_cp_accor">
                                <div class="content_cp_accor">
                                    <p><?php echo $row['contain']; ?></p>
                                </div>
                            </div>
                            <!--ACORDIAN DATE END-->


<?php                       } ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--FAQ SECTION END-->
        <!--SKILLS START-->
 
        <!--SKILLS END-->
        <!--TESTIMONIALS SECTION START-->
        
        <!--TESTIMONIALS SECTION END-->
        <!--FOLLOW US SECTION START-->
        <!--FOLLOW US SECTION END-->
    </div>
    <!--CONTANT END-->
    <!--FOOTER START-->
   <!--FOOTER END-->
</div>
</div>
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
<script type="text/javascript" src="js/jquery.cookie.js"></script> <!--required only if using cookies-->
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript" src="js/skrollr.min.js"></script>
<script src="js/functions.js"></script>
    
</body>
</html>
