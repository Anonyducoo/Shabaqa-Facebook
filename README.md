<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Shabaqa Facebook</h1>

<h2>Hordhac</h2>
<p>fahan ku saabsan sida loo sameeyo login page oo isku xidha Telegram bot.</p>

<h2>Sida loo install gareysto Termux iyo sida loo kiciyo koodhka</h2>
<ul>
  <li>
    <strong>1. Soo degsashada Termux:</strong>
    <p>Aad <a href="https://f-droid.org/">F-Droid</a> oo raadi Termux.</p>
    <p>Soo deji oo soo furo.</p>
  </li>
  <li>
    <strong>2. Soo dajinta PHP iyo Composer:</strong>
    <p>Fur Termux oo geli amarradan:</p>
    <div class="code-block">
      <code>pkg update</code>
      <code>pkg upgrade</code>
      <code>pkg install php</code>
      <code>pkg install composer</code>
    </div>
  </li>
  <li>
    <strong>3. Soo dajiso koodhka:</strong>
    <div class="code-block">
      <code>Git clone https://github.com/Anonyducoo/Shabaqa-Facebook/</code>
      <code>cd Shabaqa-Facebook</code>
    </div>
  </li>
  <li>
    <strong>Ku dar Token-kaaga iyo Chat ID gaaga:</strong>
    <p>Hel token-kaaga bot-ka adigoo aadaya <a href="https://core.telegram.org/bots#6-botfather">Telegram BotFather</a>.</p>
    <p>Hel Chat ID adigoo isticmaalaya bot-ka <a href="https://t.me/userinfobot">userinfobot</a>.</p>
    <p>Faylka <code>bot.php</code> wuxuu u egyahay sidan:</p>
    <div class="code-block">
      <code>
      &lt;?php<br>
      $botToken = 'TOKEN-KAAGA-HALKAAN-GALI';<br>
      $chatId = 'CHAT-ID-KAAGA-HALKAAN-GALI';<br>
      ?&gt;
      </code>
    </div>
    <p>kadibna save garee.</p>
  </li>
  <li>
    <strong>4. Ka shaqeysii Botka sidoo kale Port forward garee:</strong>
    <p>session cusub soo furo kadibna gali:</p>
    <div class="code-block">
      <code>php -S localhost:8080</code>code>
      <strong>termux dhexdiisa session cusub ka soo fur</strong>
      <code>ssh -R 80:localhost:8080 nokey@localhost.run</code>
    </div>
    <p>Fur browser-kaaga oo gali URL ga uu kusiiyey.</p>
  </li>
</ul>

<h2>Nagu soo biir Telegram Channelkayaga</h2>
<p><a href="https://t.me/anonyducoo">Anony ducoo</a></p>

</body>
</html>
