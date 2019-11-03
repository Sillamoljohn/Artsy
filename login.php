
<?php
include 'dbcon.php';
//session_start();
if(isset($_POST['submit']))
{
	 
	
$a=$_POST["email"];
$b=$_POST["password"];
$b=SHA1($b);
 

 

$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$us_id=$row['us_id'];
	?>

	<?php
	if($a==  $row['email']&&$b==$row['pass'])
	{
$_SESSION['email']= $a;
			if($a==  $row['email']&&$b==$row['pass']&&$row['role_id']=='2')
	{
$_SESSION['email']= $a;
$_SESSION['us_id']=$us_id;


		 header('location:userprofile.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE `us_id`=	$us_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	else if($a==  $row['email']&&$b==$row['pass']&&$row['role_id']=='3')
	{
  $_SESSION['us_id']=$us_id;
		 header('location:artistprofile.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE `us_id`=	$us_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}
  else if($a==  $row['email']&&$b==$row['pass']&&$row['role_id']=='1')
	{

		$_SESSION['us_id']=$us_id;
		 header('location:admin.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE `us_id`=  $us_id";
         $result=mysqli_query($con,$sql1);
		 break;
	}

	}
	else if($a!=  $row['email']&&$b!=$row['pass'])
	{
   
echo "<script> alert('Invalid username or password..!') </script>";
		header('location:login.php');
	}
	?>



	<?php
}
	
}




?>

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artsy Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:700,400">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        
        <link rel="stylesheet" href="assets/css/media-queries.css">
		<link rel="stylesheet" href="ma.css">
       

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
		 <link rel="stylesheet" href="ma.html">
		  <script src='https://www.google.com/recaptcha/api.js'></script>
        
<style>


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
	width:230px;
	height:230px;
	position:absolute;
	left:630px;
	bottom:200px;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

</style>

    </head>

    
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
						
						<li class="active">
							<a href="#"><span aria-hidden="true" class="icon_tools"></span><br>Login</a>
						</li>
						
						
						
                       
				  </ul>
				</div>
			</div>
		</nav>

       
        	
                
                
	                <div class="col-sm-12 ">
                    
	                  
                        
		

        
  
 <body  style="background-color:#5D6D7E;" >
  
		
		
		
<div class="log" style="margin-left: -115px;margin-left: 160px" >

<h1>Login</h1>

<p>Please enter your Username and <br/>password</p>
<form action="#" method="post" name="login_user" >
<div class="form-group">
<label for="contact-name">Email</label>

<input class="fi" type="text" placeholder="Enter Email" name="email" id="email" required> 
</div>
<div class="form-group">
<label for="contact-email"> Password</label>
<input class="fi" type="password" placeholder="Enter Password" name="password" id="password" required">
</div> 
 
<input class="bttn" type="submit" value="LOGIN"  name="submit" id="submit">



</div>

</div>
        
</body>

</html>