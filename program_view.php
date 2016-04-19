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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
<title>Coding Heaven</title>
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
<link href="css/parallax.css" rel="stylesheet" type="text/css" />


    </head>
    <body>
        <div class="wrapper">
    <!--BANNER START-->
    <!--BANNER END-->
            <div>      
                <div class="profile-box editing">
                         
                     <div class="container">

            <div class="row">

             

                <div class="col-md-12">

                    
                    <div id="content" style="margin-top:25px;padding-bottom: 20px">
                       
      <div style="margin-top: 10px;color: grey " align="center"></div>
        <a href = "edit_pro.php?id=1">   <button class="btn-style" style="margin-left: 1000px ; margin-top: 10px">  Edit  </button></a>
              
                        
                        <?php
                            
                            $query = "SELECT * FROM `program` WHERE id=$id";
                            if($query_run = mysqli_query($con,$query))
                            {
                               // echo "Done";
                            }   
                            else{
                                echo "Error";
                            }
                         if(mysqli_num_rows($query_run)==0)
                         {
                             echo "Bad select";
                             die;
                         }
                       while ($row = mysqli_fetch_array($query_run)) 
                       {
                            
                            ?>
                      
          <font style="font-size: xx-large; color: #0043A8"><br><b><?php echo $row['program_name']; ?></b><br></font>
          
        
          <br>
          <br>
          
          <h3>Problem Description</h3>
                      
          <div class="description">
          <p style="font-family: Arial; font-size: small">
         <?php echo $row['program_decription']; ?> </p>
          </div>
      
                </div>
             </div>
                
                </div>
            <div class="row">
                <div class="col-md-6">
                     <div>
          <h3>Input</h3>
          <p style="font-family: Arial; font-size: small">
              <?php echo $row['input']; ?>>
          </p>
         <br />
                </div>
             </div>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Output</h3>
          <p style="font-family: Arial; font-size: small"><?php echo $row['output']; ?>></p>
          <h3>Constraints</h3>
          <p style="font-family: Arial; font-size: small"><?php echo $row['constraints']; ?>>
          </p>
          
          
                </div>
             </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Example</h3>
          <h5>Input</h5>
          <div class="input">
          <pre style="border: 1px solid silver;background-color: #f5f5f5;padding: 0.5em;overflow: auto;margin-left: 2em"><?php echo $row['sample_input']?>></pre>
          </div>
          <br>
          <h5>Output</h5>
          <div>
          <pre style="border: 1px solid silver;background-color: #f5f5f5;padding: 0.5em;overflow: auto;margin-left: 2em"><?php echo $row['sample_output']; ?>></pre>
          </div>
          </form>
            
          </div>
          
          
          </div>
          </div>
			
</div>
                </div>
    </div>
            </div>
         <?php  }
                        ?>
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
<script src="js/functions.js"></script>  </body>
</html>
