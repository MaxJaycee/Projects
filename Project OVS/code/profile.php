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
.menu ul li a.profile{
  background: #fff;
  color: black;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.vecteezy.com%2Fsystem%2Fresources%2Fpreviews%2F001%2F211%2F388%2Foriginal%2Fabstract-colorful-digital-online-communication-technology-background-vector.jpg&f=1&nofb=1')no-repeat;
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
  left: 70%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
  font-size: 28px;
}
</style>
<body>
<nav>
    <div class="menu">
      <div class="logo">
      <a href="https://eci.gov.in/"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1" title="Election Commision of India" width= "40px"height= "30px"></a>
      </div>
      <ul>
        <li><a href="index.php" class="home">Home</a></li>
        <li><a href="voter.php">Vote</a></li>
        <li><a href="lan_view.php">Results</a></li>
        <li><a href="profile.php" class="profile">Profile</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="change_pass.php">Change Password</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <?php
    if(!isset($_SESSION)) { 
    session_start();
    }   
    include "auth.php";
    include "connection.php";
    ?>
    <h3> Welcome { <?php echo $_SESSION['SESS_NAME']; ?> }.</h3>
    <?php
    $username = $_SESSION['SESS_NAME'];
    $query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
    if ($result = mysqli_query($con,$query)) {
    if (mysqli_num_rows($result) > 0) {
    $sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
    $row = mysqli_fetch_assoc($sql);
        echo "You have voted for: " . " " . $row['voted'];
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
    }?>
  </div>
</body>