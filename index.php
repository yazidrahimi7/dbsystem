<?php

include("connection.php");

?>
<html>
   
   <head>
      <title>Login Page</title>
      </head> 
   <style>
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
         }
		 
		 
      </style>
 
  
 
   <br><br>
   
   <body>
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Admin Login</b></div>
				
            <div style = "margin:30px">
               
               <form method = "post" action="login_verify.php">
                  <label>Username  :</label>
               
                  <input type = "text" name = "uname" class = "box"/>
                 <br /><br />
                 <label>Password  :</label>
               
                  <input type = "password" name = "pswd" class = "box" id="password"/>
                  <br/>
                 <br />
                 <input type = "submit" value = " Submit "/>
                 <span style="font-size:11px; color:#cc0000; margin-top:10px"><br><br><?php echo @$error;?></span>
                  <p><br />
                 </p>
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>




   
   </body>
</html>