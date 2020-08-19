<h1 style="text-align: center; color: cyan" >Lep Pozdrav</h1>

<?php

include_once 'session.php';

$obrok_id = (int) $_GET['id'];

$query = "SELECT ime FROM hrana WHERE id = $obrok_id ";
$stmt = $pdo->prepare($query);
$stmt->execute();


$obrok = $stmt->fetch();

echo $obrok['ime'];

?>
