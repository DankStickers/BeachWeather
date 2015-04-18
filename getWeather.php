<?php

$APIKEY = "d7170ab8a71f4a9db07c39384a1633f3";

$weather = http_get("api.openweathermap.org/data/2.5/forecast/city?id=524901&APPID", APPID=APIKEY);

echo $weather