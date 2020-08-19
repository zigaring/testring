<?php
   include_once 'session.php';
?>

<html>
    <body>
        <h1>zdravooooooo</h1>
        
        <?php
        
        
        
            if(isset($_SESSION['user_id']))
            {
                echo"<p>Dobrodošel prijavljen uporabnik</p>";
                echo"<br>";
                echo $_SESSION['user_id'];
                echo"<br>";
                echo '<li><b><a href="odjava.php" style="color: black">Odjava</a></b></li>';
                echo'<br>';
                echo'<li><b><a href="hrana.php" style="color:black">Hrana</a></b></li>';
                echo '<br>';
                echo $_SESSION['user_name'];
            }
            else
            {
                echo"<p>Poskusi ponovno</p>";
                echo '<b><a href="prijava.php" sytle="color: black">Prijava</a></b>';
            }
        ?>
        
    </body>
</html>