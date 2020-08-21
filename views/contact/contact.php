<?php
require('views/templates/_header.php');    
require('views/templates/_title.php');
?>

<form method="post">
    <div class="form_row">
        <input type="text" name="name" id="name" placeholder="Nom" required />
        <label for="name">Nom :</label>
    </div>
    <div class="form_row">
        <input type="text" name="firstname" id="firstname" placeholder="Prénom" />
        <label for="firstname">Prénom :</label>
    </div>
    <div class="form_row">
        <input type="mail" name="mail" id="mail" placeholder="***@***.*" required />
        <label for="pass">Adresse E-mail :</label>
    </div>
    <div class="form_row">
        <input type="tel" name="tel" id="tel" pattern="[0-9]{10,}" placeholder="0000000000+" />
        <label for="tel">Téléphone :</label>
    </div>
    <div class="form_row">
        <input type="text" name="subject" id="subject" placeholder="Le sujet de votre message" required />
        <label for="subject">Sujet :</label>
    </div>
    <div class="form_row last">
        <textarea class="area-contact" type="text" name="message" id="message" placeholder="Votre message." required></textarea>
        <label for="message">Message :</label>
    </div>
    <div class="form_row_centered">
        <input class="button" type="submit" value="Envoyer" name="loverconnect"/>
    </div>
</form>

<?php require('views/templates/_footer.php');?>