<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    table{
      text-align: center;
      font-size: 2rem;
    }
    th{
      background-color: #FF660060;
    }
    tr{
      background-color: #BBBEFF70;  
    }
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
.menu ul li a.result{
  background: #fff;
  color: black;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fo365.vn%2Fwp-content%2Fuploads%2FGettyImages-1221154937__2_.jpg&f=1&nofb=1')no-repeat;
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
</style>
<nav>
    <div class="menu">
      <div class="logo">
      <a href="https://eci.gov.in/"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1" title="Election Commision of India" width= "40px"height= "30px"></a>
      </div>
      <ul>
        <li><a href="index.php" class="home">Home</a></li>
        <li><a href="voter.php">Vote</a></li>
        <li><a href="lan_view.php.php" class="result">Results</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="change_pass.php">Change Password</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
<p> <font size="6">Voting So Far </font></p><br>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<style>
  #customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 1px;
  }
  
  #customers tr:nth-child(){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 5px;
    padding-bottom: 5px;
    background-color: "#FFE4C4";
    color: white;
  }
  </style>
<center><table id="customers">
<th width="100px">ID</th>		
<th width="200px">PARTY</th>
<th width="300px">VOTE COUNT</th>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			$about=$mb->about;
			$vote=$mb->votecount;
			echo '<tr>';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';
	}
?>