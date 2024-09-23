<?php
require_once 'DBconnect/DBconnect.php';

$db = DBconnect();
$query = $db->prepare("SELECT `location`, `sublocation`, `attraction`,`info`, `photo`, `rating`  FROM `USA`");
$result = $query->execute();

if ($result) {
    $all = $query->fetchall();
}else{
    echo 'Error';
}
require_once 'getInfo/getInfo.php';

echo getInfo($all);


