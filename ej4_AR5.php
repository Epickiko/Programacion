<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countryarray = explode(",", $country);
$cityarray = explode(",", $city);
$array = [];

for ($i = 0; $i < count($countryarray); $i++) {
    $pais["country"] = $countryarray[$i];
    $pais["city"] = $cityarray[$i];

    array_push($array, $pais);
}

var_dump($array);
?>