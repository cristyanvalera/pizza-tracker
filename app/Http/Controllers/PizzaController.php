<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;
use Inertia\{Inertia, Response};

class PizzaController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Pizzas/All', [
            'pizzas' => Pizza::all(),
        ]);
    }
}
