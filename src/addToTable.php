<?php
function addToTable ($db, $data)
{
    try {


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

Function deleteEntry($db)
{
    try {
        if (isset ($_POST['id'])){

        $query = $db->prepare("DELETE FROM `USA` WHERE `id` = {$_POST['id']}");
        $query->execute();
            }
        } catch(Exception $error) {
        echo "error" . $error->getMessage();
    }
}

