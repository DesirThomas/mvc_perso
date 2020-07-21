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
                <th>Date/Heure</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($messages as $message): ?>
            <tr>
                <td><?php echo $message['id']; ?></td>
                <td><?php echo $message['name']; ?></td>
                <td><?php echo $message['mail']; ?></td>
                <td><?php echo $message['subject']; ?></td>
                <td><?php echo $message['creation_date']; ?></td>
                <td><a href="<?php echo SITE_DIR; ?>love/showmessage/<?php echo $message['id']; ?>"><i class="far fa-file-alt" alt="consulter"></i></a></td>
                <td><a class="a-beware" href="<?php echo SITE_DIR; ?>love/deletemessage/<?php echo $message['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot></tfoot>
    </table>
</div>

<?php require("views/love/_lovingfooter.php");?>