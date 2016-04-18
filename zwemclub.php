<?php
$z["de spartelkuikens"] = 25;
$z["de waterbuffels"] = 32;
$z["plonsmderin"] = 11;
$z["bommetje"] = 23;

foreach($z as $label =>$waarde)
{
    echo"<tr>";
    echo"<td>".$label."</td><td> ".$waarde."</td><td>";
    for($i=0;$i<$waarde;$i++)
    {
        if($i%5==4){
            echo"<p style='\height:50px;width:50px;'>*</p>";
        }
    }
    echo"</td>";
    echo"</tr>";
}

