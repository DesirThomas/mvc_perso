<?php
require("views/love/_lovingheader.php");
require('views/templates/_title.php');
?>

<form method="post">
    <div class="form_row">
        <input type="text" name="name" id="name" required />
        <label for="name">Nom :</label>
    </div>
    <div class="form_row">
        <input type="text" name="img" id="img" />
        <label for="img">Image :</label>
    </div>
    <div class="form_row">
        <input type="text" name="img_alt" id="img_alt" value="<?php echo $project['img_alt']; ?>" />
        <label for="img_alt">Description de l'image :</label>
    </div>
    <div class="form_row">
        <textarea type="text" name="txt" id="txt" required></textarea>
        <label for="txt">Texte :</label>
    </div>
    <div class="form_row">
        <input type="text" name="link" id="link" />
        <label for="link">URL :</label>
    </div>
    <div class="form_row_centered">
        <a class="button" href="<?php echo SITE_DIR;?>love/projects">Retour</a>
        <input class="button" type="submit" value="Ajouter" name="addproject"/>
    </div>
</form>

<?php require("views/love/_lovingfooter.php");?>