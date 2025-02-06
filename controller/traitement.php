<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../model/database.php');
session_start(); 

if (isset($_POST['afficher'])) {
    $Nom_Projet = $_POST['Nom_Projet'];
    $Type_Projet = $_POST['Type_Projet'];
    $Impacts = $_POST['Impacts_Projet'];

    $query = 'SELECT * FROM entrepreneur';
    $statement = $db->query($query);
    $entrepreneurs = $statement->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['entrepreneurs'] = $entrepreneurs;

    header('Location:../index.php');
    exit; 
}
?>
