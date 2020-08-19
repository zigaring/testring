<?php

    include 'database.php';
    
    $_ime = $_POST['ime'];
    $_geslo = $_POST['password'];
    
    
    if (!empty($_ime) && !empty($_geslo))
        {
        
        $pass = $salt.$_geslo;
        $pass = sha1($pass);
        
        $query = "INSERT INTO uporabnik(ime, geslo)"
                 . "VALUES(?, ?)";       
        
        $stmt = $pdo->prepare($query);
        $stmt->execute([$_ime,$pass]);
        
        header("Location: prijava.php");
        }
        
    else
        {
        header("Location: user_add.php");
        }

?>
