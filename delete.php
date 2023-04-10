<?php
require_once 'db.php';

$id = $_GET['id'];

deleteActivity($id);

header("Location: index.php");