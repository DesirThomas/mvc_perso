<?php
require('views/templates/_header.php');    
require('views/templates/_title.php');
?>

<div class="skill">
    <span class="i"><i class="fab fa-html5"></i></span>
    
    <div class="info-skill">
        <h3>HTML</h3>                
        <textarea>C'est le bidule qui sert aux fondations du site.</textarea>
    </div>
</div>

<hr class="hr-mid" />

<div class="skill">
    <span class="i"><i class="fab fa-css3"></i></span>
    
    <div class="info-skill">
        <h3>CSS</h3>
        <p>Accompagné de <i class="fab fa-sass fa-2x"></i> en développement, <span class="pinky-text">c'est le bidule qui donne du style au site.</span></p>                
        <p>Il peut servir aussi à animer.</p>
        <div class="exemple-div-anim">
            <p class="pinky-text">Placez votre curseur dans ce cadre.</p>
        </div>
    </div>
</div>

<hr class="hr-mid" />

<div class="skill">
<span class="i"><i class="fab fa-js"></i></span>
    
    <div class="info-skill">
        <h3>Javascript</h3>                
        <textarea>C'est le bidule qui sert à rendre dynamique le site.</textarea>
    </div>
</div>

<hr class="hr-mid" />

<div class="skill">
    <span class="i"><i class="fab fa-php"></i></span>
    
    <div class="info-skill">
        <h3>PHP</h3>                
        <p>C'est le bidule qui sert aux fonctionnalités du site.</p>
        <p>Il était <?php echo date('G:i \l\e d/m/Y') ?> la dernière fois que vous avez chargé cette page.</p>
    </div>
</div>

<hr class="hr-mid" />

<div class="skill">
    <span class="i"><i class="fas fa-database"></i></span>
    
    <div class="info-skill">
        <h3>SQL</h3>                
        <p>C'est le bidule qui sert aux fonctionnalités du site.</p>
    </div>
</div>

<hr class="hr-mid" />

<div class="iknow">
    <ul>Je travaille aussi avec :
        <li><i class="fab fa-git-alt fa-2x"></i> Git</li>
    </ul>
</div>

<div class="initiate">
    <ul>J'ai été initié à :
        <li><i class="fab fa-symfony fa-2x"></i> Symfony</li>
        <li><i class="fab fa-react fa-2x"></i> React</li> 
        <li><i class="fab fa-bootstrap fa-2x"></i> Bootstrap</li>
    </ul>
</div>

<?php require('views/templates/_footer.php');?>