<?php
session_start();
require_once( 'models/Contact.php' );
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

function portfolioAction(){
    isLogged();

    $pageTitle = 'Gestion du Portfolio';
    require( 'views/love/portfolio/portfolio.php' );
}

function contactAction(){
    isLogged();

    $messages      = Message::getMessages();

    $pageTitle = 'Gestion des messages';
    require( 'views/love/messages/messages.php' );
}

function showmessageAction(){
    isLogged();

    $requestUri     = str_replace( SITE_DIR, '', $_SERVER['REQUEST_URI'] );
    $requestParams  = explode( '/', $requestUri );
    $messageId = isset( $requestParams[2] ) ? $requestParams[2] : null;
    $message = Message::getMessage($messageId);

    $pageTitle = "Message n°".$message['id'];
    require( 'views/love/messages/showmessage.php' );
}

function deletemessageAction(){
    isLogged();

    $requestUri    = str_replace( SITE_DIR, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $messageId     = isset( $requestParams[2] ) ? $requestParams[2] : null;

    Message::deleteMessage( $messageId );

    Header( 'Location: ' . SITE_DIR . 'love/messages' );

}

function livredorAction(){
    isLogged();

    $pageTitle = "Gestion du Livre d'or";
    require( 'views/love/livredor/livredor.php' );
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
        };

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