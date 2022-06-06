<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ReportPdfMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::query()->where('email', $request->email)->first();

        if (!$user || Hash::check($request->password, $user->password)) {
            return response()->json(['data' => 'Usuário/Senha não confere'], 422);
        }
        // Mail::to('alex.fnvip@gmail.com')->send(new ReportPdfMail($user));
        $token = $user->createToken('LARAVEL_TOKEN')->accessToken;

        return response()->json(
            ['data' => [
                'token' => $token
            ]],
            200
        );
    }

    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();

        return response()->json(
            ['data' => 'You have been successfully logged out!']
        );
    }

    public function me()
    {
        $user = auth()->user();

        if (!$user) {
            return response()->json(['data' => 'Unauthenticated'], 401);
        }

        return response()->json(['data' => $user], 200);
    }
}
