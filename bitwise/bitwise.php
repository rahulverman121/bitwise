<html>
<head>
<title>Registration and login form</title>
<meta name="viewport" content="width="device-width, initial-scale = 1.0">
<link rel="icon" type="image/jpg" href="biwiselogo.jpg">
<style>
body {
	background-color : black ;
}
header { 
	z-index : 9 ;
	top : 0 ;
	position : fixed ; 
	width : 100% ;
	background-color : white ;
	color : black ;
	display : flex ;
	align-items : center;
}
header>img {
	margin : 1rem 5% 1rem 5% ;
}
nav { 
	position : absolute ;
	right : 10% ;
	text-spaccing : 1rem ;
}
nav a:link{
	text-decoration : none ;
	margin : auto 0.5rem auto 0.5rem ;
	
}
.btn {
	background-color : #2ec4b6 ;
	color : white ;
	border : 1px solid #2ec4b6 ;
	border-radius : 15px ;
	padding :  0.7rem 1rem 0.7rem 1rem ;
}
#errcontainer { 
	padding : 1rem ;
	color : red ;
}
main {  
	margin : 5rem 25% 1rem 25% ;
	padding : 3rem ;
	top : 50% ;
	left :50% ;
	color	: black ;
	background-color : white ;
	width : 50% ; 
	opacity : 0.8 ;
 }
label {
	font-weight : bold ;
	font-size :1rem ;
 }
sup {
	color : red ;
}
li { 
	bullet-type : none ;
}
</style>
<script>
function validate() {
let regform = document.registrationform ;
let err=document.getElementById("errcontainer");
if(regform.fname.value=="" || regform.lname.value=="" ) {
	err.innerHTML = "Name cann't be empty.";
	regform.fname.focus();
	return false;
			}
var mail = regform.email.value;

if(mail=="") {
	err.innerHTML = "Email cann't be empty."+d;
	regform.email.focus();
	return false;
	}
else if(mail.indexOf("@")<2 || (mail.lastIndexOf(".") - mail.indexOf("@"))<2 ) {
	err.innerHTML = "Enter Valid Email.";
	regform.email.focus();
	return false;
	}
if(regform.dob.value=="") {
	err.innerHTML = "DoB cann't be empty.";
	regform.dob.focus();
	return false;
	}
if(regform.mobile.value=="") {
	err.innerHTML = "Mobile no. cann't be empty.";
	regform.mobile.focus();
	return false;
	}
else if(regform.mobile.value.length != 10) {
	err.innerHTML = "Mobile no. should have 10 digits.";
	regform.mobile.focus();
	return false;
	}
else if(isNaN(regform.mobile.value) ) {
	err.innerHTML = "Mobile no. should only contain numbers.";
	regform.mobile.focus();
	return false;
	}

if(regform.password.value=="") {
	err.innerHTML = "Password cann't be empty.";
	regform.password.focus();
	return false;
	}
}
</script>
</head>
<body>
<header>
<img src="logo1.jpg">
<nav>
<a href="#login" class="btn">Login</a>
<a href="#SignUp">SignUp</a>
</nav>
</header>

<main>
<p style="color:red;"><sup>*</sup>&nbspRequired</p>
<section id="errcontainer">
</section>
<form action="registration.php" name="registrationform" onsubmit="return validate()" method="post">

<label><sup>*</sup>Name&nbsp </label>
<input type="text" name="fname" placeholder="First Name" >&nbsp
<input type="text" name="lname" placeholder="Last Name" ></br></br>
<label><sup>*</sup>Email&nbsp</label>
<input type="email" name="email" placeholder="Email Id" ></br></br>
<label><sup>*</sup>DoB&nbsp</label>
<input type="date" name="dob" ></br></br>
<label><sup>*</sup>Mobile No.&nbsp</label>
<input type="tel" name="mobile" placeholder="Mobile Number" ></br></br>
<label><sup>*</sup>Password&nbsp</label>
<input type="password" name="password" placeholder="Password" ></br></br>
<label><sup>*</sup>Select Avatar&nbsp</label>
<select name="avatar">
<option>avatar</option>
</select></br></br>
<label>Description&nbsp</label>(Optional Field)</br>
<textarea rows="6" cols="26" placeholder="Description.." name="description"></textarea></br></br>
<input type="reset" value="Reset" class="btn">
<input type="submit" value="Submit" class="btn">
</form>

</main>

</body>
</html