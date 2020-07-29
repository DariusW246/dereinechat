<?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();

      $username = $_POST['username'];
      $passwort = $_POST['passwort'];

      $hostname = $_SERVER['HTTP_HOST'];
      $path = dirname($_SERVER['PHP_SELF']);

      if ($username == 'admin' && $passwort == 'hackdereinechat') {
       $_SESSION['angemeldet'] = true;

       if ($_SERVER['SERVER_PROTOCOL'] == 'HTTP/1.1') {
        if (php_sapi_name() == 'cgi') {
         header('Status: 303 See Other');
         }
        else {
         header('HTTP/1.1 303 See Other');
         }
        }

       header('Location: http://'.$hostname.($path == '/' ? '' : $path));
       exit;
       }
      }
?>
<!DOCTYPE html PUBLIC>
<html lang="de">
 <head>
  <title>Login - DerEineChat.de</title>
  <link rel="icon" href="/img/icon.png">
 </head>
 <body>
   <style>
   span {font-size: 12px;opacity: 0.2}
   body {background: url('/img/bg.png');background-size: cover;}
   *{color: #E9E9E9; font-family: Futura,"Trebuchet MS",Arial,sans-serif}
   .header-text{font-family:"Karla", Arial, sans-serif;font-size:28px;color:#FFFFFF;}
   .gdpr_consent, .secondary-text{font-family:"Karla", Arial, sans-serif;font-size:14px;color:#FFFFFF;}
   .anti-spam{font-family:"Karla", Arial, sans-serif;font-size:13px;color:#BBBBBB;}
   .content{margin: 170px auto;padding:30px;border-radius:10px;box-shadow:0 0 10px 0 rgba(0, 0, 0, 0.33); background-color: rgba(0,0,0,0.55); max-width:500px;margin-left:auto;margin-right:auto;text-align:left;}
   .content input{text-align:left; border: 0px;background:#6E6E6E; border-radius: 3px;}
   .content input[type="text"], input[type="password"]{font-size:13px;color:#FFFFFF;border:1px solid #EEEEEE;}
   .content input[type="text"], input[type="password"]:focus{border:1px solid #BBBBBB;}
   .content input[type="submit"]{font-size:12px;color:#FFFFFF;background:#0F0F0F;border:1px solid #0F0F0F;}
   .content input[type="button"]:hover{opacity: 0.7;}
   .content input[type="submit"]:focus{background:#0A0A0A;border:1px solid #0A0A0A;}
   .signals-alert-success{background:#90C695;color:#FFFFFF;}
   .signals-alert-danger{background:#E08283;color:#FFFFFF;}
   ::-webkit-input-placeholder {color: #DEDEDE;}
   ::-moz-placeholder {color: #DEDEDE;}
   :-ms-input-placeholder {color: #DEDEDE;}
   :-moz-placeholder {color: #DEDEDE;}
   .logo {width:250px}
   </style>
   <div class="maintenance-mode">
 		<div class="s-container">
 			<div class="content">
 				<div class="logo-container">
 	<center>
 	<img src="/img/icon.png" alt="icon" class="logo"></img>
 	</div>
 	<center>
 	<h1>LOGINBEREICH</h1>
 	Bitte logge dich ein bevor du diese Seite sehen kannst!<br><br>
  <form name="passwort" action="login.php" method="post">
   <input type="text" placeholder="Username" name="username"><br>
   <input type="password" placeholder="Passwort" name="passwort"><br>
   <input type="submit" value="Anmelden">
 </form>
</div>
</div>
</div>
</body>
</html>
