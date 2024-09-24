<?php

function DisplayLocations(array $allLocations) : string
{
    $result = '';
    foreach ($allLocations as $item) {
        $result .= "The location is {$item['location']} <br> The sub-location is {$item['sublocation']} <br>  While I was there I went to {$item['attraction']} <br><br>";

    }
    return $result;
};