<?php
require_once 'vendor/autoload.php';
require_once 'db.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.twig', ['todos' => getTodos()]);
exit;