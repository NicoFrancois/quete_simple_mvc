<?php

namespace Model;
require __DIR__ . '/../../app/db.php';
class ItemManager
{
// src/Model/ItemManager.php


// récupération de tous les items
    public function selectAllItems(): array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }
}
