<?php
function DBgetAllData ($db)
{
    $query = $db->prepare("SELECT `All_States`.`State_name` AS 'location' , `USA`.`sublocation`, `USA`.`attraction`, `USA`.`photo`
FROM `USA`
JOIN `All_States`
ON `USA`.`location` = `All_States`.`id`");
    $query->execute();
    return $query->fetchall();
}
//SELECT `location`, `sublocation`, `attraction`,`info`, `photo`, `rating`  FROM `USA`
