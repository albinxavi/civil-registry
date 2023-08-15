<?php
   include('services/user/session.php');
?>
<html>
   
   <head>
      <title>Birth Registration</title>
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
              <label hidden style="color: aliceblue;">(Admin)</label>
              <li><a href="services/user/logout.php">Logout</a></li>
            </ul>
        </div>
      </nav><br><br><br><br><br>
	
      <div align = "center">
         <div style = "width:800px; height: 650px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Birth Registration</b></div>
				
            <div style = "width:80%; margin:10%">
               
               <form action = "services/registration/register_birth.php" method = "post" enctype="multipart/form-data">
               <div style="display: flex;">
                    <div style="margin-right:20px ;">
                        
                              <label>User ID  :</label><input readonly type = "text" value = <?php echo $_SESSION['id'];?> name = "user_id" class = "box"/><br /><br/>
                              <label>Date of Birth  :</label><input type = "date" name = "dob" class = "box" /><br/><br/>
                              <label>Child Name :</label><input type = "text" name = "child_name" class = "box" /><br/><br/>
                              <label>Child Sex :<input type="radio" id="male" name="child_sex" value="M">
                                 <label for="male">Male</label>
                                 <input type="radio" id="female" name="child_sex" value="F">
                                 <label for="female">Female</label><br><br>
            
            
                                 <label>Place of Birth  :</label><input type = "text" name = "place_of_birth" class = "box" /><br/><br/>
                                 <label>Birth Weight  :</label><input type = "number"  min="0.1" max="11" step=".1" name = "birth_weight" class = "box"  /><br/><br/>
                                 <label>Mother's Name :</label><input type = "text" name = "mother_name" class = "box" /><br/><br/>
                                 <label>Mother's Age :</label><input type = "number" min="14" max="100" name = "mother_age" class = "box" /><br/><br/><br>
                                 <div align = "center"><input type = "submit" value = " Submit " /></div><br><br>
                          
                    </div>
                        
                          <div style="margin-left: 70px;">
                                 <label>Father's Name :</label><input type = "text" name = "father_name" class = "box" /><br/><br/>
                                 <label>Father's Age :</label><input type = "number" min="14" max="100" name = "father_age" class = "box" /><br/><br/>
                                 <label>Birth Housename :</label><input type = "text" name = "birth_housename" class = "box" /><br/><br/>
                                 <label>Birth City:</label><input type = "text" name = "birth_city" class = "box" /><br/><br/>
                                 <label>Birth District:</label><input type = "text" name = "birth_district" class = "box" /><br/><br/>
                                 <label>Birth State:</label><input type = "text" name = "birth_state" class = "box" /><br/><br/>
                                 <label>Delivery Method:</label><select name="delivery_method">
                                    <option value="" disabled selected hidden>Choose Delivery Method </option>
                                    <option value="Natural">Natural </option>
                                    <option value="C-Section">C-Section </option>
                                  </select><br /><br/>
                                 <label>Birth Proof</label><input type="file" name="birth_proof"><br><br><br>
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