<?php
include('services/user/session.php');
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Civil Registry</title>
   <link rel="stylesheet" href="./style.css" />
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
   <nav>
      <div class="menu">
         <div class="logo">
            <a href="/admin_home.php">Civil Registry</a>
         </div>

         <ul>
            <label style="color: aliceblue;">
               <?php
               if ($_SESSION['admin'] == 1) {
                  echo $_SESSION['name']."<br>(Admin)";
               } else {
                  echo $_SESSION['name'];
               }
               ?>
            </label>
            <li><a href="services/user/logout.php">Logout</a></li>
         </ul>
      </div>
   </nav>
   <div class="img"></div>
   <div class="center">
      <div class="title">Services</div>
      <div class="btns">
         <a href="marriages_view.php" style="text-decoration:none;"><button>Marriage Registration</button></a>
         <a href="births_view.php" style="text-decoration:none;"><button>Birth Registration</button></a>
         <a href="deaths_view.php" style="text-decoration:none;"><button>Death Registration</button></a>
      </div>
   </div>
</body>

</html>