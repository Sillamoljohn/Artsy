
<?php
include 'dbcon.php';
//session_start();
if(isset($_POST['submit']))
{
	$a=$_POST["fname"];
	$b=$_POST["lname"];
	$c=$_POST["email"];
	$d=$_POST["password"];
	$e=$_POST["gr"];
	$f=$_POST["dob"];
	$g=$_POST["mbno"];
	$h=$_POST["address"];
	$t=$_POST["edu"];
	$i=$_POST["country"];
	$j=$_POST["state"];
	$k=$_POST["city"];
	$m="photo1/".time()."".htmlspecialchars($_FILES['photo1']['name']);
               move_uploaded_file($_FILES['photo1']['tmp_name'], $m);
			   $sql2="select * from `login` where email='$c'";
	$result2=mysqli_query($con,$sql2)or die(mysql_error());
	$arr=mysqli_fetch_array($result2);


	$sql1="INSERT INTO `login`(`email`, `pass`, `role_id`) VALUES ('$c','$d',3)";
	$result1=mysqli_query($con,$sql1)or die(mysqli_error($con));;


	$logid="SELECT `us_id` FROM `login` WHERE `email`='$c'";
	$result2=mysqli_query($con,$logid);
	while($row=mysqli_fetch_array($result2))
	{
		$p=$row["us_id"];
	}

	$sql="INSERT INTO `uregistration`( `us_id`, `fnam`, `lnam`, `gender`, `dob`, `mbno`, `address`, `edu`, `country`, `state`, `city`, `img`, `email`) VALUES ('$p','$a','$b','$e','$f','$g','$h','$t','$i','$j','$k','$m','$c')";
	$result3=mysqli_query($con,$sql);

	//echo"<script>alert('Data Entered Successfully');</script>)";

}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
		
		<style>
		
		.silla{
			style = "margin: 0;
    padding: 0 6px;
    vertical-align: middle;
    background: none;
    border: 1px solid #ddd;
    font-family: 'Open Sans', sans-serif;
    font-size: 13px;
    font-weight: 400;
    color: #888;
	width:215px;
    font-style: italic;
    -moz-border-radius: 0; -webkit-border-radius: 0; border-radius: 0;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
		}
		</style>
		
		
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

	<script>

	
function fName(){
            var fname= form1.fname.value;
                if((fname===null)||(fname.length<3)){
                    
                    alert("Enter Full Name");
                    form1.fname.focus();
                    return false;
                }
                var fname=/^[a-zA-Z]{3,20}$/;
                if(form1.fname.value.search(fname)==-1)
                 {
                      alert("Enter correct  Name");
                      form1.fname.focus();
                      
                      return false;
                    }
                if((fname.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                  form1.fname.focus();
                    return false;
                }
        }
		
 function lName(){
            var lname= form1.lname.value;
                if((lname===null)||(lname.length<3)){
                    
                    alert("Enter Full Name");
                    form1.lname.focus();
                    return false;
                }
                var lname=/^[a-zA-Z]{3,20}$/;
                if(form1.lname.value.search(lname)==-1)
                 {
                      alert("Enter correct  Name");
                      form1.lname.focus();
                      
                      return false;
                    }
                if((lname.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                  form1.lname.focus();
                    return false;
                }
        }
		 
		
        function gEmail(){
           email=form1.email.value;
                var atpos = email.indexOf("@");
                var dotpos = email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>email.length)){
                    
                    form1.email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
        }
        function gPhone(){
            var mbno=form1.mbno.value;
                if(isNaN(mbno)){
                    
                    alert("Phone Number Only Contain Digits");
                    form1.mbno.focus();
                    return false;
                }
                if(mbno.length !== 10){
                   form1.mbno.focus();
                    alert("Phone Number must be 10 Digits");
                    
                    return false;
                }
        }
        
         function gPwd(){
            var password= form1.password.value;
               
                if(password.length < 4 ){
                    form1.password.style.border = "1px solid red";
                    form1.password.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                
        } 
         
        
        function  addUser(){
			
			
       var fname= form1.fname.value;
                if((fname===null)||(fname.length<3)){
                    form1.fname.style.border = "1px solid red";
                    alert("Enter Full Name");
                    form1.fname.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.fname.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      form1.fname.focus();
                      form1.fname.style.border = "1px solid red";
                      return false;
                    }
                if((fname.length>25)){
                    form1.fname.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                   form1.fname.focus();
                    return false;
                }
				
				
				
				
	   var   lname= form1.lname.value;
                if((lname===null)||(lname.length<3)){
                    form1.lname.style.border = "1px solid red";
                    alert("Enter Full Name");
                    form1.lname.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.lname.value.search(lname)==-1)
                 {
                      alert("Enter correct  Name");
                      form1.lname.focus();
                      form1.lname.style.border = "1px solid red";
                      return false;
                    }
                if((lname.length>25)){
                    form1.lname.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                   form1.lname.focus();
                    return false;
                }
                
				
				
				
       var mbno=form1.mbno.value;
                if(isNaN(mbno)){
                    form1.mbno.style.border = "1px solid red";
                    alert("Phone Number Only Contain Digits");
                   form1.mbno.focus();
                    return false;
                }
                if(mbno.length !== 10){
                    form1.mbno.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    form1.mbno.focus();
                    return false;
                }
                
                
                
                
          var email=form1.email.value;
                var atpos = email.indexOf("@");
                var dotpos = email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>email.length)){
                    
                   form1.email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
				if(document.form1.dob.value=="")
   {
      alert("enter your date of birth");
	 document.form1.dob.focus();
	 return false;
	}
	if((document.form1.gr[0].checked==false)&&(document.form1.gr[1].checked==false))
	{
	   alert("please select the gender");
	   return false;
	 }
       
if(document.form1.address.value=="")
   {
      alert("enter your address");
	 document.form1.address.focus();
	 return false;
	 
	}
	if(document.form1.city.value=="")
   {
      alert("enter your city name");
	 document.form1.city.focus();
	 return false;
	 
	}
	if(document.form1.edu.value=="")
   {
      alert("enter your Qualification name");
	 document.form1.edu.focus();
	 return false;
	 
	}	   
                
            var password= form1.password.value;
                
  
              
                if(password.length < 4 ){
                   form1.password.style.border = "1px solid red";
                   form1.password.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                
            }
			
        </script>
	
	 

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
                        
                        
 <form name="form1" action="#" method="POST" id="form1" enctype="multipart/form-data" onsubmit="return addUser()">
                                <form action="">	                    	
								
						<div class="form-group">
	                  		<label for="contact-name">Firstname</label>
	                       	<input type="text" name="fname"  id="fname" placeholder="Enter your  Firstname..." class="contact-name form-control""contact-name" required onChange="return fName()" >
	                     </div>
						  
	                    <div class="form-group">
	                    	<label for="contact-email">Lastname</label>
	                	    <input type="text" name="lname" id="lname" placeholder="Enter your  Laststname..." class="contact-email form-control" required onChange="return lName()" >
	                     </div>
	                    
	                    <div class="form-group">
	                        <label for="contact-subject">Email</label>
	              	        <input type="email" name="email" id="email" placeholder="Enter your email..." class="contact-subject form-control" required onChange="return gEmail()" >
	                     </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Password</label>
	          	<input type="password" name="password" id="password" placeholder="Enter your password..." class="contact-message form-control" required onChange="return gPwd()" >
	                        </div> 
							<div class="form-group">
	<label for="contact_gender">Gender</label> &nbsp; &nbsp;
	
	<input type="radio" name="gr"id="gr" value="Male" >
            Male
            &nbsp;
            <input name="gr"  id="gr" type="radio" value="Female"  />Female</div>
			<div class="form-group">
			
<div class="form-group">		  
    <label for="contact-subject">Date Of Birth</label>
	 <input type="date" class ="silla" name="dob" id="dob"  placeholder="Enter your Date Of Birth..."   max="2007-01-01" min="1945-01-01" onkeydown="return false">
     </div>
	 <div class="form-group">
	 <label for="contact-message">Mobile number</label>
	<input type="text" name="mbno" id="mbno" placeholder="Enter your mobile number..." class="contact-message form-control" required onChange="return gPhone()">
    </div>
	<div class="form-group">
	<label for="contact-subject">Adress</label>
	<textarea name="address" id="address" rows="3" cols="5" placeholder="Enter your address..." class="contact-subject form-control" ></textarea>
    </div>
	<div class="form-group">
	<label for="contact-subject">Education</label>
	<textarea name="edu" id="edu" rows="3" cols="5" placeholder="Enter your address..." class="contact-subject form-control" ></textarea>
    </div>
	<div class="form-group">
	<label for="contact-message">Country</label>
	<select name="country" onchange="getId(this.value);">
     <option value="">select country</option>
     <?php
     $query = "SELECT * FROM country";
     $results = mysqli_query($con, $query);

     foreach ($results as $country) {
       ?>
       <option value="<?php echo $country["con_id"]; ?>"> <?php echo $country["con_name"]; ?></option>

<?php
     }
     ?>
   </select>
	</div>
	
	
<div class="form-group">
	<label for="contact-message">State</label>
	<select name="state" id="state"  >
        <option value=" ">state</option>

     </select>
	 
 </div>
 
 
	 <div class="form-group">
	 <label for="contact-name">City</label>					 
	<input type="text" name="city"  id="city" placeholder="Enter your  City..." class="contact-name form-control""contact-name">
						 </div>
	                    <div>	<label for="contact_image"> Select image to upload: </label>
   <input type="file" name="photo1" id="photo1"></div>
	                       <center> <button type="submit"  name="submit" class="btn">Register</button></center>
                           <p>Already have an account ? <a href="services.html">Login</a></p>
	                    </form>
                        
                         
                        
                        
                        
                  </div>
	            </div>
	        </div>
        </div>

       
	               
	        </div>
        </div>
<script src="js/jquery.js"></script>

<script>
function getId(val){
  $.ajax({
    type: "POST",
    url: "getdata.php",
    data: "con_id="+val,
    success: function(data){
      $("#state").html(data);

}
});
}
</script>


<!-- Footer --><!-- Javascript -->

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

    </body>

</html>