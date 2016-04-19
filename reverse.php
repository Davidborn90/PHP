<?php
function rev($s){
   echo strrev ( $s );
}
?>
<form action="reverse.php" method="get">
    <input type="text" name="string">
</form>
<?php
rev($_GET["string"]);
?>