<?php
namespace Controller;
use Model\ItemManager;
use View\View;

class ItemController
{
    public function index()
    {
        $itemManager = new ItemManager();
        $items = $itemManager->selectAllItems();

        $view = new View();
        return $view->render(__DIR__ . '/../View/item.php', ['items'=> $items]);
    }

    public function show(int $id)
    {
        $itemManager = new ItemManager();
        $item = $itemManager->selectOneItem($id);

        require __DIR__ . '/../View/showItem.php';
    }
}
?>
<?php


