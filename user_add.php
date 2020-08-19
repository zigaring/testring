<?php
    include_once 'database.php';
?>

<form action="user_insert.php" method="post">
    <label for="ime">Ime</label>
    <input type="text" name="ime" required="required"></br></br>
    <label for="password">Geslo</label>
    <input type="password" name="password" required="required"><br><br>
    <input type="submit" name="submit" value="Prijava">
    <input type="reset" name="reset" value="Ponastavi">
</form>

<?php
    echo "$salt";
?>

