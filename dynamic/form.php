<!doctype HTML>
<html>
<head></head>
<body>
<?php
if (isset($_GET["error"])){
    echo "<p style=\"color:red;\">Voer alle gegevens in a.u.b.</p>";
}
?>
<form action="return.php" method="POST">
    <table>
        <tr>
            <td><label for="naam">Naam :</label></td>
            <td><input type="text" name="naam"></td>
        </tr>
        <tr>
            <td><label for="adres">Adres :</label></td>
            <td><input type="text" name="adres"></td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td><label for="wachtwoord">Wachtwoord :</label></td>
            <td><input type="password" name="wachtwoord"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:right;"><input type="submit" name="knop" value="versturen"></td>
        </tr>
    </table>
</form>
</body>
</html>