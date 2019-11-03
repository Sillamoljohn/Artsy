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
function Addr(){
            var address= form1.address.value;
                if((address===null)||(address.length<3)){
                    
                    alert("Enter Full Address");
                    form1.address.focus();
                    return false;
                }
                var address=/^[a-zA-Z]{3,20}$/;
                if(form1.address.value.search(address)==-1)
                 {
                      alert("Enter a Valid Address");
                      form1.address.focus();
                      
                      return false;
                    }
                if((address.length>150)){
                   
                    alert("Address Must Not Exceed 150 Characters");
                  form1.address.focus();
                    return false;
                }
        }
		 
function Edu(){
            var edu= form1.edu.value;
                if((edu===null)||(edu.length<3)){
                    
                    alert("Enter  Full Qualification");
                    form1.edu.focus();
                    return false;
                }
                var edu=/^[a-zA-Z]{3,20}$/;
                if(form1.edu.value.search(edu)==-1)
                 {
                      alert("Enter a Valid Qualification");
                      form1.edu.focus();
                      
                      return false;
                    }
                if((edu.length>50)){
                   
                    alert("Qualification Must Not Exceed 50 Characters");
                  form1.edu.focus();
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
                
				
	var   address= form1.address.value;
                if((address===null)||(address.length<3)){
                    form1.address.style.border = "1px solid red";
                    alert("Enter Full Address");
                    form1.address.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.address.value.search(address)==-1)
                 {
                      alert("Enter a Valid Address");
                      form1.address.focus();
                      form1.address.style.border = "1px solid red";
                      return false;
                    }
                if((address.length>150)){
                    form1.address.style.border = "1px solid red";
                    alert("Address Must Not Exceed 150 Characters");
                   form1.address.focus();
                    return false;
                }
				
				
	var   edu= form1.edu.value;
                if((edu===null)||(edu.length<3)){
                    form1.edu.style.border = "1px solid red";
                    alert("Enter Full Qualification");
                    form1.edu.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(form1.edu.value.search(edu)==-1)
                 {
                      alert("Enter a Valid Qualification");
                      form1.edu.focus();
                      form1.edu.style.border = "1px solid red";
                      return false;
                    }
                if((edu.length>50)){
                    form1.edu.style.border = "1px solid red";
                    alert("Qualification Must Not Exceed 50 Characters");
                   form1.edu.focus();
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
	
