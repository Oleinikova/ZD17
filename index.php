<?php
session_start();
?>
Введите код с картинки:
<br/>
 <img style="border: 1px solid gray; background: url('bg_capcha.png');" src = "captcha.php" width="120" height="40"/>
<br/>
<form action="validator.php" method="POST">
     <input type="text" name="capcha" />
     <input type="submit" name="send" value="Проверить"/>
</form>