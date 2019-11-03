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
	$i=$_POST["country"];
	$j=$_POST["state"];
	$k=$_POST["city"];
	$m="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
               move_uploaded_file($_FILES['photo']['tmp_name'], $m);

	$sql2="select * from `login` where email='$c'";
	$result2=mysqli_query($con,$sql2)or die(mysql_error());
	$arr=mysqli_fetch_array($result2);
	if(count($arr) > 0)
	{
		echo"<script>alert('Email already exit..!!')</script>";
	}
	else{
	$d=SHA1($d);
		$sql1="INSERT INTO `login`(`email`, `pass`, `role_id`) VALUES ('$c','$d','2')";
		$result1=mysqli_query($con,$sql1)or die(mysqli_error($con));	
		$sql="SELECT * FROM `login`";
		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($result))
		{
			$z=$row['us_id'];
		}

		$sql="INSERT INTO `aregistration` ( `us_id`, `fname`, `lname`, `gender`, `dob`, `mbno`, `address`, `country`, `state`, `city`, `img`,`email` )VALUES('$z','$a','$b','$e','$f','$g','$h','$i','$j','$k','$m','$c')";
		$result3=mysqli_query($con,$sql);

		echo"<script>alert('Registration Successfull')</script>";
	}
header("location:registration.php");		
}
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
function Adra(){
            var address= form1.address.value;
                if((address===null)||(address.length<3)){
                    
                    alert("Enter Full Address");
                    form1.address.focus();
                    return false;
                }
                var address=/^[a-zA-Z]{3,20}$/;
                if(form1.address.value.search(address)==-1)
                 {
                      alert("Enter correct  Address");
                      form1.address.focus();
                      
                      return false;
                    }
                if((address.length>100)){
                   
                    alert("Address Must Not Exceed 99 Characters");
                  form1.address.focus();
                    return false;
                }
        }
		 
		
		 function City(){
            var city= form1.city.value;
                if((city===null)||(city.length<3)){
                    
                    alert("Enter Full City Name");
                    form1.city.focus();
                    return false;
                }
                var city=/^[a-zA-Z]{3,20}$/;
                if(form1.city.value.search(city)==-1)
                 {
                      alert("Enter correct City  Name");
                      form1.city.focus();
                      
                      return false;
                    }
                if((city.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                  form1.city.focus();
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
			
		 var address= form1.address.value;
                if((address===null)||(address.length<3)){
                    form1.address.style.border = "1px solid red";
                    alert("Enter Full Address");
                    form1.address.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.address.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Address");
                      form1.address.focus();
                      form1.address.style.border = "1px solid red";
                      return false;
                    }
                if((address.length>100)){
                    form1.address.style.border = "1px solid red";
                    alert("  Address Must Not Exceed 99 Characters");
                   form1.address.focus();
                    return false;
                }
				
				
       
var city = form1.city.value;
                if((city===null)||(city.length<3)){
                    form1.city.style.border = "1px solid red";
                    alert("Enter Full City Name");
                    form1.city.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.city.value.search(city)==-1)
                 {
                      alert("Enter correct  City Name");
                      form1.city.focus();
                      form1.city.style.border = "1px solid red";
                      return false;
                    }
                if((city.length>25)){
                    form1.city.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                   form1.city.focus();
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
                        <h1>Register</h1>
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
                <div class="col-sm-3" >                </div>
	                <div class="col-sm-3 about-us-text wow fadeInLeft">
	                  <form name="form1"  method="POST" action="#" id="form" enctype="multipart/form-data" onSubmit="return addUser()">
                            <div class="form-group">
	                  		<label for="contact-name">Firstname</label>
	                       	<input type="text" name="fname"  id="fname" placeholder="Enter your  Firstname..." class="contact-name form-control""contact-name" required onChange="return fName()" >
	                      </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Lastname</label>
	                	<input type="text" name="lname" id="lname" placeholder="Enter your  Laststname..." class="contact-email form-control" id="contact-email" required onChange="return lName()">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Email</label>
	              	<input type="email" name="email" id="email" placeholder="Enter your email..." class="contact-subject form-control" id="contact-subject" required onChange="return gEmail()">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Password</label>
	          	<input type="password" name="password" id="password" placeholder="Enter your password..." class="contact-message form-control" id="contact-message"  required onChange="return gPwd()" >
	                        </div>
<div class="form-group">
	<label for="contact_gender">Gender</label> &nbsp; &nbsp;
	
	<input type="radio" name="gr"id="gr" value="Male" >
            Male
            &nbsp;
            <input name="gr"  id="gr"type="radio" value="Female"  />Female</div>
			<div class="form-group">
			
<div class="form-group">		  
     <label for="contact-subject">Date Of Birth</label>
	 <input type="date" name="dob" id="dob" placeholder="Enter your Date Of Birth..." class="contact-subject form-control" max="2006-12-31" min="1945-01-01" onKeyDown="return false"  >
 </div>
	 
<div class="form-group">
	 <label for="contact-message">Mobile number</label>
	<input type="text" name="mbno" id="mbno" placeholder="Enter your mobile number..." class="contact-message form-control" required onChange="return gPhone()">
 </div>
	
<div class="form-group">
	<label for="contact-subject">Adress</label>
	<textarea name="address" id="address" rows="3" cols="5" placeholder="Enter your address..." class="contact-subject form-control" required onChange="return Adra()" ></textarea>
    </div>
	<div class="form-group">
 </div>
	
<div class="form-group">
	<label for="contact-message">Country</label>
	<select name="country" onChange="getId(this.value);">
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
	<input type="text" name="city"  id="city" placeholder="Enter your  City..." class="contact-name form-control""contact-name" required onChange="return City()">
						 </div>
	                    <div>	<label for="contact_image"> Select image to upload: </label>
   <input type="file" name="photo" id="photo" required onChange="fileCheckk(this)"></div>
    							
	                      <div> <center> <button type="submit" name="submit" value="" class="btn">Register</button></a></center>
                           <p>Already have an account ? <a href="login.php">Login</a></p></div>
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
<script>
		function fileCheckk(obj) {
            var fileExtension = ['jpg','png','jpeg'];
            if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1){
                alert("Only '.jpg','.png','.jpeg' formats are allowed.");
				 document.getElementById('photo').value='';
				  $("#photo").focus();
				return false;
			}
                
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