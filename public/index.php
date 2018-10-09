<?php
// chargement de l'autoload en début de fichier
require __DIR__ . '/../vendor/autoload.php';
//...


use Controller\ItemController;

$itemController = new ItemController();
$itemController->index();
?>

