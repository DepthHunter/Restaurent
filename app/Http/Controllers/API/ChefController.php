<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\ChefService;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    protected $сhefService;

    public function __construct(ChefService $chefService)
    {
        $this->chefService = $chefService;
    }


    public function index(){
        try {
            $foodchef = $this->chefService->getall();

            return response()->json([
                'status' => true,
                'foodchef' => $foodchef
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => true,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }
}
