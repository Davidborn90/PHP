<?php

function convert($c){
    $f =($c * 2) + 30;
    echo "<br>"."= ".$f." graden fahrenheit";
}
?>

<form action="convertfahrenheit.php" method="get">
    Celcius: <input type="number" name="deg"><br>
</form>
    <?php
    convert($_GET["deg"]);
    ?>

