<style>
    *{
        text-align:center;
    }
</style>
<body>
<?php
    $row=10;

    for($i=0; $i<$row; $i++)
    {
        for($x=0; $x<$i; $x++)
        {
            echo"*";
        }
        echo"<br>";
    }
?>
</body>