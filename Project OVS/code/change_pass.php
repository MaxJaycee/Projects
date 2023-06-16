<!DOCTYPE html>
<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";?>
<body>
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
  		background-image: url("https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwallpaperforu.com%2Fwp-content%2Fuploads%2F2020%2F05%2Fvector_wallpaper_190520234013-scaled.jpg&f=1&nofb=1");
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
.menu ul li a.cp{
  background: #fff;
  color: black;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
input[type=password]
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
  		top: 45%;
  		left: 50%;
  		transform: translate(-50%, -50%);
		border: 2px black;
		padding: 22px;
		box-shadow: 2px 2px 15px black;
	}
	h2
	{   
  		text-shadow: 2px 2px 5px black;
	}
    .vec
	{
		position: absolute;
  		top: 54%;
		left: 50%;
  		transform: translate(-50%, -50%);
	}
</style>
<nav>
    <div class="menu">
      <div class="logo">
      <a href="https://eci.gov.in/"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1" title="Election Commision of India" width= "40px"height= "30px"></a>
      </div>
      <ul>
        <li><a href="index.php" class="home">Home</a></li>
		<li><a href="voter.php">Vote</a></li>
        <li><a href="lan_view.php">Results</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="change_pass.php" class="cp">Change Password</a></li>
      </ul>
    </div>
</nav>
<img class="vec" src="https://images.vexels.com/media/users/3/135953/isolated/preview/6a3f9fbf604cadf1452277eebd7dac82-flat-bright-monitor-icon-by-vexels.png" width="50%" height="100%" style="float:left;">
<div class="form">
<center><h2>Change Password</h2></center><br>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  
<center><form action="change_pass_action.php" method="post" id="myform">
Current Password :
<input type="password" name="cpassword" value="" >
<br>
<br>
New Password:
<input type="password" name="npassword" value="" >
<br>
<br>
Confirm New Password:
<input type="password" name="cnpassword" value="" >
<br>
<br>
<input type="reset" name="reset" value="Reset" />
<input type="submit" name="cpass" value="UPDATE" >
</form></center>
</div>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
</body>
</html>