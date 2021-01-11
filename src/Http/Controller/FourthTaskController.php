<?php

namespace App\Http\Controller;

use App\Core\View;
use App\Model\FourthTask;

class FourthTaskController
{
    public function get()
    {
        View::render('fourth_task', [
            'products' => FourthTask::getProducts()
        ]);
    }
}