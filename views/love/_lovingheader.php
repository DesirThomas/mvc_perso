<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Ici se trouvent les métadonnées pour le navigateur -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        

        <!-- Web.Nav -->
        <title><?php if(!empty($pageTitle)) echo $pageTitle.' - '; ?>DESIR Thomas</title>
        <meta name="description" content="Le site personnel de Désir Thomas, Développeur Web Junior." />

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_DIR;?>apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_DIR;?>favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_DIR;?>favicon-16x16.png">
        <link rel="manifest" href="<?php echo SITE_DIR;?>site.webmanifest">
        <link rel="mask-icon" href="<?php echo SITE_DIR;?>safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#25d2d0">
        <meta name="theme-color" content="#ffffff">
        
        <!-- API / CSS -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"/>
        <link rel="stylesheet" href="<?php echo SITE_DIR;?>assets/css/styles.min.css" />

        <!-- Script JS -->
        <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
        <script>
			function burger() {
				let nav = document.getElementById("navList");
				if (nav.style.display === "inline") {
					nav.style.display = "";
				} else {
					nav.style.display = "inline";
				}
			}
		</script>
    </head>

    <body>
		<header>
            <div class="logo_h1">
                <a class="a-nav" href="<?php echo SITE_DIR;?>love"><i class="fas fa-flask" alt="logo"></i></a>
                <h1>&lsaquo;?php $h1 = "<?php if(!empty($pageTitle)) echo $pageTitle ?>";</h1>
            </div>

            <a href="javascript:void(0);" class="burger" onclick="burger()">
                <i class="fa fa-bars"></i>
            </a>
            <nav id="navList">
                <ul>
                    <li><a class="a-nav" href="<?php echo SITE_DIR;?>" target="_blank" rel="noopener noreferrer"><i class="fas fa-vial"></i> header($homepage) <i class="fas fa-external-link-alt"></i></a></li>
                    <li><a class="a-gold" href="<?php echo SITE_DIR;?>livredor"><i class="fas fa-book"></i> Gestion($Livre d'or) {} </a></li>
                    <?php if( isset($_SESSION["isLogged"]) ) : ?>
                        <a class="a-nav" href="<?php echo SITE_DIR;?>love/logout"><i class="fas fa-skull-crossbones"></i> function LogOut()</a></li>
                    <?php endif; ?>
                </ul>
            </nav>

        </header>
        
		<main class="container">