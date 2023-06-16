<!DOCTYPE html>
<html lang="en" dir="ltr">
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
.menu ul li a.home{
  background: #fff;
  color: black;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}
.img{
  background: url('https://www.zastavki.com/pictures/originals/2015/Backgrounds_Digital_background_of_neon_stripes_097229_.jpg')no-repeat;
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
.ECI
{
    border-top-right-radius: 40px;
    border-bottom-right-radius: 40px;
    position: absolute;
    z-index: 5;
    left: -450px;
}
.translateX
{
  margin-top: 5px;
  text-align: center;
  padding-inline: 50px;
  padding-top: 110px;
  padding-bottom: 96px;
  position: absolute;
  z-index: 5;
  right: -410px;
}
.sd
{
  padding: 30px;
  font-size: 21;
}
.db
{
  color: wheat;
}
/*  Scrollbar */
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<body bgcolor="black">
  <nav>
    <div class="menu">
      <div class="logo">
      <a href="https://eci.gov.in/"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fseeklogo.com%2Fimages%2FE%2Felection-commission-of-india-logo-324FF87C0E-seeklogo.com.png&f=1&nofb=1" title="Election Commision of India" width= "40px"height= "30px"></a>
      </div>
      <ul>
        <li><a href="index.php" class="home">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">Online Voting System</div>
    <div class="sub_title">WITNESS THE FUTURE OF VOTING</div>
  </div>
  <div>
    <img class="ECI" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fstatic.vecteezy.com%2Fsystem%2Fresources%2Fpreviews%2F000%2F471%2F335%2Foriginal%2Fonline-voting-circular-icons-set-vector.jpg&f=1&nofb=1" width="480" height="350" style="float:left;" data-speed="1">
    <p class="translateX" data-speed="-1" id="p1">
    <legend><font size='5.95'> Online voting portal is the newer approach to voting <br>after witnessing the harsh scenario of pandemic. When <br>the world is heading towards the virtual approach in <br>almost everything then why can’t we vote digital. </font></legend>
    </p>
  </div>
  <footer>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <center>
    <div class="sd">
    <span class="db">Developed by: </span>Ajendra Singh, Deepanshi Aggarwal, Gagan Gupta & Maneesh Amoli
    </div></center>
  </footer>
  <script>
    const translateX = document.querySelectorAll(".translateX");
    const ECI = document.querySelectorAll(".ECI");
    window.addEventListener("scroll" ,() => 
    {
      let scroll = window.pageYOffset;
      translateX.forEach(element => {
        let speed = element.dataset.speed;
        element.style.transform = `translateX(${scroll * speed}px)`;
      })
      ECI.forEach(element => {
      let speed = element.dataset.speed;
      element.style.transform = `translateX(${scroll * speed}px)`;
      })
    })
   </script>
</body>
</html>