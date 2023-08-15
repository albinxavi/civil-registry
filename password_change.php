<html>
  <head>
  <title>Civil Registry</title>
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
    </style>
  </head>

  <body bgcolor="#FFFFFF">
    <nav>
      <div class="menu">
        <div class="logo">
          <a href="#">Civil Registry</a>
        </div>
      </div>
    </nav>
    <br /><br /><br /><br /><br />

    <div align="center">
      <div style="width: 300px; border: solid 1px #333333" align="left">
        <div style="background-color: #333333; color: #ffffff; padding: 3px"><b>Change Password</b></div>

        <div style="width: 80%; margin: 10%">
          <form action="Change.php" method="post">
            <label>Old Password :</label><input type="password" name="old_password" class="box" /><br /><br />
            <div align="center"><input type="submit" value=" Verify " /> <button type="reset">Reset</button></div>
            <br /><br />
          </form>

          <div style="font-size: 11px; color: #cc0000; margin-top: 10px"></div>
        </div>
      </div>
    </div>
  </body>
</html>
