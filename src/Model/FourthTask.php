<?php

namespace App\Model;

use App\Core\Application;

class FourthTask
{
    public static function getProducts(): array
    {
        return Application::$app->dataBase->pdo->query('
           SELECT table1.name as name, table2.price2 as price2 FROM table1
                INNER JOIN table2 ON table2.product_id = table1.product_id
           WHERE price2 > 2000
        ')->fetchAll();
    }
}