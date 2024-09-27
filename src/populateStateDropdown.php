<?php

function populateStateDropdown(array $statesTable): string
{
    $options = '';
    foreach ($statesTable as $states) {
        if (!isset($states['id']) || !isset($states['state_name'])) {
            throw new InvalidArgumentException("Unassigned key");
        }
        $options .= "<option value={$states['id']}>{$states['state_name']}</option>";
    }

    return $options;
}