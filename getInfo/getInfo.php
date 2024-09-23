<?php

function getInfo ($all)
{
    $result = '';
    foreach ($all as $item) {
        $result .= "The location is {$item['location']} <br> The sub-location is {$item['sublocation']} <br>  While I was there I went to {$item['attraction']} <br><br>";

    }
    return $result;
};