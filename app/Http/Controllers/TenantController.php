<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function create(Request $request)
    {
        return Tenant::create($request->all());
    }
}
