<?php
include('services/user/session.php');
?>
<html>
  <head>
    <title>Death Registration Details</title>
    <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style type="text/css">
      body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
      }

      label {
        font-weight: bold;
        width: 100px;
        font-size: 14px;
      }

      .box {
        border: #666666 solid 1px;
        width: 100%;
      }

      table,
      th,
      td {
        border: 1px solid black;
        border-collapse: collapse;
        margin: 5px;
        text-align: center;
      }
    </style>
  </head>

  <body bgcolor="#FFFFFF">
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="/admin_home.php">Civil Registry</a>
        </div>

        <ul>
            <span style="color: aliceblue;font-weight: 500;font-size: 18px;font-family: 'Poppins', sans-serif;">
                <?php
                    if ($_SESSION['admin'] == 1) {
                        echo $_SESSION['name']."<br>(Admin)"; } else { echo $_SESSION['name']; } 
                ?>
            </span>
          <li><a href="services/user/logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
    <br /><br /><br /><br /><br /><br />

    <center>
      <h2 style="text-decoration: underline">USER DETAILS</h2>
    </center>
    <br />
    <br />

    <table>
      <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
      <?php
      $sql = "SELECT * FROM user";
      $result = mysqli_query($db, $sql);
      if (mysqli_num_rows($result) > 0)
          while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['email']."</td>";
              echo "<td>".$row['phone']."</td>";
              echo "</tr>";

          }
      ?>
    </table>
  </body>
</html>
