<?php

$city=$_GET['city'];
$city=str_replace(" ", "", $city);
/*echo
file_get_contents("http://www.weather-forecast.com/locations/New-York/forecasts/latest");*/
$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");

/*preg_match("/a/i", "apples are awesome!",$matches);
print_r($matches);*/
//preg_match("/3 Day (.*?) Summary:/i",$contents ,$matches);
preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s',$contents ,$matches);
echo  $matches[1];
?>