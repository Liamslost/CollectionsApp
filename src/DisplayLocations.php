<?php

function DisplayLocations(array $allLocations) : string
{
    $result = '';
    foreach ($allLocations as $item) {
        if (!isset($item['photo']) || !isset($item['sublocation']) || !isset($item['location']) || !isset($item['attraction'])) {
            throw new InvalidArgumentException("Unassigned key");
        }
        $result .="<div class='itemcard'>";
        $result .="<div class='imageplaceholder'>";
        $result .="<img class='imagesizing' src='{$item['photo']}' alt='{$item['sublocation']}'>";
        $result .="<div class='deleteButton'><form method='POST'>";
        $result .="<button type='submit'>X</button>";
        $result .="<input type='text' name='id' id='id' value='{$item['id']}'>";
        $result .="</form></div>";
        $result .="<p class='imagetext'>{$item['sublocation']},{$item['location']}</p>";
        $result .="</div>";
        $result .="<div class='textcard'>";
        $result .="<p>{$item['attraction']}</p>";
        $result .="</div>";
        $result .="</div>";

    }
    return $result;
}
