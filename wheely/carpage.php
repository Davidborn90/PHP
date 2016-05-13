<!doctype html>
    <html>
<head>
    <?php include "carlist.php"; ?>
    <?php
        $autolijst = new autoarray();
        $autos = $autolijst->getList();
        $merken = array();
        $selectie = array();
        foreach($autos as $auto){
            $merken[] = $auto ->getBrand();
        }
        $merken = array_unique($merken);
    ?>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<header><h3>MR WHEELY</h3></header>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" style="margin:auto; text-align:center;">
    <table style="margin:auto;">
        <thead style="text-align:center;">Zoeken</thead>
        <tbody>
        <tr>
            <td>Minimumprijs</td>
            <td>Maximumprijs</td>
        </tr>
            <tr>
                <td><input type="number" name = "min"></td>
                <td><input type="number" name = "max"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <select name="merken">
                        <option value="alle merken">Alle merken</option>
                        <?php
                        foreach($merken as $merk)
                        {
                        ?>
                    <option name="<?php echo $merk?>"><?php echo $merk?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="knop" value="zoeken">
                </td>
            </tr>
        </tbody>
    </table>
    </form><br>
<div style="max-width: 700px; display: flex; flex-wrap: wrap; margin: auto;">
    <?php
    if (isset($_GET['knop'])){
        $minprijs = (int)0;
        $maxprijs = PHP_INT_MAX;

        if(!$_GET["min"]==""){
            $minprijs = $_GET["min"];
        }
        if(!$_GET["max"]==""){
            $maxprijs = $_GET["max"];
        }
        foreach($autos as $auto){
            if($_GET["merken"]=="alle merken"){
                if($auto->getPrijs()>=$minprijs && $auto->getPrijs() <= $maxprijs){
                    $selectie[]=$auto;
                }
            }
            else{
                $merk = $_GET["merken"];
                if($auto -> getPrijs() >= $minprijs && $auto -> getPrijs <= $maxprijs && $auto -> getBrand() == $merk){
                    $selectie[]=$auto;
                }
            }
        }
    }
        else{$selectie=$autos;}
        foreach($selectie as $auto){
            ?>
            <table style="margin:auto; background-color:lightgray; border-radius:5%;>
                <thead>
                <tr>
                    <td><?php echo $auto->getBrand(); ?> <?php echo $auto->getModel(); ?></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="<?php echo $auto->getFoto(); ?>" style="width:250px;height:200px;"></td>
                </tr>
                <tr>
                    <td style="text-align:center;">&euro; <?php echo $auto->getPrijsFormat(); ?></td>
                </tr>
                </tbody>
            </table>
    <?php

    }
    if(empty($selectie)){
        ?>
    <h3>OOPS! niets gevonden. probeer iets anders</h3>
    <?php
    }
    ?>
</div>
</body>
</html>