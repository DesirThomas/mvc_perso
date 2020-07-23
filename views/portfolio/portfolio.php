<?php
require('views/templates/_header.php');    
require('views/templates/_title.php');
?>

<?php foreach($projects as $project): ?>
    <div class="project">
        <img class="preview" src="<?php echo SITE_DIR;?>assets/img/projects/<?php echo $project['img']; ?>" alt="<?php echo $project['img_alt']; ?>">

        <div class="text-project">
            <h3><?php echo $project['name']; ?></h3>
            
            <p><i class="fas fa-link"></i> <a href="<?php echo $project['link']; ?>"><?php echo substr($project['link'], 8, 40); ?></a></p>
            
            <p><?php echo $project['txt']; ?></p>
        </div>
    </div>

    <hr class="hr-mid" />
<?php endforeach; ?>

<?php require('views/templates/_footer.php');?>