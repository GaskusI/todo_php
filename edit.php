<?php
require_once 'vendor/autoload.php';
require_once 'db.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

if (isset($_GET['id']) && is_numeric($_GET['id']) && checkRecord($_GET['id']) != 0) {
    $id = $_GET['id'];
    $activity = getActivity($id);



    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $activity = $_POST['activity'];

        updateActivity($id, $activity);
        header("Location: index.php");
        exit;
    }

    echo $twig->render('edit.twig', [
        'index' => $activity['index'],
        'activity' => $activity['activity']
    ]);
} else {
    header("Location: index.php");
    exit;
}