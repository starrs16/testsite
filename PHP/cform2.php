<html>
<body>

<?php

    $to = "steph@stephkahle.tk";

    $name = $_POST['sender_name'];
    $email = $_POST['sender_email'];
    $message = $_POST['sender_message'];
 
   
    $subject = "www.stephkahle.tk Message from visitor";
  
    $headers = "From: $email";
 
    $sent = mail($to, $subject, $message, $headers);
 
    if($sent)
        {print ('<a href="http://www.stephkahle.tk/success.html"</a>');}
    else
    	{print ('<a href="http://www.google.com"</a>');} 

?>
</body>
</html>
