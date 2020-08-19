<?php

include_once 'database.php';
include_once 'session.php';

$ime = $_POST['ime'];
$opis = $_POST['opis'];

if (!empty($ime) && !empty($opis)) 
    {
    
    $query = "INSERT INTO hrana(ime, opis) VALUES(?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$ime, $opis]);
    
    

    
    $query = "SELECT * FROM hrana WHERE ime = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$ime]);
    
    $food = $stmt->fetch();
    
        if($stmt->rowCount() == 1)
        {
        $_SESSION['food_name'] = $food['ime'];

        header("Location: obrok.php");
        }
    else
        {
        header("Location: hrana.php");
       }
    
    }
else
    {
        header("Location: hrana.php");
    }


