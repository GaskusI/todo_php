<?php

$db = new mysqli("localhost", "root", "", "todo");
$array = array();

function getData() {

    global $db;
    global $array;

    $stmt = $db->prepare('SELECT * FROM activities');
    $stmt->execute();

    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    }

    mysqli_close($db);

}

?>