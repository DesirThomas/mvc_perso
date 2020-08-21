<?php
session_start();
require_once( 'models/Project.php' );
require_once( 'models/Message.php' );
require_once( 'models/Livredor.php' );
require_once( 'models/Login.php' );

function isLogged(){
    if( ! isset( $_SESSION['isLogged'] ) ) {
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
            $_SESSION['isLogged'] = $result['id']; // session creation
        };

        Header( 'Location: ' . SITE_DIR . 'love' );
    }

    $pageTitle = 'LogIn()';
    $secondTitle = "&laquo; Don't forget to love each other &hearts; &raquo;";
    require_once( 'views/love/eachother.php' );
}

function logoutAction(){
    session_destroy();
    Header( 'Location: ' . SITE_DIR . 'love/eachother' );
}


// Gestion portfolio/project

function projectsAction(){
    isLogged();

    $projects      = Project::getProjects();

    $pageTitle = 'Gestion des Projets';
    require( 'views/love/projects/projects.php' );
}

function addprojectAction(){
    isLogged();
    
    if( isset( $_POST['addproject'] ) ) {

        $name = htmlspecialchars( $_POST['name'] );
        $img = htmlspecialchars( $_POST['img'] );
        $img_alt = htmlspecialchars( $_POST['img_alt'] );
        $txt = htmlspecialchars( $_POST['txt'] );
        $link = htmlspecialchars( $_POST['link'] );

        $params = array(
            'name' => $name,
            'img' => $img,
            'img_alt' => $img_alt,
            'txt' => $txt,
            'link' => $link,
        );

        Project::addProject( $params );
        
        Header( 'Location: ' . SITE_DIR . 'love/projects/projects' );
    }
    
    $pageTitle = 'Ajouter un projet';
    require( 'views/love/projects/addproject.php' );
}

function editprojectAction(){
    isLogged();

    $requestUri = str_replace( SITE_DIR, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $projectId = isset( $requestParams[2] ) ? $requestParams[2] : null;

    $project = Project::getProject( $projectId );

    if( isset( $_POST['editproject'] ) ) {

        $name = htmlspecialchars( $_POST['name'] );
        $img = htmlspecialchars( $_POST['img'] );
        $img_alt = htmlspecialchars( $_POST['img_alt'] );
        $txt = htmlspecialchars( $_POST['txt'] );
        $link = htmlspecialchars( $_POST['link'] );

        $params = array(
            'name' => $name,
            'img' => $img,
            'img_alt' => $img_alt,
            'txt' => $txt,
            'link' => $link,
        );

        Project::editProject( $projectId, $params );
        header( 'Location: ' . SITE_DIR . 'love/projects/projects' . $project['id'] . '' );
    }

    $pageTitle = 'Modifier le projet "' . $project['name'] . '"';
    require( 'views/love/projects/editproject.php' );
}

function deleteprojectAction(){
    isLogged();

    $requestUri    = str_replace( SITE_DIR, '', $_SERVER['REQUEST_URI'] );
    $requestParams = explode( '/', $requestUri );
    $projectId     = isset( $requestParams[2] ) ? $requestParams[2] : null;

    Project::deleteProject( $projectId );

    Header( 'Location: ' . SITE_DIR . 'love/projects' );

}


// Gestion Contact/Message

function messagesAction(){
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


// Gestion Livre d'or

function livredorAction(){
    isLogged();

    $pageTitle = "Gestion du Livre d'or";
    require( 'views/love/livredor/livredor.php' );
}
