<?php

//New Session start
session_start();

//import datebase connection file
include ("connection.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>bitWise | Learn & Excel </title>
<style>
body {
	background-color : black ;
	background-image : url('office1.jpg') ;
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
.right { 
	position : absolute ;
	right : 5% ;
	text-spaccing : 1rem ;
	display : flex ;
}
.navbtn { 
	position : absolute ;
	visibility : hidden ;
}
a:link {
	text-decoration : none ;
	margin : auto 0.5rem auto 0.5rem ;
}
main {
	display : flex ;
	margin : 3rem 0 1rem 0 ;
	
}
#profile { 
	flex : 40% ;
	background-color : #2ec4b6 ;
	color : white ;
	height : 100% ;
	text-align : center ;
	
}
.avatar {
	background-image : url(avatar4.jpg) ;
	height : 25rem ;
	background-size : contain ;
	background-repeat : no-repeat ;
}
.picture {
	object-fit : cover ;
	width : 100% ;
}
@media only screen and (max-width: 960px) {
#profile {
	
	position : absolute ;
      display : none ;
	width : 70% ;
}
.navbtn { 
	position : relative ;
	visibility : visible ;
}
.hide {
	display : none ;
	visibility : hidden ;
}
.right {
	right : 1% ;
}
}
label { 
	font-weight : bold ;
	margin : 0.5rem ;
	font-size : 1rem ;
}
sup {
	color : red ;
}
#details {
	flex : 60% ;
	background: #FFEFBA;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFEFBA , #FFFFFF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFEFBA , #FFFFFF); 
	opacity : 0.9 ;
	color : black ;
	padding : 1.5rem ;
}
h2 {
	text-shadow : 0.1rem 0.1rem 0.1rem grey ;
	font-size : 2rem ;
	text-decoration : underline ;
}
input,textarea {
	margin : 0.5rem 0.5rem 0.5rem 1rem ;
	padding : 0.3rem ;
	font-size : 1rem ;
 }
.btn {
	background-color : #2ec4b6 ;
	color : white ;
	border : 1px solid #2ec4b6 ;
	border-radius : 15px ;
	padding :  0.7rem 1.2rem 0.7rem 1.2rem ;
	box-shadow : 0.5rem 0.5rem 0.5rem black  ;
	transition : padding 2s ;
	cursor : pointer ;
}
.btn:hover {
	padding : 0.8rem ;
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
function displaynav() {
		document.getElementById("profile").setAttribute('style',"display:block;z-index:5");
}

//Validate form before submition
function validate() {
	let form = document.addrressform;
	let error = document.getElementById("err");
	if(form.addr1.value=="") {
		error.innerHTML= "Address line cann't be empty.";
		form.addr1.focus();
		return false;
	}

//City should be field
	if(form.city.value=="") {
		error.innerHTML= "City cann't be empty.";
		form.city.focus();
		return false;
	}

//State field must contain value
	if(form.state.value=="") {
		error.innerHTML= "State cann't be empty.";
		form.state.focus();
		return false;
	}

//country validation
	if(form.country.value=="") {
		error.innerHTML= "Country cann't be empty.";
		form.country.focus();
		return false;
	}

//pincode validation
	if(form.pincode.value=="") {
		error.innerHTML= "Pincode cann't be empty.";
		form.pincode.focus();
		return false;
	}

//pincode length validation
	if(form.pincode.value.length!=6) {
		error.innerHTML= "Pincode must have Six digits.";
		form.pincode.focus();
		return false;
	}

//validation for numberic value
	if(isNaN(form.pincode.value)) {
		error.innerHTML= "Pincode should contain numberic value only.";
		form.pincode.focus();
		return false;
	}
}
</script>
</head>
<body>
<?php 
$id = $_SESSION["userid"];
if($id) {
//query SQL commands from database
	$query = "select * from user where user_id='$id'";
      $result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);
?>
<header>
<img src="logo1.jpg" >
<section class="right">
<h3>Hello! <?php echo $row['fname'];?>&nbsp </h3>
<a href="logout.php" class="btn hide">Log Out</a>
<img src="nav2.jpg" width="50rem" class="navbtn" onmouseover="displaynav()">
</section>
</header>

<main>
<section id="profile">
<?php 
echo "<img src=\"".$row['avatar'].".jpg\" class=\"picture\">
</br></br>
<label>".$row['fname'] ." ".$row['fname']. "</label></br>
<label> DoB : </label>"
.$row['dob'].
"</br>
<label> Email : </label>"
.$row['email'].
"</br>
<label> Mobile no. : </label>"
.$row['phone'].
"</br></br>
<label>Bio</label></br>"
.$row['description']
;
?>
</br></br></br>
<a href="logout.php" class="btn" style="border : 0.1rem solid black">Log Out</a>
</br></br></br>
</section>

<section id="details">
<h2>Additional Information</h2></br>
<p id="err" class="error" style="color : red"><sup>*</sup>&nbspRequired</p>
<form action="update.php" method="post" onsubmit="return validate()" name="addrressform">
<label><sup>*</sup>Address line 1 </label></br>
<textarea name="addr1" placeholder="House No./Locality/Street" rows="4" cols="30"></textarea></br>
<label>Address line 2 </label></br>
<textarea name="addr2" placeholder="Village/Town/street/City" rows="4" cols="30"></textarea></br>
<label><sup>*</sup>City </label>
<input type="text" name="city" placeholder="City"></br>
<label><sup>*</sup>State </label>
<input type="text" name="state" placeholder="State"></br>
<label><sup>*</sup>Country </label>
<select name="country">
<option ="india">INDIA</option>
</select></br>
<label><sup>*</sup>Pincode </label>
<input type="text" name="pincode" placeholder="pincode"></br></br>
<input type="hidden" name="usrid" value=<?php echo $_SESSION['userid']; ?> >
<center>
<input type="reset" value="Clear" class="btn">
<input type="submit" value="Update" class="btn">
</center>
</form>
</section>
</main>
<footer>
<p>Designed & Developed By RAHUL VERMAN</p>
<p>Web Developer &copy 2022</p>
</footer>
<?php
}
else 
	echo "Oops! Seems like are didn't authenticated your identity to access this page.";
?>
</body>
</html>