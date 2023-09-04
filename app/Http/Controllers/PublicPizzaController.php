<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Inertia\{Inertia, Response};

class PublicPizzaController extends Controller
{
    public function show(Pizza $pizza): Response
    {
        return Inertia::render('Pizzas/Show', [
            'pizza' => $pizza,
        ]);
    }
}
