<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::with('toppings')->inRandomOrder()->get();

        $result = [
            'status'=>true,
            'message'=>'Retrieved all pizzas successfully',
            'data'=>$pizzas
        ];

        return response()->json($result, 200);
    }
}
