<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email = '';
    public $password = '';

    public function login()
    {
        // $credentials = request()->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        if (Auth::attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            request()->session()->regenerate();
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.login')
            ->extends('layouts.auth.base');
    }
}
