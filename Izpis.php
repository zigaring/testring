<html>
<head>

<style type="text/css">
    div#nav 
    {
        background-color: #EEE;
        text-align: center;
        height: 200px;
    } 
</style>
<script>
     function Spremeni(el,clr){
          var elem = document.getElementById(el);
          elem.style.transition = "background 3.0s linear 0s";
          elem.style.background = clr;
      }
</script>

</head>
    <body>
        
        <button onclick="Spremeni('nav','#F0F');">Spremeni barvo</button><br><br>
        <div id="nav">Txt content...</div>
       











<?php

   include_once 'login.php';
?>



 <?php 
            echo "Moja barva je " . $_SESSION["barva"] . ".<br>";
            echo "Moja žival je " . $_SESSION["Zival"] . ".<br>";
            echo var_dump($z).".<br>";
            
            $x = "vaja";
            echo $x . "<br>";
            
            $y = ($salt.$x);
            echo $y . "<br>";
            
            $z = sha1($salt.$x);
            echo $z . "<br>";
            
            $q = sha1($x, TRUE);
            echo $q . "<br>";
            
            $q = sha1($x, TRUE);
            echo strlen ($q)."<br>";
            
            echo str_word_count($_SESSION["barva"])."<br>";
            
            $text = "Ziga Ring";
            echo strrev($text)."<br>";
            echo strrev($_SESSION["barva"])."<br><br><br>";
        
            
            echo strpos($_SESSION["barva"], "Modra")."<br>";
            
            $oldtxt = "ivy rad je seno";
            echo $newtxt = str_replace("seno", "korenje", $oldtxt)."<br>";
            
            
        ?>
    </body>
</html>