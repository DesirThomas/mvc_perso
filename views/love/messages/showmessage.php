<?php
require("views/love/_lovingheader.php");
require('views/templates/_title.php');
?>

<div class="space right">
    <p><span><i class="fas fa-user-circle"></i> Nom, Prénom :</span> <?php echo $message['name']; ?>, <?php if(!empty($message['firstname'])) echo $message['firstname']; else echo '(Inconnu)'?></p>
    <p><span><i class="fas fa-at"></i> Mail :</span> <?php echo $message['mail']; ?></p>
    <p><span><i class="fas fa-phone-alt"></i> Tel. :</span> <?php if(!empty($message['tel'])) echo $message['tel']; else echo '(Inconnu)'?></p>  
</div>

<div class="space">
    <p><span><i class="far fa-clock"></i> Date et Heure :</span> <?php echo $message['creation_date']; ?></p>
    <p><span>Sujet :</span> <?php echo $message['subject']; ?></p>
</div>

<div class="space">
    <p><span>Message :</span></p>
    <p>&laquo; <?php echo $message['message']; ?> &raquo;</p>
</div>

<div class="space center">
    <a class="button" href="<?php echo SITE_DIR;?>love/messages">Retour</a>
</div>

<?php require("views/love/_lovingfooter.php");?>