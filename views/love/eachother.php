<?php require("views/love/_lovingheader.php");?>
  
<h2>&laquo; Don't forget to love each other &hearts; &raquo;</h2>

<form method="post">
    <div class="form_row">
        <input type="text" name="login" id="login" placeholder="&hearts;&hearts;&hearts;&hearts;" required />
        <label for="login">&hearts; :</label>
    </div>
    <div class="form_row">
        <input type="password" name="pass" id="pass" placeholder="&hearts;&hearts;&hearts;&hearts;" required />
        <label for="pass">Mot de passe :</label>
    </div>
    <div class="form_row_centered">
        <input class="button margeless" type="submit" value="Log In" name="loverconnect"/>
    </div>
</form>

<?php require("views/love/_lovingfooter.php");?>