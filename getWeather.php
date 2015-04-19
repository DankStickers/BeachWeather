<?php

$json_string = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/city?id=4500092&d7170ab8a71f4a9db07c39384a1633f3");
$parsed_json = json_decode($json_string);
$temperature = $parsed_json->{'list'}['0']->main->temp;
/*print_r($parsed_json);*/
$ftemp = (($temperature - 273.15) * 1.8)+32;
print_r($temperature);
print_r("\n");
print_r($ftemp);
print_r("\n");
?>
