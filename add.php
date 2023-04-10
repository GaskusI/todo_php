<?php

require_once 'vendor/autoload.php';
require_once 'db.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $activity = $_POST['activity'];
    addActivity($activity);
    header("Location: index.php");
    exit;
}

echo $twig->render('add.twig');
