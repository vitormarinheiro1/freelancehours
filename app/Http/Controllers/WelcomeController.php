<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = User::query()->create([
            'name' => 'Vitor',
            'email' => 'vitormarinheiro9@gmail.com',
            'password'=> 'senha',
        ]);

        dd($user);

        return view('welcome');
    }
}
