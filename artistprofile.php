<?php
include 'dbcon.php';
if(!isset($_SESSION['email'])){
	header("location:index.php");
}
?>



<!DOCTYPE html>
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
        <title>Artsy Artistprofile</title>

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
						<li
						class="active">
							<a href="artistprofile.php"><span aria-hidden="true" class="icon_house"></span><br>HOME</a>
						</li>
						
						
						<li>
						
							<a href="drawrequest.php"><span aria-hidden="true" class="icon_house"></span><br>Draw Arts</a>
						</li>
						
						
						<li>
							<a href="Logout.php"><span aria-hidden="true" class="icon_profile"></span><br>LOGOUT</a>
						</li>
						<li>
							<a href="changepass2.php"><span aria-hidden="true"  class="icon_tools"></span><br> CHANGE PASSWORD</a>
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
                        <h1>Artsy Artist Home</h1>
                      
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Full Width Text -->
    <!-- Services -->
    <!-- Services Half Width Text -->
<div class="services-half-width-container">
        	<div class="container">
	            <div class="row"></div>
          </div>
        </div>

        <!-- Call To Action -->
    <!-- Footer --><!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
         <script src="assets/js/scripts.js"></script>
 <body>    
 
        
<table height="300">


  <tr>
    <td width="283"><div align="center"><h1> User Profile</h1><a href="artistview.php"><img src="man.png" style="border-radius: 50%;" width="230px" height="230px" alt="no image found"  /></a></div></td>
	<td width="290"><div align="center"><h1> Post an Artwork</h1><a href="artdetail.php"><img src="arts.jpg" style="border-radius: 50%;" width="230px" height="230px" alt="no image found"   /></a></div></td>
    <td width="290"><div align="center"><h1>My Arts</h1><a href="artistproductview.php"><img src="aart.png"style="border-radius: 50%;" width="230px" height="230px" alt="no image found"   /></a></div></td>
	<td width="290"><div align="center"><h1>Auction Requests</h1><a href="artistsellview.php"><img src="car.png"style="border-radius: 50%;" width="230px" height="230px" alt="no image found"   /></a></div></td>

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

        

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi,ml,ta', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        

        
</body>

</html>