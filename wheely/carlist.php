<?php
class cars{
    var $merk;
    var $model;
    var $url;
    var $prijs;

    function __construct($carbrand, $carmodel, $carvalue, $foto){
        $this ->merk=$carbrand;
        $this ->model=$carmodel;
        $this ->prijs=$carvalue;
        $this ->url=$foto;
    }

    function getBrand(){
        return $this ->merk;
    }
    function getModel(){
        return $this ->model;
    }
    function getPrijs(){
        return $this ->prijs;
    }
    function getFoto(){
        return $this ->url;
    }
    function setBrand($carbrand){
        $this ->merk=$carbrand;
    }
    function setModel($carmodel){
        $this ->model=$carmodel;
    }
    function setPrijs($carvalue){
        $this ->prijs=$carvalue;
    }
    function setFoto($foto){
        $this ->url=$foto;
    }
    function getPrijsFormat(){
        $tempprijs = number_format($this->prijs, 2, ',', '.');
        $tempprijs = substr_replace($tempprijs, '--', -2);
        return $tempprijs;
    }
}

class autoarray{
    var $array = array();
    function __construct(){
        $ford1 = new cars("Ford", "Fiesta", 23999, "http://images.car.bauercdn.com/upload/11855/images/1040x585/1fordfiesta125drive.jpg?mode=pad");
        $this->array[] = $ford1;
        $ford2 = new cars("Ford", "Focus", 18995, "http://buyersguide.caranddriver.com/media/assets/submodel/5493.jpg");
        $this->array[] = $ford2;
        $opel1 = new cars("Opel", "Astra", 14895, "http://www.opel.nl/content/dam/Opel/Europe/master/hq/en/01_Vehicles/01_PassengerCars/Astra%20Hatchback%202015/Embargo/Family/Opel_Astra_2015_Hatchback_Header_944x550_as16_e01_233.jpg");
        $this->array[] = $opel1;
        $opel2 = new cars("Opel", "Insignia", 65450, "http://www.opel.nl/content/dam/Opel/Europe/master/hq/en/01_Vehicles/01_PassengerCars/New_Insignia_Family/Insignia_Hatchback/MY%20155/768x432/Opel_Insignia_Exterior_768x432_ins155_e03_055.jpg");
        $this->array[] = $opel2;
        $subaru1 = new cars("Subaru", "Forester", 34750, "http://buyersguide.caranddriver.com/media/assets/submodel/7145.jpg");
        $this->array[] = $subaru1;
        $subaru2 = new cars("Subaru", "Impreza", 28345, "http://images.pistonheads.com/nimg/33354/hawkeye_impreza_004-L.jpg");
        $this->array[] = $subaru2;
        $mercedes1 = new cars("Mercedes", "E 63", 110995, "http://m.images.boldride.com/mercedes-benz/2014/mercedes-benz-e63-amg-estate.2000x1333.Jan-10-2013_09.00.09.517151.jpg");
        $this->array[] = $mercedes1;
        $mercedes2 = new cars("Mercedes", "CLA 45", 190780, "http://www.aaarentcars.com/sites/default/files/vehicule_images/aaa_luxury_rent_new_mercedes_cla_45amg_11.jpg");
        $this->array[] = $mercedes2;
        $ferrari1 = new cars("Ferrari", "612 GTO", 350500, "http://o.aolcdn.com/dims-global/dims3/GLOB/legacy_thumbnail/750x422/quality/95/http://www.blogcdn.com/www.autoblog.com/media/2010/06/barcelona0007layer-1.jpg");
        $this->array[] = $ferrari1;
        $citroen1 = new cars("Citroen", "2CV", 459, "http://www.speeddoctor.net/media/2012/06/Citroen-2CV6-Club_01.jpg");
        $this->array[] = $citroen1;
        $mini1 = new cars("Mini", "Cooper", 34495, "http://static.usnews.rankingsandreviews.com/images/Auto/izmo/337348/2012_mini_cooper_hardtop_angularfront.jpg");
        $this->array[] = $mini1;
    }
    function getList(){
        return $this ->array;
    }
}