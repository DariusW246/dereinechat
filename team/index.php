<?php
if ($_SERVER['SERVER_NAME'] == "preview.dereinechat.de") {
    include('auth.php');
}
?>
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home - DerEineChat</title>
    <link rel="icon" href="/img/icon.png">
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
<header>
<a href="https://dereinechat.de">
  <img src="/img/icon.png" alt="">
  <st>DerEineChat.de</st><br>
  <sd>Einfach, sicher Chatten.</sd>
</a>
<div class="nav">
  <a href="/">Home</a>
  <a class="active" href="team">Team</a>
  <a href="login">Login</a>
  <a href="register">Register</a>
</div>
</header>

<div class="team">
  <a href="https://discord.com/users/664175043009576983" target="_blank">
    <div class="team item">
      <img src="https://dereinegamer.de/img/icon.png" alt="">
      <br><span class="name">Marvin G.</span><p></p>
      <span class="inhaber">Inhaber</span>
    </div>
  </a>
  <a href="https://discord.com/users/171647285774516235" target="_blank">
    <div class="team item">
      <img src="https://cdn.discordapp.com/avatars/714534528160628846/1c903c9868e4ac2ba80f383a0b97cfc3.png?size=128" alt="">
      <br><span class="name">Darius W.</span><p></p>
      <span class="inhaber">Inhaber</span>
    </div>
  </a>
</div>

  </body>
</html>
