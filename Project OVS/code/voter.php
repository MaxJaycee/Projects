<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";?>
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
.menu ul li a.vote{
  background: #fff;
  color: black;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fw.wallhaven.cc%2Ffull%2F83%2Fwallhaven-83rg31.jpg&f=1&nofb=1')no-repeat;
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
input[type=submit]
{
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease;
  color: #fff;
  background: none;
}
input[type=submit]:hover
{
	background: white;
  color: black;
}
#icon
{
  margin-top: 25px;
  margin-left: 30px;
  margin-bottom: 10px;
}
#icon:hover
{
  transform: scale(1.1);
}
</style>
<nav>
    <div class="menu">
      <div class="logo">
      <a href="https://eci.gov.in/"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1" title="Election Commision of India" width= "40px"height= "30px"></a>
      </div>
      <ul>
        <li><a href="index.php" class="home">Home</a></li>
        <li><a href="voter.php" class="vote">Vote</a></li>
        <li><a href="lan_view.php">Results</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="change_pass.php">Change Password</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
<p> <font size="5.5">Welcome { <?php echo $_SESSION['SESS_NAME']; ?> }. Make a Vote </font></p>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> Choose your favorite political party! </font><br>
<a href="https://www.bjp.org/"><img src="https://pngimage.net/wp-content/uploads/2018/05/bjp-logo-png-hd-1.png" title="BJP" width= "180px"height= "170px" id="icon"></a>
<a href="https://www.inc.in/"><img src="http://www.pngimagesfree.com/LOGO/C/congress/round-congress-logo-png.png" title="Congress" width= "180px"height= "170px" id="icon"></a>
<a href="https://aamaadmiparty.org/"><img src="https://aamaadmiparty.org/wp-content/uploads/2017/07/aap.png" title="AAP" width= "180px"height= "170px" id="icon"></a>
<a href="http://www.bspindia.org/"><img src="https://clipground.com/images/bsp-logo-png-14.png" title="BSP" width= "180px"height= "170px" id="icon"></a><br>
<font size="5.5">
<input type="radio" name="lan" value="BJP"> BJP &emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="lan" value="Congress"> Congress &emsp;&emsp;&emsp;&emsp;
<input type="radio" name="lan" value="AAP"> AAP &emsp;&emsp;&emsp;&emsp;&emsp;
<input type="radio" name="lan" value="BSP"> BSP <br>
<input type="radio" name="lan" value="none"> None of the Above
</font>
</center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit" name="submit" style="height:40px; width:100px" /></center>
</form>
</div>