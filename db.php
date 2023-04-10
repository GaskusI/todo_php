<?php

$db = new mysqli("localhost", "root", "", "todo");
function getTodos() {
    global $db;

    $stmt = $db->prepare('SELECT * FROM activities');
    $stmt->execute();

    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    }

    return $array;
}

function updateActivity($id, $activity) {
    global $db;

    $stmt = $db->prepare("UPDATE activities SET activity = ? WHERE `index` = ?");
    $stmt->bind_param("si", $activity, $id);
    $stmt->execute();
}

function deleteActivity($id) {
    global $db;
    
    $stmt = $db->prepare("DELETE FROM activities WHERE `index` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

function addActivity() {
    global $db;
    
    $stmt = $db->prepare("INSERT INTO activities (activity) VALUES (?)");
	$stmt->bind_param("s", $_POST['activity']);
	$stmt->execute();
}

function getActivity($id) {
    global $db;
    
    $stmt = $db->prepare("SELECT * FROM activities WHERE `index` = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    return $row;
}

function checkRecord($id) {
    global $db;

    $stmt = $db->prepare("SELECT * FROM activities WHERE `index` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute([$id]);
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        return false;
    }
    return true;
}