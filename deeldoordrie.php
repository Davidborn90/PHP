<?php
function divide($i)
{
    $y = $i % 3;
    if ($i > 0) {
        if ($y == 0) {
            echo "ja " . $i . " is deelbaar door 3.";
        } else {
            echo "nee " . $i . " is niet deelbaar door 3.";
        }
    }
    else
    {
        echo "Voer een getal in om te delen door 3";
    }
}

?>
<form action="deeldoordrie.php" method="get">
    <input type="number" name="n">
</form>
<?php
    divide($_GET["n"]);
?>
