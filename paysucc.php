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



                
                <style>
				
				
				div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
	background-color:#CCCCCC;
	height:270px;
	border-radius:13px 13px 13px 13px;
}




/*div.img img {
    height:250x;
	width:180px;
}*/

div.desc {
    padding: 1px;
    text-align: center;
	font-family:Benguiat Bk BT;
        color: black;
}
.button1 {
  display: inline-block;
  padding: 5px 10px;
  font-size: 13px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: 5px;
  color: white;
  background-color: #0000cc;
  border: 1px solid #000000;
  border-radius: 20px;
 
}

.button1:hover {background-color: black;
color:white;}

.button1:active {
  background-color: #0000cc;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#txtbox{
	border-color:#CCCCCC;
	padding: 1px;
    text-align: center;
	font-family:Benguiat Bk BT;
        color: black;
}
.style3 {
	color: #FF0099;
	font-size: 50px;
	font-weight: bold;
	font-style: italic;
	font-family: "Times New Roman", Times, serif;
}
                .style4 {color: #0000FF}
                .style5 {color: #000000}
                </style>
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
						<span class="icon-bar"></span>					</button>
					<img src="assets/img/logo.png" style="background-position:left top";>				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">						
						<li >
							<a href="userprofile.php"><span aria-hidden="true" class="icon_house"></span><br>Home</a>						</li>
						
						<li >
							<a href="buyerhome.php"><span aria-hidden="true" class="icon_house"></span><br>Buy Arts</a>						</li>
						
						<li class="active">
							<a href="#"><span aria-hidden="true" class="icon_house"></span><br>Artists</a>						</li>
						
						
						<li>
							<a href="logout.php"><span aria-hidden="true" class="icon_tools"></span><br>Logout</a>						</li>
					</ul>
				</div>
			</div>
		</nav>
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 page-title wow fadeIn">                    </div>
                </div>
            </div>
        </div>
	<p align="left" class="style3">Thank you for purchasing our artwork.. <img src="ss.jpg" alt="smile" width="124" height="124"></p>
<p align="left"><span class="testimonial-list style3"> Your Payment is successfull......</span></p>
    <p align="left" class="style5">Your art will be shipped in 2 days and it will be delivered within a week...</p>
    <p align="left"><span class="style5">In case of return or refund please sent an email to</span> <span class="style4">artsy@gmail.com</span></p>
    <form name="form1" method="post" action="buyerhome.php">
      <label for="button"></label>
      <input type="submit" name="button" class="button1" id="button" value="Continue">
    </form>
    <p align="center">&nbsp;</p>
    <p align="left">&nbsp;</p>
</body>
</html> 