<?php

namespace App\Services\Impl;

use App\Models\Foodchef;
use App\Services\ChefService;




class ChefServiceImpl implements ChefService
{
    public function getall()
    {
        $foodchefs = Foodchef::all();

        if ($foodchefs == null){
            throw new \Exception('Netu dannyx', 404);
        }

        return $foodchefs;
    }
}
