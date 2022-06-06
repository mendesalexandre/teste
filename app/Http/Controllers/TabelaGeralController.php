<?php

namespace App\Http\Controllers;

use App\Models\TabelaGeral;
use Illuminate\Http\Request;

class TabelaGeralController extends Controller
{
    public function index()
    {
        return response()->json(['data' => TabelaGeral::all()], 200);
    }
}
