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
        <div style="background-color: #333333; color: #ffffff; padding: 3px"><b>Reset Password</b></div>

        <div style="width: 80%; margin: 10%">
          <form action="Reset.php" method="post">
            <label>New Password :</label><input type="password" id="new_password" name="new_password" class="box" /><br /><br />
            <label>Confirm Password :</label
            ><input type="password" id="confirm_password" name="confirm_password" onkeyup="checkPasswordMatch();" class="box" /><br /><br />

            <div align="center"><input type="submit" id="submit" value=" Submit " disabled /> <button type="reset">Reset</button></div>
            <br /><br />
          </form>

          <div style="font-size: 11px; color: #cc0000; margin-top: 10px"></div>
        </div>
      </div>
    </div>
  </body>
  <script>
    function checkPasswordMatch() {
      var password = document.getElementById("new_password").value;
      var confirm_password = document.getElementById("confirm_password").value;
      var submitButton = document.getElementById("submit");

      if (password === confirm_password && password !== "") {
        submitButton.disabled = false;
      } else {
        submitButton.disabled = true;
      }
    }
  </script>
</html>
