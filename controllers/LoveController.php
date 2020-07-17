<?php
require_once( 'models/Livredor.php' );
require_once( 'models/Login.php' );

function isLogged(){
    // On vérifie si un cookie significatif existe
    if( ! isset( $_COOKIE['isLogged'] ) ) {
        // Si non, on redirige vers le formulaire de login
        Header( 'Location: ' . SITE_DIR . 'love/eachother' );
    }
}

function indexAction(){
    isLogged();

    $pageTitle = 'Tableau de bord';
    require( 'views/love/index.php' );
}

function eachotherAction(){
    if( isset( $_POST['loverconnect'] ) ) {
        $login    = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['pass']);

        $params = [
            'login'     => $login,
            'password' => $password,
        ];

        $result      = Login::Lover( $params );

        if( $result ) {
            // On crée le cookie
            setcookie( 'isLogged', true, time() + 300 );
        }

        // On redirige vers le tableau de bord
        Header( 'Location: ' . SITE_DIR . 'love' );
    }

    $pageTitle = 'Tableau de bord';
    require_once( 'views/love/eachother.php' );
}

function logoutAction(){
    // 1. Détruire la session
    setcookie( 'isLogged', true, time() + 0 );

    // 2. Redirection vers la page login
    Header( 'Location: ' . SITE_DIR . 'love/eachother' );
}