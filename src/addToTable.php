<?php
function addToTable($db, $data)
{
    try {
        $location = $data['state'];

        $query = $db->prepare("INSERT INTO `USA` (`location`, `sublocation`, `attraction`, `photo`) VALUES (:location, :sublocation, :attraction, :photo)");
        $query->execute([
            'location' => $data['state'],
            'sublocation' => $data['sublocation'],
            'attraction' => $data['attraction'],
            'photo' => 'images/placeholder.svg'
        ]);
    } catch (Exception $error) {
        echo "Error " . $error->getMessage();
    }

}