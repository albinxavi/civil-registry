<?php
   include('services/user/session.php');
?>
<html>
   
   <head>
      <title>Death Registration</title>
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
         <div style = "width:900px; height: 680px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Death Registration</b></div>
				
            <div style = "width:80%; margin:10%">
               
            <form action = "services/registration/register_death.php" method = "post" enctype="multipart/form-data">
               <div style="display: flex;">
                    <div style="margin-right:25px ;">
                        
                              <label>User ID  :</label><input disabled type = "text" name = "user_id" class = "box"/><br /><br/>
                        
                              <label>Deceased Name :</label><input type = "text" name = "deceased_name" class = "box" /><br/><br/>
                              <label>Deceased Sex :<input type="radio" id="male" name="deceased_sex" >
                                 <label for="male">Male</label>
                                 <input type="radio" id="female" name="deceased_sex" >
                                 <label for="female">Female</label>
                                 <input type="radio" id="others" name="deceased_sex" >
                                 <label for="others">Others</label><br><br>
                                 <label>Deceased Age :</label><input type = "number" min="1" max="200" name = "deceased_age" class = "box" /><br/><br/>
                                 <label>Deceased Housename :</label><input type = "text" name = "deceased_housename" class = "box" /><br/><br/>
                                 <label>Deceased City:</label><input type = "text" name = "deceased_city" class = "box" /><br/><br/>
                                 <label>Deceased District:</label><input type = "text" name = "deceased_district" class = "box" /><br/><br/>
                                 <label>Deceased State:</label><input type = "text" name = "deceased_state" class = "box" /><br/><br/><br>
                                 <div align = "center"><input type = "submit" value = " Submit " /></div><br><br>
                                 
                    </div>
                        
                          <div style="margin-left: 30px;">
                            <label>Deceased Country:</label><input type = "text" name = "deceased_country" class = "box" /><br/><br/>
                            <label>Deceased Pin:</label><input type = "text" name = "deceased_pin" class = "box" /><br/><br/>
                            <label>Father's Name :</label><input type = "text" name = "father_name" class = "box" /><br/><br/>
                            <label>Mother's Name :</label><input type = "text" name = "mother_name" class = "box" /><br/><br/>
                            <label>Place of Death  :</label><input type = "text" name = "place_of_death" class = "box" /><br/><br/>
                            <label>Cause Certificate ID :</label><input type = "text" name = "cause_certificate_id" class = "box" /><br/><br/>
                            <label>Actual Cause :</label><input type = "text" name = "actual_cause" class = "box" /><br/><br/>
                            <label>Death Document</label><input type="file" name="death_document"><br><br>
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