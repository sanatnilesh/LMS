<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      <?php
         $to = "itsanat000@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>Forgot password mail sample</b>";
         $message .= "<h1>Hey sanat your password is bvmit15it027</h1>";
         
         $header = "From:bvmitlibraryportal@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>