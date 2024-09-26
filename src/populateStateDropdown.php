<?php

function populateStateDropdown(array $statesTable): string
{
    $options = '';
    foreach ($statesTable as $states) {
        $options .= "<option value=\"{$states['id']}\">{$states['State_name']}</option>";
    }
    return $options;
}