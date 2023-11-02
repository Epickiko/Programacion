<?php

$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countryarray = explode(",", $country);
$pais = [];

for ($i = 0; $i < count($countryarray); $i++){
    $piso["country"] = $countryarray[$i];
    array_push($pais, $piso);
}

var_dump($pais);

?>

