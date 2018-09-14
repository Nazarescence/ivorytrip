<?php
/**
 * Created by PhpStorm.
 * User: dsane
 * Date: 2018-09-13
 * Time: 13:09
 */


if( ! array_key_exists('nom',$_POST)){
    $_POST['nom'] = "";
}
$nom = $_POST['nom'];

if( ! array_key_exists('prenom',$_POST)){
    $_POST['prenom'] = "";
}
$prenom = $_POST['prenom'];

if( ! array_key_exists('age',$_POST)){
    $_POST['age'] = 0;
}
$age = $_POST['age'];

if( ! array_key_exists('courriel',$_POST)){
    $_POST['courriel'] = "";
}
$email = $_POST['courriel'];

if( ! array_key_exists('psw',$_POST)){
    $_POST['psw'] = "";
}
$psw = $_POST['psw'];