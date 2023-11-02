<?php

$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$arraycity = explode(",", $city);
$capitals = [];

for ($i = 0; $i < count($arraycity); $i++) {
    $countrycity["city"] = $arraycity [$i];
    array_push($capitals, $countrycity);
}

var_dump($capitals);
?>