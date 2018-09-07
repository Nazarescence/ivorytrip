<?php
/**
 * Created by PhpStorm.
 * User: eoyoua
 * Date: 01/09/2018
 * Time: 16:21
 */
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>IvoryTrip</title>
    <meta name="author" content="David SANE - Elie OYOUA" >
    <meta name="description" content="Promotion du tourisme en Côte d'Ivoire" >
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <script src="https://use.fontawesome.com/639c474b7d.js"></script>

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body>
<!--logo cliquable en forme de drapeau-->
<header>
    <a href="index.php"><img src="images/logo.jpg" alt="logo drapeau cote d'ivoire" id="logo"></a>

    <!-- Enseigne "ivorYtrip" -->
    <div id="ivorytrip"><img src="images/ivorytrip.png" alt="ivorytrip"></div>

    <!--navigation proposant differentes langues-->
    <nav id="langue">
        <ul>
            <li><a href="" class="langue">English</a></li>
            <li><a href="" class="langue">Español</a></li>
        </ul>
    </nav>

    <!--navigation réseaux sociaux-->
    <nav id="social">
        <ul>
            <li><a href="http://www.facebook.com"><img src="images/facebook.png" alt="icone facebook"></a></li>

            <li><a href="http://www.instagram.com"><img src="images/insta.png" alt="icone instagram"></a></li>

            <li><a href="http://www.twitter.com"><img src="images/twitter.png" alt="icone twitter"></a></li>

            <li><a href="http://www.youtube.com"><img src="images/youtube.png" alt="icone youtube"></a></li>

        </ul>
    </nav>

    <!--barre de navigation du menu principal du site-->
    <?php
    require_once ('views/menu_bar.php');

    ?>
</header>
