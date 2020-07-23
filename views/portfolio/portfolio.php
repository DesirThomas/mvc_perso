<?php
require('views/templates/_header.php');    
require('views/templates/_title.php');
?>

<?php foreach($projects as $project): ?>
    <div class="container-project">
        <div class="project">
            <div class="preview">
                <img src="<?php echo SITE_DIR;?>assets/img/projects/<?php echo $project['img']; ?>" alt="<?php echo $project['img_alt']; ?>">
            </div>
            
            <div class="info-project">
                <div class="title-info">
                    <h3><?php echo $project['name']; ?></h3>
                    <p><i class="fas fa-link"></i> <a href="<?php echo $project['link']; ?>"><?php echo substr($project['link'], 8, 40); ?></a></p>
                </div>

                <p><?php echo $project['txt']; ?></p>
            </div>
        </div>
    </div>

    <hr class="hr-mid" />
<?php endforeach; ?>

<?php require('views/templates/_footer.php');?>