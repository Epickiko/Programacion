<?php


$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];
$all = [];
for ($i = 0; $i < count($country); $i++) {
    $countrycity["country"] = $country[$i];
    $countrycity["city"] = $city[$i]; 
    array_push($all, $countrycity);
}

print_r($all);
?>