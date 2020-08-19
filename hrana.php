<h1 style="text-align: center" >Pozdravljen!</h1>
<?php

include_once 'session.php';

?>

<h2 style="text-align: center; color: red"> <?php echo $_SESSION['user_name'];?> </h2><br><br>

<form style="text-align: center" action="hrana_dodaj.php" method="post">  
    <label for="ime">Ime</label><br>
    <input type="text" name="ime" required="required"><br><br>
    <label for="opis">Opis</label><br>
    <textarea name="opis" cols="30" rows="8"></textarea><br><br>
    <input type="submit" name="submit" value="Shrani">
    <input type="reset" name="reset" value="Briši">
</form><br><br><br>

<form style="text-align:center" action="meni.php">
    <button style="background-color: lightskyblue">MENI</button>
</form>

<br>
<br>

<?php echo $_SESSION['food_name'];?>


