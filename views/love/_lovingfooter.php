        <hr class="hr-bottom" />
    </div>
</main>

<footer>
    <p class="copyrights">
        copyright($copyright} . date('Y') | 
        <a class="a-nav" href="<?php echo SITE_DIR;?>menu/contact/"><i class="far fa-envelope"></i> header($contact)</a> | 
        <a class="a-gold" href="<?php echo SITE_DIR;?>livredor/"><i class="fas fa-book"></i> header($livredor) <i class="fas fa-external-link-alt"></i></a> | 
        <a class="a-nav" href="<?php echo SITE_DIR;?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-vial"></i> header($homepage) <i class="fas fa-external-link-alt"></i></a> 
        <?php if( isset($_SESSION["isLogged"]) ) : ?>
            | <a class="a-nav" href="<?php echo SITE_DIR;?>love/logout"><i class="fas fa-skull-crossbones"></i> function LogOut()</a></li>
        <?php endif; ?>
    </p>
</footer>

</body>
</html>