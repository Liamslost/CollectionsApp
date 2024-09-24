<?php
require_once 'DBconnect/DBconnect.php';
require_once 'DBgetAllData/DBgetAllData.php';

$db = DBconnect();
$allTableData =DBgetAllData($db);

require_once 'DisplayLocations/DisplayLocations.php';

Echo DisplayLocations($allTableData);




