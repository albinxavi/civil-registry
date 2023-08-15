<?php
include('services/user/session.php');
?>
<html>
   
   <head>
      <title>Marriage Registration</title>
      <link rel="stylesheet" href="./style.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      
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
    <nav>
        <div class="menu">
          <div class="logo">
          <a href="/home.php">Civil Registry</a>
          </div>
          
          <ul>
          <label style="color: aliceblue;">
               <?php
               if ($_SESSION['admin'] == 1) {
                  echo $_SESSION['name'] . "(Admin)";
               } else {
                  echo $_SESSION['name'];
               }
               ?>
            </label>
              <li><a href="services/user/logout.php">Logout</a></li>
            </ul>
        </div>
      </nav><br><br><br><br><br>
	
	
      <div align = "center">
         <div style = "width:800px; height: 1060px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Marriage Registration</b></div>
				
            <div style = "width:80%; margin:5%">
               
               <form action = "services/registration/register_marriage.php" method = "post">
               <div style="display: flex;">
                    <div style="margin-right:20px ;">
                        
                              <label>User ID  :</label><input  type = "text" <input readonly type="text" value=<?php echo $_SESSION['id']; ?> name = "user_id" class = "box"/><br /><br/>
                              <label>Date of Marriage  :</label><input type = "date" name = "date_of_marriage" class = "box" /><br/><br/><br>
                              <div style="border: solid 1px; width:80%; margin: 10px; color:#333333; width:300px;">
                                <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Bride detail</b></div>
                                  <div style="width:80%;margin:10%">
                                         <label>Name  :</label><input type = "text" name = "bride_name" class = "box" /><br/><br/>
                                         <label>Date of Birth   :</label><input type = "date" name = "bride_dob" class = "box" /><br/><br/>
                                         <label>Housename  :</label><input type = "text" name = "bride_housename" class = "box"  /><br/><br/>
                                         <label>City  :</label><input type = "text" name = "bride_city" class = "box" /><br/><br/>
                                         <label>District  :</label><input type = "text" name = "bride_district" class = "box" /><br/><br/>
                                         <label>State  :</label><input type = "text" name = "bride_state" class = "box" /><br/><br/>
                                         <label>Contry  :</label><input type = "text" name = "bride_contry" class = "box" /><br/><br/>
                                         <label>Phone number  :</label><input type = "text"pattern="[6-9]{1}[0-9]{9}" name = "bride_phno" class = "box" /><br/><br/>
                                         <label>Email  :</label><input type = "email" name = "bride_email" class = "box" /><br/><br/>
                                         <label>Signature  :</label><input type="file" id="myFile" name="bride_signature"><br/><br/>
                                        <label>Photo  :</label><input type="file" id="myFile" name="bride_photo">
                                         
                                  </div>
                              </div>
                              <div align = "center"><input type = "submit" value = " Submit " /></div><br><br>
                    </div>
                        
                          <div style="margin-left: 20px;">
                                    <label>Proof of marriage  :</label><input type="file"/><br /><br/>
                                     <label>Place of Marriage  :</label><input type = "text" name = "place_of_marriage" class = "box" /><br/><br><br>
                                    <div style="border: solid 1px; width:80%; margin: 10px; color:#333333; width:300px;">
                                     <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Bride/Groom detail</b></div>
                                     <div style="width:80%;margin:10%">
                                      <label>Name :</label><input type = "text" name = "bride_groom_name" class = "box" /><br/><br/>
                                      <label>Date of Birth  :</label><input type = "date" name = "bride_groom_dob" class = "box" /><br/><br/>
                                      <label>Housename  :</label><input type = "text" name = "bride_groom_housename" class = "box"  /><br/><br/>
                                      <label>City :</label><input type = "text" name = "bride_groom_city" class = "box" /><br/><br/>
                                      <label>District :</label><input type = "text" name = "bride_groom_district" class = "box" /><br/><br/>
                                      <label>State :</label><input type = "text" name = "bride_groom_state" class = "box" /><br/><br/>
                                      <label>Contry :</label><input type = "text" name = "bride_groom_contry" class = "box" /><br/><br/>
                                      <label>Phone number:</label><input type = "text"pattern="[6-9]{1}[0-9]{9} name = "bride_groom_phno" class = "box" /><br/><br/>
                                      <label>Email:</label><input type = "email" name = "bride_groom_email" class = "box" /><br/><br/>
                                      <label>Signature  :</label><input type="file" id="myFile" name="bride_groom_signature"><br/><br/>
                                      <label>Photo  :</label><input type="file" id="myFile" name="bride_groom_photo">
                                      
                                        
                                         
                                  </div>
                              </div>
                              <div align = "center"> <button type="reset">Reset</button></div><br><br>
                            
                          </div>
    
               </div>
                     
                
                  
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px">
            </div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>