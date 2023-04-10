<?php

$id = $_GET['id'];

$db = new mysqli("localhost", "root", "", "todo");

$stmt = $db->prepare("DELETE FROM activities WHERE `index`=?");
$stmt->bind_param("i", $id);
$stmt->execute();
mysqli_close($db);

header("Location: index.php");
exit();

?>