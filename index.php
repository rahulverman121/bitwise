<html>
<head>
<title>bitWise | Learn & Excel </title>
<meta name="viewport" content="width=device-width, initial-scale = 1.0">
<style>
body {
	background-color : black ;
	background-image : url('bg4.jpg') ;
	background-fit : cover ;
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
	box-shadow : 0.5rem 0.5rem 0.5rem black  ;
	transition : padding 2s ;
	cursor : pointer ;
}
.btn:hover {
	padding : 1rem ;
}
.error { 
	padding : 1rem ;
	color : red ;
}

main {  
	margin : 5rem 21% 1rem 21% ;
	padding : 3rem ;
	color	: black ;
	background-color : background: #ECE9E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	width : 50% ; 
	opacity : 0.9 ;
 
}
@media  only screen and (max-width: 600px) {
    main {  
	margin : 5rem 0 1rem 0 ;
	padding : 2.2rem ;
	width : auto ;
 }
}
label {
	font-weight : bold ;
	font-size :1rem ;
 }
.error,sup {
	color : red ;
}
input { 
	margin : 0.5rem 0.5rem 0.5rem 1rem 
}
td {
	transition : border 2s ;
}
td:hover {
	border : 0.1rem solid black ;
}
#login {
	display : flex ;
	background-image : url('bg1.jpg') ;
	background-fit : contain ;
	visibility : hidden ; 
	
	position : absolute ;
}
.logimage { 
	width : 50% ;
}
.loginfrm {
	background-color : rgba(255,255,255,0.8);
	padding : 1.5rem ;
}
footer {
	padding : 1rem ;
	text-align : center ;
	background-color : black ;
	color : white ;
	opacity : 0.9 ;
	bottom : 0 ;
}
</style>
<script>

//Registration Form Validation
function validate() {
let regform = document.registrationform ;
let err=document.getElementById("signuperror");
if(regform.fname.value=="") {
	err.innerHTML = "First name cann't be empty.";
	regform.fname.focus();
	return false;
			}
else if(regform.lname.value=="" ) {
	err.innerHTML = "Last name cann't be empty.";
	regform.lname.focus();
	return false;
			}
else if(!isNaN(regform.fname.value)) {
	err.innerHTML = "First name should contain only character.";
	regform.fname.focus();
	return false;
			}
else if(!isNaN(regform.lname.value) ) {
	err.innerHTML = "Last name should contain only character.";
	regform.lname.focus();
	return false;
			}
var mail = regform.email.value;
if(mail=="") {
	err.innerHTML = "Email cann't be empty.";
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
if(regform.avatar.value=="") {
	err.innerHTML = "Select Avatar.";
	regform.avatar.focus();
	return false;
	}
}

//Avatar Selection
function selectavatar(avt,avtid) {
	document.registrationform.avatar.value=avt ;
	avtid.setAttribute('style',"border : 0.15rem solid red ;")
}

//Display login section
function displaylogin() {
	document.getElementById('signup').setAttribute('style',"visibility : hidden ; display : none ; position : absolute");
	document.getElementById('footer').setAttribute('style',"position : fixed ; margin-bottom : 0 ; width : 100%");
	document.getElementById('login').setAttribute('style',"visibility : visible ; z-index : 5 ; position : relative");
}

//Display signup section
function displaysignup() {
	document.getElementById('login').setAttribute('style',"visibility : hidden ; display : none ; position : absolute");
	document.getElementById('footer').setAttribute('style',"position : relative ; ");
	document.getElementById('signup').setAttribute('style',"visibility : visible ; z-index : 5 ; position : relative");	
}

//Login form Validation
function validatelogin() {
	let logform = document.loginform ;
	let errr=document.getElementById('loginerr');
	var email = logform.email.value;
	if(email=="") {
		errr.innerHTML = "Email cann't be empty.";
		logform.email.focus();
		return false;
		}
	else if(email.indexOf("@")<2 || (email.lastIndexOf(".") - email.indexOf("@"))<2 ) {
		errr.innerHTML = "Enter Valid Email.";
		logform.email.focus();
		return false;
		}
	if(logform.password.value=="") {
		errr.innerHTML = "Password cann't be empty.";
		logform.password.focus();
		return false;
		}
}
</script>
</head>
<body>
<header>
<img src="logo1.jpg">
<nav>
<a href="#login" class="btn" onclick="displaylogin()">Login</a>
<a href="#signup" style="font-weight:none;color:black;" onclick="displaysignup()">SignUp</a>
</nav>
</header>
<main>
<section id="signup">
<h2><u>Registration Form</u></h2></br>
<hr></hr>
<p id="signuperror" class="error"><sup>*</sup>&nbspRequired</p>
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
<input type="hidden" name="avatar" placeholder="Avatar">
</br></br>
<table>
<tr>
<td onclick="selectavatar('avatar1',this)" id="avatar1"><img src="avatar1.jpg" alt="avatar1" width="80rem"></td>
<td onclick="selectavatar('avatar2',this)" id="avatar2"><img src="avatar2.jpg" alt="avatar2" width="80rem"></td>
<td onclick="selectavatar('avatar3',this)" id="avatar3"><img src="avatar3.jpg" alt="avatar3" width="80rem"></td>
</tr>
<tr>
<td onclick="selectavatar('avatar4',this)" id="avatar4"><img src="avatar4.jpg" alt="avatar4" width="80rem"></td>
<td onclick="selectavatar('avatar5',this)" id="avatar5"><img src="avatar5.jpg" alt="avatar5" width="80rem"></td>
<td onclick="selectavatar('avatar6',this)" id="avatar6"><img src="avatar6.jpg" alt="avatar6" width="80rem"></td>
</tr>
<tr>
<td onclick="selectavatar('avatar7',this)" id="avatar7"><img src="avatar7.jpg" alt="avatar7" width="80rem"></td>
<td onclick="selectavatar('avatar10',this)" id="avatar8"><img src="avatar10.jpg" alt="avatar8" width="80rem"></td>
<td onclick="selectavatar('avatar9',this)" id="avatar9"><img src="avatar9.jpg" alt="avatar9" width="80rem"></td>
</tr>
</table>
</br></br>
<label>Description&nbsp</label>(Optional Field)</br>
<textarea rows="6" cols="32" placeholder="Description.." name="description"></textarea></br></br>
<hr></hr>
</br>
<input type="checkbox" checked> &nbspAccept Terms and Conditions
</br></br>
<center><input type="reset" value="Reset" class="btn">
<input type="submit" value="Submit" class="btn"></center>
</br>
</br>
</form>
</section>
<section id="login">
<div class="logimage">
</div>
<div class="loginfrm">
<form action="login.php" method="post" onsubmit="return validatelogin()" name="loginform">
<h2> <u>Login</u> </h2>
<hr></hr>
<p id="loginerr" class="error"><sup>*</sup>&nbspRequired</p>
<label><sup>*</sup>Email&nbsp</label>
<input type="email" name="email" placeholder="Email Id" ></br></br>
<label><sup>*</sup>Password&nbsp</label>
<input type="password" name="password" placeholder="Password" ></br></br>
<center><input type="submit" value="submit" class="btn"></center>
</form>
</div>
</section>
</main>
<footer id="footer">
<p>Designed & Developed By RAHUL VERMAN</p>
<p>Web Developer &copy 2022</p>
</footer>
</body>
</html