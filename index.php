<?php
$db = new PDO(
    'mysql:host=DB;dbname=collections',   //DSN
    'root',                    // Database username
    'password'                 //Database password
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `location`, `sublocation`, `attraction`,`info`, `photo`, `rating`  FROM `USA`");
$result = $query->execute();

$location=[];

if($result) {
    $all = $query->fetchall();
}
foreach ($all as $item) {
    echo "The location is " . $item['location'];
    echo "<br>";
    echo "The sublocation is " . $item['sublocation'];
    echo "<br>";
    echo "While I was there I went to " . $item['attraction'];
    echo "<br><br>";
}


