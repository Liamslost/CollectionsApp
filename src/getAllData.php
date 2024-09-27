<?php
function getAllDataUSA($db)
{
    $query = $db->prepare("SELECT `All_States`.`State_name` AS 'location' , `USA`.`sublocation`, `USA`.`attraction`, `USA`.`photo`
FROM `USA`
JOIN `All_States`
ON `USA`.`location` = `All_States`.`id`");
    $query->execute();
    return $query->fetchall();
}

// gets all field from All_States table
function getAllDataAllStates($db)
{
    $query = $db->prepare("SELECT `All_States`.`state_name`, `All_States`.`id` FROM `All_States`");
    $query->execute();
    return $query->fetchall();
}



