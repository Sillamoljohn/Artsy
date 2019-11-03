
<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>
<html lang="en">

    <head>
	          
<script async="async" src="https://www.google.com/adsense/search/ads.js"></script>

<!-- other head elements from your page -->

<script type="text/javascript" charset="utf-8">
(function(g,o){g[o]=g[o]||function(){(g[o]['q']=g[o]['q']||[]).push(
  arguments)},g[o]['t']=1*new Date})(window,'_googCsa');
</script>

        
	
	
	
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artsy Userhome </title>

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
							<a href="changepass.php"><span aria-hidden="true" class="icon_tools"></span><br>Settings</a>
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
                        <h1>Artsy User Home</h1>
                    </div>
                </div>
            </div>
        </div>
		
		
        
<body>
       
        
<table height="300">

  <tr>
    <td width="290" ><div align="center"><h1> User Profile</h1><a href="userview.php"><img src="profile.png" style="border-radius: 50%;" width="230px" height="230px" alt="no image found"  /></a></div></td>
   
    <td width="290"><div align="center"><h1>My Cart</h1><a href="mycart.php"><img src="my.png"style="border-radius: 50%;" width="230px" height="230px" alt="no image found"   /></a></div></td>
   
   <td width="290"><div align="center"><h1> Orders Completed</h1><a href="ordercomplete.php"><img src="order.png" style="border-radius: 50%;" width="230px" height="230px" alt="no image found"   /></a></div></td>
       <td width="290"><div align="center"><h1> Bid Status</h1><a href="bidstatus.php"><img src="sta.png" style="border-radius: 50%;" width="230px" height="230px" alt="no image found"   /></a></div></td>

  </tr>
</table>


          
<div id='afscontainer1'></div>

<script type="text/javascript" charset="utf-8">

  var pageOptions = {
    "pubId": "pub-9616389000213823", // Make sure this the correct client ID!
    "query": "art",
    "adPage": 1
  };

  var adblock1 = {
    "container": "afscontainer1",
    "width": "1500",
    "number": 1
  };

  _googCsa('ads', pageOptions, adblock1);

</script>

        
        
</body>

</html>