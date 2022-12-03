<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeResource;
use App\Services\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }


    public function index(){
        try {
            $foods = $this->homeService->getall();

            return response()->json([
                'status' => true,
                'foods' => HomeResource::collection($foods)
            ]);
        } catch (\Exception $e){
            return response()->json([
                'status' => true,
                'message' => $e->getMessage()
            ], $e->getCode());
        }
    }
}
