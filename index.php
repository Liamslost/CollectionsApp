<?php
require_once 'src/DBconnect.php';
require_once 'src/DBgetAllData.php';
require_once 'src/DisplayLocations.php';
require_once 'src/populateStateDropdown.php';
require_once 'src/addToTable.php';

$db = DBconnect();
if (isset($_POST['states']) && isset($_POST['sublocation']) && isset($_POST['attraction'])) {
    $state = filter_var($_POST['states'], FILTER_VALIDATE_INT);
    if ($state === false) {
        echo "<div class='addtotablemessage'>Invalid State provided!</div>";
    }
    $sublocation = htmlspecialchars($_POST['sublocation']);
    $attraction = htmlspecialchars($_POST['attraction']);
    if ($state && $sublocation && $attraction) {
        $data = [
            'state'=> $state,
            'sublocation'=> $sublocation,
            'attraction' => $attraction
        ];
        addToTable($db, $data);
    }
}
$USATableData = DBgetAllDataUSA($db);
$All_statesData = DBgetAllDataAll_States($db);


?>
<html lang="eng">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<title>Collections App</title>
<body>
<div class="headingContainer">
    <h1 class="heading">Whats in USA?</h1>
</div>
    <div class="section">
        <label class="newEntryButton">New Entry
        <input type="checkbox" class="checkbox">
            <form method="post" class="inputField">
                <label for="states"></label>
                <select name="states" id="states" required>
                    <?php echo populateStateDropdown($All_statesData)?>
                </select>
                <p></p>
                <input type="text" name="sublocation" placeholder="Sublocation">
                <p></p>
                <input type="text" name="attraction" placeholder="Attraction">
                <p></p>
                <button class="addEntryButton">Add Entry</button>
            </form>
        </label>
    </div>
<div class="cardContainer">
    <?php  echo displayLocations($USATableData); ?>
</div>
<div class="inputContainer">
</div>
</body>
</html>
