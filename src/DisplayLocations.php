<?php

function DisplayLocations(array $allLocations) : string
{
    $result = '';
    foreach ($allLocations as $item) {
        $result .=
            "<div class='itemcard'>
            <div class='imageplaceholder'><img class='imagesizing' src='{$item['photo']}' alt='{$item['sublocation']}'><p class='imagetext'>{$item['sublocation']},{$item['location']}</p></div>
            <div class='textcard'>
            <p>{$item['attraction']}</p>
            </div>
            </div>";

    }
    return $result;
};
//<img class='imagesizing' src='{$item['photo']}' alt='{$item['sublocation']}'>