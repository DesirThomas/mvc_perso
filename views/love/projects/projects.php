<?php
require("views/love/_lovingheader.php");
require('views/templates/_title.php');
?>

<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Mail</th>
                <th>Sujet</th>
                <th>Lien</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($projects as $project): ?>
            <tr>
                <td><?php echo $project['id']; ?></td>
                <td><?php echo $project['name']; ?></td>
                <td><?php echo $project['img']; ?></td>
                <td><?php echo $project['txt']; ?></td>
                <td><?php echo $project['link']; ?></td>
                <td><a href="<?php echo SITE_DIR; ?>love/editproject/<?php echo $project['id']; ?>"><i class="fas fa-edit"></i></a>
                <a class="a-beware" href="<?php echo SITE_DIR; ?>love/deleteproject/<?php echo $project['id']; ?>"><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot>
            <tr>
                <th colspan="6">
                    <a class="button" href="<?php echo SITE_DIR; ?>love/addproject/"><i class="fas fa-plus"></i> Ajouter un projet</a>
                </th>
            </tr>
        </tfoot>
    </table>
</div>
            
<?php require("views/love/_lovingfooter.php");?>