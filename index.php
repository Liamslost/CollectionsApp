<?php
require_once 'src/DBconnect.php';
require_once 'src/DBgetAllData.php';
require_once 'src/DisplayLocations.php';

$db = DBconnect();
$allTableData = DBgetAllData($db);

?>
<html lang="eng">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<head>
    <link rel="stylesheet" href="style.css">
</head>
<title>Collections App</title>

<body>
<nav></nav>
    <div class="headingContainer">
        <h1 class="heading">Whats in USA?</h1>
    </div>
    <div class="cardContainer">
        <?php  echo displayLocations($allTableData)?>
    </div>

</body>
</html>


