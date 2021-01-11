<?php


namespace App\Http\Controller;

use App\Core\View;
use App\Model\ThirdTask;

class ThirdTaskController
{
    public function createNewArray()
    {
        $thirdTask = new ThirdTask();
        foreach ($thirdTask->array as $key => $value) {
            if ($key % 3 == 0) {
                $newArray[$key] = $value;
            }
        }
        View::render('third_task', [
           'newArray' => $newArray
        ]);
    }
}