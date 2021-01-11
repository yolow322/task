<?php

namespace App\Http\Controller;

use App\Core\Request;
use App\Model\SecondTask;

class SecondTaskController
{
    public function searchingInArray()
    {
        $secondTask = new SecondTask();
        $request = new Request();
        foreach ($secondTask->array as $key => $value) {
            if ($key == $request->input('searching_key')) {
                return $value;
            }
        }
        return 'Не найдено';
    }
}
