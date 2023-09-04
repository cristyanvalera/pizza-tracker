<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Inertia\{Inertia, Response};
use Illuminate\Http\{RedirectResponse, Request};

class PizzaController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Pizzas/All', [
            'pizzas' => Pizza::all(),
        ]);
    }

    public function edit(Pizza $pizza): Response
    {
        return Inertia::render('Pizzas/Edit', [
            'pizza' => $pizza,
        ]);
    }

    public function update(Pizza $pizza, Request $request): void
    {
        $pizza->update([
            'status' => $request->status,
        ]);
    }
}
