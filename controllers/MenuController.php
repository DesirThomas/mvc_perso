<?php

function indexAction() {
    $pageTitle = 'Bienvenue';
    $secondTitle = 'Accueil';
    require('views/accueil/index.php');
}

function contactAction() {
    $pageTitle = 'Contact';
    require('views/contact/contact.php');
}

function bioAction() {
    $pageTitle = 'Biographie';
    require('views/biographie/biographie.php');
}

function competenceAction() {
    $pageTitle = 'Compétences';
    require('views/competences/competences.php');
}

function portfolioAction() {
    $pageTitle = 'Portfolio';
    $secondTitle = '#Noob';
    require('views/portfolio/portfolio.php');
}