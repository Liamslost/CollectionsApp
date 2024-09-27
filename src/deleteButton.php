<?php

function deleteButton ($db)
{
    $query = $db->prepare("DELETE FROM `USA` WHERE `id` = {$item['id']}}");
    $query->execute();
}