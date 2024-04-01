<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Login extends Component
{
    #[Title('Login')]
    #[Layout('components.layouts.auth')]

    public $email = '';
    public $password = '';

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login(){
        $payload = $this->validate([
            "email" => 'required|min:2|max:30',
            'password' => 'required'
        ]);

        if (Auth::attempt($payload)) {
            session()->regenerate();
            session()->flash("success", "Logged in successfully!");
            return $this->redirectRoute("dashboard", navigate: true);
        }
        return $this->addError('email', "The provided credentials do not match our records");

    }
}
