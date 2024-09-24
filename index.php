<?php
require_once 'src/DBconnect.php';
require_once 'src/DBgetAllData.php';
require_once 'src/DisplayLocations.php';

$db = DBconnect();
$allTableData = DBgetAllData($db);

?>
<html lang="eng">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<title>Collections App</title>

<body>
<div class="cardcontainer">
    <?php  echo displayLocations($allTableData);;

    ?>
</div>
</body>
</html>


