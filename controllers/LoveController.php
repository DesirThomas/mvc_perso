<?php
require_once( 'models/Livredor.php' );
require_once( 'models/Login.php' );

function isLogged(){
    // On vérifie si une session significative existe
    if( ! isset( $_SESSION['isLogged'] ) ) {
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
            // On crée la session
            $_SESSION['isLogged'] = $result['id'];
        }

        // On redirige vers le tableau de bord
        Header( 'Location: ' . SITE_DIR . 'love' );
    }

    $pageTitle = 'Tableau de bord';
    $secondTitle = "&laquo; Don't forget to love each other &hearts; &raquo;";
    require_once( 'views/love/eachother.php' );
}

function logoutAction(){
    // 1. Détruire la session
    session_destroy();

    // 2. Redirection vers la page login
    Header( 'Location: ' . SITE_DIR . 'love/eachother' );
}