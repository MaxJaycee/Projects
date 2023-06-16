<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<?php
session_start();
$captcha = "" ;
include "connection.php"; 
if(isset($_POST['submit'])) {
	if (isset($_POST['g-recaptcha-response']))
  {
    $captcha=$_POST['g-recaptcha-response'];
  }
  if(!$captcha){
		$error = "Please check captcha too";
		include ('register.php');
	  exit();
  }
  $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
  $ip = $_SERVER['REMOTE_ADDR'];
  $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
  $responseKeys = json_decode($response,true);
  if(intval($responseKeys["success"]) !== 1) {
	$error = "You are spammer !";
}
$name = mysqli_real_escape_string($con, $_POST['firstname']);
$name2 = mysqli_real_escape_string($con,$_POST['lastname']);
$name3 = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);

$sq = mysqli_query($con, 'SELECT username FROM loginusers WHERE username="'.$_POST['username'].'"');
$exist = mysqli_num_rows($sq);
	
		if($exist==1){
		$nam="<center><h4><font color='#FF0000'>The username already exist, peak another.</h4></center></font>";
		unset($username);
		include('register.php');
		exit();
		}
$sql = mysqli_query($con, 'INSERT INTO voters(firstname,lastname,username)
         VALUES("'.$_POST['firstname'].'","'.$_POST['lastname'].'","'.$_POST['username'].'")');
		 if (!$sql) { 
		 die (mysqli_error($con));
		 }
$sql2 = mysqli_query($con, 'INSERT INTO loginusers(username,password)
         VALUES("'.$_POST['username'].'","'.md5($_POST['password']).'")'); 
if (!$sql2) { 
		 die (mysqli_error($con));
		 }
else {
echo "<style>
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
overflow-x: hidden;
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
.menu ul li a:hover{
background: #fff;
color: black;
}
.img{
background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.stratospherenetworks.com%2Fblog%2Fwp-content%2Fuploads%2F2020%2F04%2Fabstract-computing-network-concept.jpg&f=1&nofb=1')no-repeat;
width: 100%;
height: 100vh;
background-size: cover;
background-position: center;
position: relative;
}
.img::before{
content: '';
position: absolute;
height: 100%;
width: 100%;
background: rgba(0, 0, 0, 0.4);
}
.center{
position: absolute;
top: 52%;
left: 50%;
transform: translate(-50%, -50%);
width: 100%;
padding: 0 20px;
text-align: center;
}
.center .title{
color: #fff;
font-size: 70px;
}
.center .sub_title{
color: #fff;
font-size: 28px;
}
</style>
<body>
<nav>
<div class='menu'>
  <div class='logo'>
  <a href='https://eci.gov.in/'><img src='https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1' title='Election Commision of India' width= '40px' height= '30px'></a>
  </div>
  <ul>
    <li><a href='index.php' class='home'>Home</a></li>
    <li><a href='register.php'>Register</a></li>
    <li><a href='login.php'>Login</a></li>
  </ul>
</div>
</nav>
<div class='img'></div>
<div class='center'>
<div class='title'>Successfully Registered!</div>
<div class='sub_title'>Please proceed to the login page.</div>
</div>
</body>";
}
}
else {
	 $error="<style>
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
   overflow-x: hidden;
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
   .menu ul li a:hover{
   background: #fff;
   color: black;
   }
   .img{
   background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.stratospherenetworks.com%2Fblog%2Fwp-content%2Fuploads%2F2020%2F04%2Fabstract-computing-network-concept.jpg&f=1&nofb=1')no-repeat;
   width: 100%;
   height: 100vh;
   background-size: cover;
   background-position: center;
   position: relative;
   }
   .img::before{
   content: '';
   position: absolute;
   height: 100%;
   width: 100%;
   background: rgba(0, 0, 0, 0.4);
   }
   .center{
   position: absolute;
   top: 52%;
   left: 50%;
   transform: translate(-50%, -50%);
   width: 100%;
   padding: 0 20px;
   text-align: center;
   }
   .center .title{
   color: #fff;
   font-size: 70px;
   }
   .center .sub_title{
   color: #fff;
   font-size: 28px;
   }
   </style>
   <body>
   <nav>
   <div class='menu'>
     <div class='logo'>
     <a href='https://eci.gov.in/'><img src='https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1' title='Election Commision of India' width= '40px' height= '30px'></a>
     </div>
     <ul>
       <li><a href='index.php' class='home'>Home</a></li>
       <li><a href='register.php'>Register</a></li>
       <li><a href='login.php'>Login</a></li>
     </ul>
   </div>
   </nav>
   <div class='img'></div>
   <div class='center'>
   <div class='title'>Registeration Failed!</div>
   <div class='sub_title'>Please try again..</div>
   </div>
   </body>";
     include"register.php";
}
?>
</html>