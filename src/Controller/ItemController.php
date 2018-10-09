<?php
namespace Controller;


use Model\ItemManager;

class ItemController
{

// src/Controller/ItemController.php
//require __DIR__ . '/../Model/ItemManager.php';


public function index(){
    $itemManager = new ItemManager;
    $items = $itemManager-> selectAllItems();
    require __DIR__ . '/../View/item.php';
}

}
?>