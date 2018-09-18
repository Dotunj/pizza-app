<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizza = Pizza::with('toppings')->inRandomOrder()->get();

        $result = [
            'status'=>true,
            'message'=>'Retrieved all pizzas successfully',
            'data'=>$pizza
        ];

        return response()->json($result, 200);
    }
}
