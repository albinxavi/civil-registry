<?php
include('services/user/session.php');
?>
<html>
  <head>
    <title>Civil Registry</title>
    <link rel="stylesheet" href="./style.css" />
  </head>

  <body bgcolor="#FFFFFF">
    <nav>
        <div class="menu">
            <div class="logo">
                <a href="/home.php">Civil Registry</a>
            </div>

            <ul>
                <label style="color: aliceblue;">
                    <?php
                    if ($_SESSION['admin'] == 1) {
                        echo $_SESSION['name'] . "<br>(Admin)";
                    } else {
                        echo $_SESSION['name'];
                    }
                    ?>
                </label>
                <li><a href="services/user/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav><br><br><br><br><br><br>
    <div align="center">


          <div style="font-size: 20px; color: black; margin-top: 10px">
          <?php

            if((array_key_exists("register_birth",$_GET)&&$_GET['register_birth']=="success")||(array_key_exists("register_marriage",$_GET)&&$_GET['register_marriage']=="success")||(array_key_exists("register_death",$_GET)&&$_GET['register_death']=="success"))
            {
              echo "Registration Successful. ";
            }
            else{
            echo "Uh. Oh! Looks Like You are Lost. ";
          }
          ?>
          Redirecting in <span id="timer">5</span> seconds.
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">   
    function Redirect() 
    {  
        window.location="home.php"; 
    }
    const element = document.getElementById("timer");
    setInterval(function() {element.innerHTML = parseInt(element.innerHTML)-1}, 1000);
    setTimeout('Redirect()', 5000);
    </script>
</html>
