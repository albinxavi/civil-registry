<html>
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
            width:100%;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "width:80%;margin:10%">
               
               <form action = "services/user/login.php" method = "post">
                  <label>Username  :</label><input type = "text" name = "email" class = "box"/><br /><br/>
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br/>
                  <div align = "center"><input type = "submit" value = " Submit "/><br/></div>
               </form>
               <div align = "center"><a href="registration.php">New User? Register Now</a></div>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
               <?php
               if (isset($_GET['register']))
               {
                  if($_GET['register']=='success'){
                     echo "User Registered Successfully.";
                  }
                  elseif($_GET['register']=='failed'){
                     echo "User Registration Failed.";
                  }
               }
               if (isset($_GET['login']))
               {
                  if($_GET['login']=='failed'){
                     echo "Your Username or Password is invalid.";
                  }
               }
               ?>
            </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>