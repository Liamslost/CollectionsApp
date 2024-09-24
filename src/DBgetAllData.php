<?php
function DBgetAllData ($db)
{
    $query = $db->prepare("SELECT `location`, `sublocation`, `attraction`,`info`, `photo`, `rating`  FROM `USA`");
    $query->execute();
    return $query->fetchall();
}

