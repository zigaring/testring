<?php

include_once 'database.php';
include_once 'login.php';
include_once 'session.php';

$ime = $_POST["username"];
$pass = $_POST["pass"];

if (!empty($ime) && !empty($pass))
    {
        $pass = $salt.$pass;
        $pass = sha1($pass);
        
        $query = "SELECT * FROM uporabnik WHERE ime=? AND geslo=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$ime, $pass]);
        
        $user = $stmt->fetch();
        
        if ($stmt->rowCount() == 1)
            {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['ime'];
                
                header("Location: index.php");
                die();
            }
        else
            {
                $_SESSION['pass'] = $pass;
                header("Location: test.php");
                die();
            }
    
    }
    
    else 
        {
        header("Location: user_add.php");
        die();
        }