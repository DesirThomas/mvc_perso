<?php
require("views/love/_lovingheader.php");
require('views/templates/_title.php');
?>

<form method="post">
    <div class="form_row">
        <input type="text" name="name" id="name" value="<?php echo $project['name']; ?>" required />
        <label for="name">Nom :</label>
    </div>
    <div class="form_row">
        <input type="text" name="img" id="img" value="<?php echo $project['img']; ?>" />
        <label for="img">Image :</label>
    </div>
    <div class="form_row">
        <textarea type="text" name="txt" id="txt" required><?php echo $project['txt']; ?></textarea>
        <label for="txt">Texte :</label>
    </div>
    <div class="form_row">
        <input type="text" name="link" id="link" value="<?php echo $project['link']; ?>" />
        <label for="link">URL :</label>
    </div>
    <div class="form_row_centered">
        <a class="button" href="<?php echo SITE_DIR;?>love/projects">Retour</a>
        <input class="button" type="submit" value="Modifier" name="editproject"/>
    </div>
</form>

<?php require("views/love/_lovingfooter.php");?>