<?php

function DisplayLocations(array $allLocations) : string
{
    $result = '';
    foreach ($allLocations as $item) {
        $result .= "<div class='card'><p>The location is {$item['location']}</p><p>The sub-location is {$item['sublocation']}</p><p>While I was there I went to {$item['attraction']}</p></div>";

    }
    return $result;
};