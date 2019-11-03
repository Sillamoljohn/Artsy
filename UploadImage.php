<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>
<?php
if(isset($_POST['Upload']))
{
	$id = $_REQUEST['id'];
$j="Upimg/".time()."".htmlspecialchars($_FILES['Upimg']['name']);
               move_uploaded_file($_FILES['Upimg']['tmp_name'], $j); 
$qry="update drawart set image='$j' where draw_id='$id'";
$res=mysqli_query($con,$qry);
                
echo '<script type="text/javascript">'; 
echo 'alert("Image Uploaded Successfully!!");'; 
echo 'window.location = "drawrequest.php";';
echo '</script>';;
	 

}
 ?>

<html lang="en">

    <head>
        <style>
table {
    border-collapse: collapse;
   
   
}

th, td,tr {
    
    padding: 50px;
}
</style>
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
							<a href="artistprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>
						</li>
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_tools"></span><br>Logout</a>
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
                        <h1>User Request Image settings</h1>
                    </div>
                </div>
            </div>
        </div>
		<body>
		
		<br>
		<center>   
<table align="center" height="150" width="300">
<form action="#" name="myform" id="form" method="post" enctype="multipart/form-data">
  
	
  <tr></tr>
  <tr>
    <td > <h5 style="color:#8E44AD;font-weight:bold;">Upload image </td>
    <td><input type="file" name="Upimg" style="border-color:white;color:#8E44AD;font-weight:bold" id="Upimg"  onchange="fileCheckk(this);" required> </td></tr><br>
	<tr>
	<center><td><input type="submit" name="Upload" id="Upload" style = "border-radius: 50%;background-color:black;color: white;"></td></center>
	</tr>
    
  </form>
  
 
</table>
<script src="js/jquery.js"></script>

		<script>
			function fileCheckk(obj) {
         // alert("aaa");
		          var fileExtension = ['jpg','png','jpeg'];
            if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1){
				//alert("dd");
                alert("Only '.jpg','.png','.jpeg' formats are allowed.");
				 document.getElementById('Upimg').value='';
				  $("#Upimg").focus();
				return false;
			}
                
        }
</script>
              

		</body>
		</html>