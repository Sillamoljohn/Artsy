<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>



<?php

$email=$_SESSION['email'];

//$c=$_POST["hiddenureg"];
//echo $c;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:700,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
	

		

    <body>

        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img src="assets/img/logo.png" style="background-position:left top";>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">						
						<li>
							<a href="index.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						
						
						<li>
							<a href="contact.html"><span aria-hidden="true" class="icon_mail"></span><br>Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">
                        <span aria-hidden="true" class="icon_profile"></span>
                  
                    </div>
                </div>
            </div>
        </div>
		
        <div class="gl_user_details_main_container">
            <h2 align="center">Bid Details</h2>
            
            <?php
            //$id=$_REQUEST['sart_id'];
			//echo $id;
            
            ?>
      <table border="1" align="center" cellpadding="10px" style="font-size:22px; border-collapse: collapse; border: 4px solid green;">
                    <tr><th>S.No</th>
                        <th>User Name</th>
                        <th>Offer</th>
                        <th></th>
                    </tr>
					<?php
					$result =mysqli_query($con,"SELECT `aregistration`.`fname`,`aregistration`.`lname`,
			`bid`.`amount`,`auctionart`.`sartname` FROM `auctionart`,`bid`,`aregistration` WHERE
			`bid`.`sart_id`=`auctionart`.`sart_id` AND`aregistration`.`areg`=`auctionart`.`areg`;");
              
			  
$t=mysqli_fetch_array($result);

                    $un=$t['fname'];
                    $ln=$t['lname'];
                    $amt=$t['amount'];
					$artnm=$t['sartname'];
					echo $un;
					
					//--------
					
					//--------
				  
                            
            ?>    
                                <tr><td><?php echo $i;?></td>
                                    
                                    <td><?php echo $t['fname']; ?></td>
                                    
                                    <td><a href="bidaccept.php?bid_id=<?php echo $t['']; ?> " style="color:green;">Accept</a></td>
                                </tr>
            <?php
                                $i=$i+1;
                         
                    }
                }
             ?>
                </table>
           
            
        </div>
		
		
		
		
		
		
		
		</body>
		</html>