
<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>

<?php

$id=$_SESSION['email'];
//echo $id;

$result2="SELECT * FROM uregistration where email='$id'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$ureg=$row4['ureg'];
//echo $ureg;	
}

?>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Image Uplodes </title>

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
						<li class="active" >
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						
						<li >
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_house"></span><br>Buy Arts</a>
						</li>
						
						<li >
							<a href="artistlist.php"><span aria-hidden="true" class="icon_house"></span><br> Artists</a>
						</li>
						<li >
							<a href="drawart.php"><span aria-hidden="true" class="icon_house"></span><br> Drawing art</a>
						</li>
						
						
						
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_tools"></span><br>Logout</a>
						</li>
						<li>
							<a href="Changepass.php"><span aria-hidden="true" class="icon_tools"></span><br>Settings</a>
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
                        <h1>Image Uploads</h1>
                    </div>
                </div>
            </div>
        </div>
		
		
        
<body>
       
        

<center>
<table>
<form action="#" name="myform" method="post">
<?php 

   
    $qry="select * from drawart where ureg='$ureg'";
$res=mysqli_query($con,$qry);
$i=0;
while($ar=mysqli_fetch_array($res))
{
	$count = count($ar);
	$id = $ar['draw_id'];
  
?>
<tr><td>
	<table>
		<tr><td><img src="<?php echo $ar['img'] ?>" height="100px" width="100px">
		<tr><td><a href="<?php echo $ar['img'] ?> " download><button type="button" value="Download" style = "border-radius: 12px;background-color: #4CAF50;color: white;">Download</button></a>
	</table>
	
<td>
	<table>
		<tr><td><img src="<?php echo $ar['image'] ?>" height="100px" width="100px">
		<tr><td><a href="UploadImage.php?id=<?php echo $id ?>"><button type="button"style = "border-radius: 12px;background-color: #4CAF50;color: white;" name="image" id="image">Upload</button></a></td>
	</table>
<td><input type="hidden" value="<?php echo $ar['draw_id'] ?>" name="hiddendrawid">
</td>

<?php
}
?>
			
			
</body>

        
        


</html>