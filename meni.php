<h1 style="text-align: center">Meni za danes</h1>
<br>
<br>

<?php

include_once 'database.php';
include_once 'session.php';

$query = "SELECT * FROM hrana ORDER BY id";
$stmt = $pdo->prepare($query);
$stmt->execute();

while ($row = $stmt->fetch())
    {
    
    echo '<a href="obrok.php?id='.$row['id'].'">';
    echo $row['ime'];
    echo'</a>';
    echo'<br>';
   
    }


?>