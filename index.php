<?php
require_once 'src/dbConnect.php';
require_once 'src/getAllData.php';
require_once 'src/displayLocations.php';
require_once 'src/populateStateDropdown.php';
require_once 'src/addToTable.php';

$db = dbConnect();
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
$usaTableData = getAllDataUSA($db);
$allStatesData = getAllDataAllStates($db);
?>
<html lang="eng">
<head>
    <link rel="stylesheet" href="style.css">
</head>

<title>Collections App</title>
<nav></nav>
<body>
<div class="headingContainer">
    <h1 class="heading">Whats in USA?</h1>
    <form method="post" class="inputField">
        <label for="states">State:</label>
        <select name="states" id="states" required>
            <?php echo populateStateDropdown($allStatesData)?>
        </select>
        <input type="text" name="sublocation" placeholder="Sublocation">
        <input type="text" name="attraction" placeholder="Attraction">
        <button class="addEntryButton">Add Entry</button>
    </form>
</div>
</div>
<div class="cardContainer">
    <?php  echo displayLocations($usaTableData);

    ?>
</div>
<div class="inputContainer">
</div>

</body>
</html>
