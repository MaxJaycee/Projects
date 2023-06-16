<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<script src='https://www.google.com/recaptcha/api.js'></script>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins',sans-serif;
	color: white;
}
body 
{
	background-image: url("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.surveylegend.com%2Fwordpress%2Fwp-content%2Fuploads%2F2020%2F04%2Fonline-voting.png&f=1&nofb=1");
	background-size: cover;
	background-repeat: no-repeat;
	overflow: hidden;
}
::selection{
	color: #000;
	background: #fff;
}
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
  box-shadow: 0px 2px 2px #1b1b1b;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo{
    padding-top: 8px;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 7px;
  transition: all 0.3s ease;
}
.menu ul li a.reg{
  background: #fff;
  color: black;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}	
	#myform
	{
  		text-shadow: 4px 2px 5px black;
	}
	h2
	{
  		text-shadow: 4px 2px 5px black;
	}
	input[type=submit], input[type=reset] 
	{
  		background-color: #04AA6D;
  		border: none;
  		color: white;
  		padding: 10px 32px;
  		text-decoration: none;
  		margin: 4px 2px;
  		cursor: pointer;
		box-shadow: 1px 1px 3px green
	}
	input[type=submit]:hover, input[type=reset]:hover
	{
		box-shadow: 2px 2px 5px black;
	}
	input{
		text-align: center;
		color: grey;

	}
	.form
	{
		position: absolute;
		padding: 15px;
  		top: 55%;
  		left: 25%;
  		transform: translate(-50%, -50%);
		box-shadow: 2px 2px 15px #1b1b1b;
	}
	.vote
	{
		position: absolute;
  		top: 55%;
		left: 75%;
  		transform: translate(-50%, -50%);
		box-shadow: 2px 2px 15px #1b1b1b;
	}
</style>
<body>
<nav>
    <div class="menu">
      <div class="logo">
      <a href="https://eci.gov.in/"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1" title="Election Commision of India" width= "40px"height= "30px"></a>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php" class="reg">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="parent">
	<img class="vote" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.theglobeandmail.com%2Fresizer%2F35YE2HRDTOJxorYBFX-4wVyxQYI%3D%2F1200x0%2Ffilters%3Aquality(80)%2Farc-anglerfish-tgam-prod-tgam.s3.amazonaws.com%2Fpublic%2F7BGAICPGAJBKZHPIJOMZY6W4JI&f=1&nofb=1" title="Vote" width="45%" height="55%" style="float:left;">
  </div>
<div class="form">
<center>
<h2> Register</h2></center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<br>
<center>
<font size="4">
<form action= "reg_action.php" method= "post" id="myform" onsubmit="return submitHandler();">
Firstname:
<input class="fname" type="text" name="firstname" value="" required />
<br>
<br>
Lastname: 
<input class="lname" type="text" name="lastname" value="" required />
<br>
<br>
Date of Birth:        
<input class="dob" type="date" name="" id="">
<br>
<br>
Username: 
<input type="text" name="username" value="" required />
<br>
<br>
Password: 
<input type="password" name="password" value="" required />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<input type="reset" class="reset" name="reset" value="Reset" />
<input type="submit" class="submit" name="submit" value="Next" />
</form>
</font>
</center>
</div>
<script type= "text/javascript" >
	function getAge(DOB) {
    var today = new Date();
    var birthDate = new Date(DOB);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }    
    return age;
}
	function submitHandler(){
		const fname = document.querySelector(".fname").value
		const lname = document.querySelector(".lname").value
		const dob = document.querySelector(".dob").value
		const age = getAge(dob)
		console.log(age);
		if (fname === lname){
			document.querySelector(".fname").value = ""
			document.querySelector(".lname").value = ""
		alert("First Name and last name can't be same")
		return false
		}
		if(age < 18){
			document.querySelector(".dob").value = ""
			alert("User should be atleast 18 years old")
			return false
		}
		return true
	}
</script>
</body>