<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function filter(Request $request)
    {
        $this->validate(
            $request,
            ['nome' => 'required']
        );

        return User::query()
            ->where('nome', 'LIKE', "%{$request->nome}%")
            ->get();
    }
}
