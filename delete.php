<?php

// Retrieve the row ID from the URL parameter
$id = $_GET['id'];

// Connect to the database
$db = new mysqli("localhost", "root", "", "todo");

// Delete the row from the database
$stmt = $db->prepare("DELETE FROM activities WHERE `index`=?");
$stmt->bind_param("i", $id);
$stmt->execute();
mysqli_close($db);

// Redirect back to the main page
header("Location: index.php");
exit();

?>