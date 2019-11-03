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
                        <h1> Artist Register</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-3" >
                </div>
	                <div class="col-sm-3 about-us-text wow fadeInLeft">
                    
	                    <h3>&nbsp;</h3>
                        
                        
 <form name="myform" action="#" method="POST" id="form" enctype="multipart/form-data">
                                <form action="">	                    	<div class="form-group">
	                  		<label for="artist-name">Artist Name</label>
	                       	<input type="text" name="aname"  id="aname" placeholder="Enter   Artistname..." class="contact-name form-control""contact-name"required>
	                      </div>
	                    	<div class="form-group">
	                    		<label for="art_name">Art Name</label>
	                	<input type="text" name="artname" id="artname" placeholder="Enter Artname..." class="contact-email form-control" id="contact-email"required>
	                        </div>
	                        <div class="form-group">
	                        	<label for="art_category">Art Category</label>
	              	<input type="text" name="artcat" id="artcat" placeholder="Art Category..." class="contact-subject form-control" id="contact-subject"required>
	                        </div>
	                        <div class="form-group">
	                        	<label for="art_details">Art Details</label>
	          	<textarea name="artdetails" id="artdetails" rows="3" cols="5" placeholder="Enter Art Details..." class="contact-subject form-control" required></textarea>
	                        </div> 
							
	 <div class="form-group">
	 <label for="art_size">Size</label>
	<input type="text" name="size" id="size" placeholder="Enter Art size..." class="contact-message form-control"required>
    </div>
	<div class="form-group">
	<label for="art_price">Price</label>
	<input type="text" name="price" id="price" placeholder="Enter art price..." class="contact-subject form-control" id="contact-subject"required>
	
    </div>
	
	                    <div>	<label for="contact_image"> Upload Your ArtWork: </label>
   <input type="file" name="artimg" id="artimg"></div>
	                       <center> <button type="submit"  name="submit" class="btn">Post An ArtWork</button></center>
                           
	                    </form>
                        
                         
                        
                        
                        
                  </div>
	            </div>
	        </div>
        </div>

       
	              
	        </div>
        </div>




    </body>

</html>