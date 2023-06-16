<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
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
  		background-image: url("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fbrainhub.eu%2Fblog%2Fwp-content%2Fuploads%2F2020%2F01%2Fdigital-transformation-examples.png&f=1&nofb=1");
		background-size: cover;
		background-repeat: no-repeat;
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
.menu ul li a.log{
  background: #fff;
  color: black;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
input[type=password],[type=text]
{
	color: black;
	text-align: center;
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
	.form
	{
  		text-shadow: 4px 4px 3px black;
		position: absolute;
  		top: 47%;
  		left: 50%;
  		transform: translate(-50%, -50%);
		border: 2px black;
		padding: 25px;
		box-shadow: 2px 2px 15px black;
	}
	h2
	{
		padding-top: 9px;
  		text-shadow: 2px 2px 5px black;
	}
</style>
<nav>
    <div class="menu">
      <div class="logo">
      <a href="https://eci.gov.in/"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1" title="Election Commision of India" width= "40px"height= "30px"></a>
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php" class="log">Login</a></li>
      </ul>
    </div>
  </nav>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<div class="form">
<center>
<h2> Login to Vote </h2>
<br>
<font size="4">
<form action="login_action.php" method="post" id="myform" >
Username : 
<input type="text" name="username" value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="reset" name="reset" value="Reset" />
<input type="submit" name="login" value="Login" > 
</form></font>
</center>
</div>
<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>