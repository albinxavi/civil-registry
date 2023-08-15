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
      <div style="width: 450px; border: solid 1px #333333" align="left">
        <div style="background-color: #333333; color: #ffffff; padding: 3px"><b>User Registration</b></div>

        <div style="width: 80%; margin: 10%">
          <form action="services/user/register.php" method="post">
            <label>Email :</label><input type="text" name="email" class="box" /><br /><br />
            <label>Name :</label><input type="text" name="name" class="box" /><br /><br />
            <label>Phone Number :</label><input type="text" name="phone" class="box" /><br /><br />

            <label>Password :</label><input type="password" name="password" id="password" class="box" /><br /><br />
            <label>Confirm Password :</label><input type="password" name="confirm_password" id="confirm_password" class="box" onkeyup="checkPasswordMatch();" /><br /><br />
            <label>Security Question :</label
            ><select name="security_qn">
              <option value="" disabled selected hidden>Choose Security Question</option>
              <option value="">What was your favorite sport in high school?</option>
              <option value="">What was the name of your first childhood friend?</option>
              <option value="">What color do you like the most?</option>
              <option value="">Which teacher did you like the most at school?</option>
              <option value="">What sport do you prefer the most?</option></select
            ><br /><br />
            <label>Answer :</label><input type="text" name="security_answer" class="box" /><br /><br />

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
      console.log("test");
      var password = document.getElementById("password").value;
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
