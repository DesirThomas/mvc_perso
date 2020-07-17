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

        <!-- API / CSS -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu"/>
        <link rel="stylesheet" href="<?php echo SITE_DIR;?>assets/css/styles.min.css" />

        <!-- Script JS -->
        <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
    </head>

    <body>
		<header>
            <div class="logo_h1">
                <a href="<?php echo SITE_DIR;?>"><i class="fas fa-flask" alt="logo"></i></a>
                <h1><?php if(!empty($pageTitle)) echo $pageTitle ?></h1>
            </div>
        </header>
        
		<main class="container">