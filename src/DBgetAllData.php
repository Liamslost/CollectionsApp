<?php
function DBgetAllDataUSA ($db)
{
    $query = $db->prepare("SELECT `All_States`.`State_name` AS 'location' , `USA`.`sublocation`, `USA`.`attraction`, `USA`.`photo`, `USA`.`id`
FROM `USA`
JOIN `All_States`
ON `USA`.`location` = `All_States`.`id`");
    $query->execute();
    return $query->fetchall();
}

// gets all field from All_States table
function DBgetAllDataAll_States ($db)
{
    $query = $db->prepare("SELECT `All_States`.`State_name`, `All_States`.`id` FROM `All_States`");
    $query->execute();
    return $query->fetchall();
}



