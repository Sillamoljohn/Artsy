<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>
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
						<li class="active">
							<a href="admin.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						
						<li>
							<a href="Logout.php"><span aria-hidden="true" class="icon_comment"></span><br>LogOut</a>
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
                        <h1>Admin Home</h1>
                    </div>
                </div>
            </div>
        </div>
        <table height="400">

  <tr>
    <td width="290" ><div align="center"><h1> Add Country</h1><a href="countryreg.php"><img src="world.png" style="border-radius: 50%;" width="200px" height="200px" alt="no image found"  /></a></div></td>
    <td width="290"><div align="center"><h1> Add State</h1><a href="statereg.php"><img src="Select.png" style="border-radius: 50%;" width="200px" height="200px" alt="no image found"   /></a></div></td>
    <td width="290"><div align="center"><h1>Add Art Category</h1><a href="artcatreg.php"><img src="artca.png"style="border-radius: 50%;" width="200px" height="200px" alt="no image found"   /></a></div></td>
    <td width="290"><div align="center"><h1> Sales Details</h1><a href="sellview.php"><img src="orders-app-icon.png" style="border-radius: 50%;" width="200px" height="200px"alt="no image found"   /></a></div></td>
    <td width="290"><div align="center"><h1> View Artist</h1><a href="adminartist.php"><img src="icon-design.png" style="border-radius: 50%;" width="200px" height="200px" alt="no image found"   /></a></div></td>
  </tr>
</table>
        
        </body>
        </html>