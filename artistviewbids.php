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
