<?php

$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$countrycity = explode(";", $data);
$element = [];
foreach($countrycity as $pareja){    
    $datarray = explode(",", $pareja);
    $ka["country"] = $datarray[1];
    $ka["city"] = $datarray[0];
    array_push($element, $ka);
}

var_dump($element);
?>