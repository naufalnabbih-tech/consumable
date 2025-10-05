<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.auth')]
#[Title('Login')]
class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->form->validate();

        if (Auth::attempt([
            'email' => $this->form->email,
            'password' => $this->form->password
        ], $this->form->remember)) {
            request()->session()->regenerate();

            session()->flash('success', 'Welcome back!');

            return redirect()->intended('/dashboard');
        }

        $this->addError('form.email', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
