<?php

namespace App\Services\Impl;

use App\Models\Food;
use App\Services\HomeService;

class HomeServiceImpl implements HomeService
{

    public function getall()
    {
        $foods = Food::all();

        if ($foods == null){
            throw new \Exception('Netu dannyx', 404);
        }

        return $foods;
    }
}
